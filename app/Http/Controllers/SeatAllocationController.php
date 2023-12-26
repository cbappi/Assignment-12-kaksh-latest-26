<?php

namespace App\Http\Controllers;

use App\Models\SeatAllocation;
use App\Models\Trip;
use App\Models\User;
use App\Models\Location;
use Illuminate\Http\Request;

class SeatAllocationController extends Controller
{
    public function index()
    {
        $seatAllocations = SeatAllocation::with('trip', 'user', 'location')->get();

        return view('seat_allocations.index', compact('seatAllocations'));
    }

    public function create()
    {
        $trips = Trip::all();
        //$locations = Location::all();

        return view('seat_allocations.create', compact('trips'));
    }

    public function store(Request $request)
    {
        // $request->validate([
        //     'trip_id' => 'required|exists:trips,id',
        //     //'location_id' => 'required|exists:locations,id',
        //     //'trip_date' => 'required|date',
        //     'name' => 'required|string',
        //     'phone' => 'required|string|unique:seat_allocations',
        //     //'destination' => 'required|string',
        //     'ticket_quantity' => 'required|integer',
        //     'price' => 'required|integer',
        //     'amount' => 'required|integer',
        //     //'bus_start_time' => 'nullable|date_format:H:i',
        // ]);

        //SeatAllocation::create($request->all());




            //SeatAllocation::create($request->all());

            $sumTicketQuantity = SeatAllocation::where('trip_id', $request->trip_id)->sum('ticket_quantity');

            if (($sumTicketQuantity + $request->ticket_quantity) > 36) {
                return redirect()->route('seat_allocations.create')->with('success',(36 - $sumTicketQuantity) . ' seat(s) remaining.');
            }

            // elseif(($sumTicketQuantity + $request->ticket_quantity)== 36) {
            //     return redirect()->route('seat_allocations.create')->with('success', 'All tickets sold. Only ' . (36 - $sumTicketQuantity) . ' seat(s) remaining.');
            // }

            SeatAllocation::create([
                'trip_id' => $request->trip_id,
                'name' => $request->name,
                'phone' => $request->phone,
                'ticket_quantity' => $request->ticket_quantity,
                'price' => $request->price,

                $totalAmount = $request->ticket_quantity*$request->price,

                'amount' => $totalAmount,

                ]);



            return redirect()->route('seat_allocations.index')->with('success', 'Seat allocation created successfully');






    // ... Other methods ...















        // return redirect()->route('seat_allocations.index')->with('success', 'Seat allocation created successfully');
    }

    public function show(SeatAllocation $seatAllocation)
    {
        return view('seat_allocations.show', compact('seatAllocation'));
    }

    public function edit(SeatAllocation $seatAllocation)
    {
        $trips = Trip::all();
        $locations = Location::all();

        return view('seat_allocations.edit', compact('seatAllocation', 'trips', 'locations'));
    }

    // public function update(Request $request, SeatAllocation $seatAllocation)
    // {

    //     //dd($request->all());
    //     $request->validate([
    //         'trip_id' => 'required|exists:trips,id',
    //         //'user_id' => 'required|exists:users,id',
    //         'location_id' => 'required|exists:locations,id',
    //         'trip_date' => 'required|date',
    //         'name' => 'required|string',
    //         'phone' => 'required|string|unique:seat_allocations,phone,' . $seatAllocation->id,
    //         'destination' => 'required|string',
    //         'ticket_quantity' => 'required|integer',
    //         'price' => 'required|integer',
    //         'amount' => 'required|integer',
    //         'bus_start_time' => 'nullable|date_format:H:i',
    //     ]);

    //     $seatAllocation->update($request->all());

    //    // dd($request->all());

    //     return redirect()->route('seat_allocations.index')->with('success', 'Seat allocation updated successfully');


    // }

    public function update(Request $request, SeatAllocation $seatAllocation)
    {
        $request->validate([
            'trip_id' => 'required|exists:trips,id',
           // 'location_id' => 'required|exists:locations,id',
           // 'trip_date' => 'required|date',
            'name' => 'required|string',
            'phone' => 'required|string|unique:seat_allocations,phone,' . $seatAllocation->id,
            //'destination' => 'required|string',
            'ticket_quantity' => 'required|integer',
            'price' => 'required|integer',
           //'amount' => 'required|integer',
           // 'bus_start_time' => 'nullable|date_format:H:i',
        ]);


        $seatAllocation->update($request->all());

        return redirect()->route('seat_allocations.index')->with('success', 'Seat allocation updated successfully');
    }

    public function destroy(SeatAllocation $seatAllocation)
    {
        $seatAllocation->delete();

        return redirect()->route('seat_allocations.index')->with('success', 'Seat allocation deleted successfully');
    }
}
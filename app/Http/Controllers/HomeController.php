<?php

namespace App\Http\Controllers;

use App\Models\Trip;
use App\Models\SeatAllocation;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function searchTrips(Request $request)
    {
        $request->validate([
            'trip_date' => 'nullable|date',
            'from' => 'nullable|string',
            'to' => 'nullable|string',
        ]);

        $trips = Trip::when($request->trip_date, function ($query) use ($request) {
            $query->where('trip_date', $request->trip_date);
        })
        ->when($request->from, function ($query) use ($request) {
            $query->where('from', 'like', '%' . $request->from . '%');
        })
        ->when($request->to, function ($query) use ($request) {
            $query->where('to', 'like', '%' . $request->to . '%');
        })
        ->get();

        if ($trips->isNotEmpty()) {
            return redirect()->route('home')->with([
                'tripFound' => true,
                'sitQuantity' => $trips->first()->sit_quantity,
            ]);
        } else {
            return redirect()->route('home')->with('tripNotFound', true);
        }
    }

    public function bookTicket()
    {
        //return view('book_ticket');
        return view('seat_allocatios.create');
    }
}

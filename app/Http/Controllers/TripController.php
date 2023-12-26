<?php

namespace App\Http\Controllers;

use App\Models\Trip;
use Illuminate\Http\Request;

class TripController extends Controller
{
    public function index()
    {
        $trips = Trip::all();

        return view('trips.index', compact('trips'));
    }

    public function create()
    {
        return view('trips.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'trip_date' => 'required|date',
            'from' => 'required|string',
            'to' => 'required|string',
            'sit_quantity' => 'required|integer',
            'start_time' => 'nullable|date_format:H:i',
        ]);

        Trip::create($request->all());

        return redirect()->route('trips.index')->with('success', 'Trip created successfully');
    }

    public function show(Trip $trip)
    {
        return view('trips.show', compact('trip'));
    }

    public function edit(Trip $trip)
    {
        return view('trips.edit', compact('trip'));
    }

    public function update(Request $request, Trip $trip)
    {
        $request->validate([

            'trip_date' => 'required|date',
            'from' => 'required|string',
            'to' => 'required|string',
            'sit_quantity' => 'required|integer',
            //'start_time' => 'nullable|date_format:H:i',
        ]);

        $trip->update($request->all());

        return redirect()->route('trips.index')->with('success', 'Trip updated successfully');
    }

    public function destroy(Trip $trip)
    {
        $trip->delete();

        return redirect()->route('trips.index')->with('success', 'Trip deleted successfully');
    }
}

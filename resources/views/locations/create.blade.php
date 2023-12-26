<!-- resources/views/trips/create.blade.php -->

@extends('master') <!-- You may need to adjust this based on your project's layout structure -->

@section('content')
    <div class="container">
        <h2>Create a New Location</h2>

        <form method="POST" action="{{ route('locations.store') }}">
            @csrf

            <div class="form-group mb-3">
                <label for="destination">Destinations:</label>
                <input type="text" name="destination" class="form-control" required>
            </div>

            <button type="submit" class="btn btn-primary">Create Location</button>
        </form>
    </div>
@endsection








{{-- @extends('master')

@section('content')
    <div class="container">
        <h2>Create a New Tripp</h2>

        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <form action="{{ route('trips.store') }}" method="POST">

            @csrf



            <div class="form-group">
                <label for="trip_date">Trip Date:</label>
                <input type="date" id="trip_date" name="trip_date" class="form-control" required>
            </div>



            <div class="form-group">
                <label for="from">From:</label>
                <select name = "from" class="form-select" aria-label="Default select example" required >
                    <option selected>Open this select menu</option>
                    <option value="1">Dhaka</option>
                    <option value="2">Comilla</option>
                    <option value="3">Chittagong</option>
                    <option value="3">Coxsbazar</option>
                </select>
            </div>


            <div class="form-group">
                <label for="to">To:</label>
                <select name = "to" class="form-select" aria-label="Default select example" required >
                    <option selected>Open this select menu</option>
                    <option value="1">Dhaka</option>
                    <option value="2">Comilla</option>
                    <option value="3">Chittagong</option>
                    <option value="3">Coxsbazar</option>
                </select>
            </div>


            <div class="form-group">
                <label for="sit_quantity">Alocated sit for this trip:</label>
                <input type="number" id="sit_quantity" name="sit_quantity" class="form-control" required>

            </div>

            <div class="form-group">

                <label for="start_time">Start Time:</label>
                <input type="time" id="start_time" name="start_time" class="form-control">
            </div>


            <button type="submit" class="btn btn-primary">Create Trip</button>
            {{-- <a class = "btn button btn-primary" href="{{ route('trips.create') }}">Back to Trip Details</a> --}}
        {{-- </form>
    </div>
@endsection --}}

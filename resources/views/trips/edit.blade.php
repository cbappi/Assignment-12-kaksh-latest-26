

@extends('master')

@section('content')
    <div class="container">
        <h2>Edit Trip</h2>

        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <form method="POST" action="{{ route('trips.update', $trip->id) }}">
            @csrf
            @method('PUT')



            <div class="form-group">
                <label for="trip_date">Trip Date:</label>
                <input type="date" name="trip_date" class="form-control" value="{{ $trip->trip_date }}" required>
            </div>

            <div class="form-group">
                <label for="from">From:</label>
                <input type="text" name="from" class="form-control" value="{{ $trip->from }}" required>
            </div>

            <div class="form-group">
                <label for="to">To:</label>
                <input type="text" name="to" class="form-control" value="{{ $trip->to }}" required>
            </div>

            <div class="form-group">
                <label for="sit_quantity">Seat Quantity:</label>
                <input type="number" name="sit_quantity" class="form-control" value="{{ $trip->sit_quantity }}" required>
            </div>

            <div class="form-group">
                <label for="start_time">Start Time:</label>
                <input type="time" name="start_time" class="form-control" value="{{ $trip->start_time }}">
            </div>

            <button type="submit" class="btn btn-primary">Update Trip</button>
        </form>
    </div>
@endsection

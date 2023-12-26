<!-- resources/views/seat_allocations/create.blade.php -->

@extends('master') <!-- You may need to adjust this based on your project's layout structure -->

@section('content')
    <div class="container">
        <h2>Create Seat Allocation</h2>

        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <form method="POST" action="{{ route('seat_allocations.store') }}">
            @csrf

            <div class="form-group">
                <label for="trip_id">Select Trip:</label>
                <select name="trip_id" class="form-control" required>
                    @foreach($trips as $trip)
                        <option value="{{ $trip->id }}">Destination : {{ $trip->from }} to {{ $trip->to }} - Trip date : {{ $trip->trip_date }} -Buss start time : {{ $trip->start_time }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="trip_date">Trip date:</label>
                <input type="date" name="trip_date" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="name">Passenger name:</label>
                <input type="text" name="name" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="phone">Passenger phone:</label>
                <input type="text" name="phone" class="form-control" required>
            </div>



            <div class="form-group">
                <label for="ticket_quantity">Ticket Quantity:</label>
                <input type="number" name="ticket_quantity" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="price">Price:</label>
                <input type="number" name="price" class="form-control" required>
            </div>

            {{-- <div class="form-group">
                <label for="amount">Amount:</label>
                <input type="number" name="amount" class="form-control" required>
            </div> --}}

            {{-- <div class="form-group">
                <label for="bus_start_time">Bus Start Time:</label>
                <input type="time" name="bus_start_time" class="form-control">
            </div> --}}

            {{-- <div class="form-group">
                <label for="bus_start_time">Bus Start Time:</label>
                <select name="trip_id" class="form-control" required>
                    @foreach($trips as $trip)
                        <option value="{{ $trip->id }}">{{ $trip->start_time }}</option>
                    @endforeach
                </select>
            </div> --}}

            <button type="submit" class="btn btn-primary">Create Seat Allocation</button>
        </form>
    </div>
@endsection

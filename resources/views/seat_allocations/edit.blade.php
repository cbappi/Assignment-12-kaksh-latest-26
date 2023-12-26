

@extends('master')

@section('content')
    <div class="container">
        <h2>Edit Seat Allocation</h2>

        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <form method="POST" action="{{ route('seat_allocations.update', $seatAllocation->id) }}">
            @csrf
            @method('PUT')


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
                <input type="date" name="trip_date" class="form-control" value="{{ $seatAllocation->trip_date }}" required>
            </div>

            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" name="name" class="form-control" value="{{ $seatAllocation->name }}" required>
            </div>

            <div class="form-group">
                <label for="phone">Phone:</label>
                <input type="text" name="phone" class="form-control" value="{{ $seatAllocation->phone }}" required>
            </div>



            <div class="form-group">
                <label for="ticket_quantity">Ticket Quantity:</label>
                <input type="number" name="ticket_quantity" class="form-control" value="{{ $seatAllocation->ticket_quantity }}" required>
            </div>

            <div class="form-group">
                <label for="price">Price:</label>
                <input type="number" name="price" class="form-control" value="{{ $seatAllocation->price }}" required>
            </div>


            <button type="submit" class="btn btn-primary">Update Seat Allocation</button>
        </form>
    </div>
@endsection

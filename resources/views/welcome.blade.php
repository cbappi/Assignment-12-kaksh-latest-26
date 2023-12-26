@extends('master') <!-- You may need to adjust this based on your project's layout structure -->

@section('content')
    <div class="container">
        <h2>Search Trips</h2>

        <form method="GET" action="{{ route('search.trips') }}">
            <div class="form-group">
                <label for="trip_date">Trip Date:</label>
                <input type="date" name="trip_date" class="form-control">
            </div>

            <div class="form-group">
                <label for="from">From:</label>
                <input type="text" name="from" class="form-control">
            </div>

            <div class="form-group">
                <label for="to">To:</label>
                <input type="text" name="to" class="form-control">
            </div>

            <button type="submit" class="btn btn-primary">Search Trip</button>
        </form>

        @if(session('tripFound'))
            <div class="alert alert-success">
                Trip Found<br>
                Sit Quantity: {{ session('sitQuantity') }}
                <br>
                <a href=" {{route('seat_allocations.create') }}" class="btn btn-primary">Book Ticket</a>
            </div>
        @elseif(session('tripNotFound'))
            <div class="alert alert-danger">
                Trip Not Found
            </div>
        @endif
    </div>
@endsection

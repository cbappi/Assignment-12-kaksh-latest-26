

@extends('master')

@section('content')
    <div class="container">
        <h2>Create a New Tript</h2>

        <form method="POST" action="{{ route('trips.store') }}">
            @csrf

            <div class="form-group mb-3">
                <label for="trip_date">Trip Date:</label>
                <input type="date" name="trip_date" class="form-control" required>
            </div>


            <div class="input-group mb-3">
                <label class="input-group-text" for="inputGroupSelect01">From</label>
                <select class="form-select" id="inputGroupSelect01" name = "from">
                    <option selected>Open this select menu</option>
                    <option value="Dhaka">Dhaka</option>
                    <option value="Comilla">Comilla</option>
                    <option value="Chittagong">Chittagong</option>
                    <option value="Coxsbazar">Coxsbazar</option>
                </select>
            </div>


            <div class="input-group mb-3">
                <label class="input-group-text" for="inputGroupSelect01">To</label>
                <select class="form-select" id="inputGroupSelect01" name = "to">
                    <option selected>Open this select menu</option>
                    <option value="Dhaka">Dhaka</option>
                    <option value="Comilla">Comilla</option>
                    <option value="Chittagong">Chittagong</option>
                    <option value="Coxsbazar">Coxsbazar</option>
                </select>
            </div>


            <div class="form-group">
                <label for="sit_quantity">Seat Quantity:</label>
                <input type="number" name="sit_quantity" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="start_time">Start Time:</label>
                <input type="time" name="start_time" class="form-control">
            </div>

            <button type="submit" class="btn btn-primary">Create Trip</button>
        </form>
    </div>
@endsection









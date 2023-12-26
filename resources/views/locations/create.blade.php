

@extends('master')

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











@extends('master')

@section('content')
    <div class="container">
        <h2>Edit Locatios</h2>

        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <form method="POST" action="{{ route('locations.update', $location->id) }}">
            @csrf
            @method('PUT')



            <div class="form-group">
                <label for="destination">Destination:</label>
                <input type="text" name="destination" class="form-control" value="{{ $location->destination }}" required>
            </div>







            <button type="submit" class="btn btn-primary">Update Location</button>
        </form>
    </div>
@endsection

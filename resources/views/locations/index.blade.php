<!-- resources/views/trip/index.blade.php -->
@extends('master')

@section('content')

<!-- resources/views/trips/index.blade.php -->



@section('content')
    <div class="container">
        <h2>Trips</h2>

        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <table class="table">
            <thead>
                <tr>
                    <th>Location Id</th>
                    <th>Destination</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse($locations as $location)
                    <tr>
                        <td>{{ $location->id }}</td>
                        <td>{{ $location->destination }}</td>
                        <td>
                            <a href="{{ route('locations.edit', $location->id) }}" class="btn btn-primary">Edit</a>
                            <form action="{{ route('locations.destroy', $location->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this location?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="11">No locationss found</td>
                    </tr>
                @endforelse


            </tbody>
        </table>
    </div>
@endsection

{{--
<form action="{{ route('trip.search') }}" method="post">
    @csrf
    <label for="trip_date">Trip Date:</label>
    <input type="date" name="trip_date" required>

    <label for="from">From:</label>
    <input type="text" name="from" required>

    <label for="to">To:</label>
    <input type="text" name="to" required>

    <button type="submit">Search Trip</button>
</form> --}}

@endsection


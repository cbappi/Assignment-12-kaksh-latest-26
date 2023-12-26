
@extends('master')


@section('content')
    <div class="container">
        <h2>Trips</h2>

        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <table class="table">
            <thead>
                <tr>
                    <th>Trip Id</th>
                    <th>Trip Date</th>
                    <th>From</th>
                    <th>To</th>
                    <th>Seat Quantity</th>
                    <th>Start Time</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse($trips as $trip)
                    <tr>
                        <td>{{ $trip->id }}</td>
                        <td>{{ $trip->trip_date }}</td>
                        <td>{{ $trip->from }}</td>
                        <td>{{ $trip->to }}</td>
                        <td>{{ $trip->sit_quantity }}</td>
                        <td>{{ $trip->start_time }}</td>
                        <td>
                            <a href="{{ route('trips.edit', $trip->id) }}" class="btn btn-primary">Edit</a>
                            <form action="{{ route('trips.destroy', $trip->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this trip?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6">No trips found</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection





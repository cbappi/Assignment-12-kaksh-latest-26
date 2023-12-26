

@extends('master')
@section('content')
    <div class="container">
        <h2>Seat Allocations</h2>

        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <table class="table">
            <thead>
                <tr>
                    <th>Trip ID</th>
                    <th>Trip Date</th>

                    <th>Name</th>
                    <th>Phone</th>
                    <th>Destination</th>
                    <th>Ticket Quantity</th>
                    <th>Price</th>
                    <th>Amount</th>
                    <th>Bus Start Time</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse($seatAllocations as $seatAllocation)
                    <tr>
                        <td>{{ $seatAllocation->trip_id }}</td>
                        <td>{{ $seatAllocation->trip->trip_date }}</td>

                        <td>{{ $seatAllocation->name }}</td>
                        <td>{{ $seatAllocation->phone }}</td>
                        <td>{{ $seatAllocation->trip->from }} to {{ $seatAllocation->trip->to }}</td>
                        <td>{{ $seatAllocation->ticket_quantity }}</td>
                        <td>{{ $seatAllocation->price }}</td>
                        <td>{{ $seatAllocation->amount }}</td>
                        <td>{{ $seatAllocation->trip->start_time }}</td>
                        <td>
                            <a href="{{ route('seat_allocations.edit', $seatAllocation->id) }}" class="btn btn-primary">Edit</a>
                            <form action="{{ route('seat_allocations.destroy', $seatAllocation->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this seat allocation?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="11">No seat allocations found</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection

<!-- resources/views/trip/index.blade.php -->
@extends('master')

@section('content')

<!-- resources/views/trips/index.blade.php -->



@section('content')
    <div class="container">
        <h2>Pessenger List</h2>

        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <table class="table">
            <thead>
                <tr>
                    <th>User Id</th>
                    <th>Name</th>
                    <th>Phone</th>
                </tr>
            </thead>
            <tbody>
                @forelse($users as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->phone }}</td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="11">No user found</td>
                    </tr>
                @endforelse


            </tbody>
        </table>
    </div>
@endsection


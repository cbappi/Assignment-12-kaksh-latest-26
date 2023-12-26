
@extends('master')

@section('content')
    <h1 class="text-primary">Trip Found</h1>
    <h2 class="text-primary">Available Sit Quantity: {{ $trip->sit_quantity }}</h2>

    <a href="{{ route('seat-allocations.create') }}" class="btn btn-primary" tabindex="-1" role="button">Book ticket</a>

@endsection

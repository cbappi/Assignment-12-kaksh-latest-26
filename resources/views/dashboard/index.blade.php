@extends('master')

@section('title', 'Dashboard')

@section('content')
<div class="row">

<h1>Dashboard</h1>

<div class="container text-center">
    <div class="row justify-content-md-center">
      <div class="col col-md-3 card">
            <div class="card-header">Today's Ticket Sell</div>
            <div class="card-body">
                {{ $todayTotal }}
            </div>
      </div>
      <div class="col col-md-3 card">
            <div class="card-header">Yesterday's Ticket Sell</div>
            <div class="card-body">
                {{ $yesterdayTotal }}
            </div>
      </div>
      <div class="col col-md-3 card">
            <div class="card-header">This Month's Total Ticket Sell  Amount</div>
            <div class="card-body">
                {{ $thisMonthTotal }}
            </div>
      </div>

      <div class="col col-md-3 card">
            <div class="card-header">Last Month's Total Ticket Sell Amount</div>
            <div class="card-body">
                {{ $lastMonthTotal }}
            </div>
      </div>
    </div>

</div>

@endsection



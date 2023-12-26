<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Bus Ticketing System</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">

            <li class="nav-item">
                <a class="nav-link" href=" {{route('trips.create') }} ">Add trip</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href=" {{route('trips.index') }} ">Show trips</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href=" {{route('seat_allocations.create') }} ">Sit booking</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href=" {{route('seat_allocations.index') }} ">Booking details</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href=" {{route('users.index') }} ">Users detail</a>
            </li>


          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{ route('dashboard') }}">Dashboard</a>
          </li>

        </ul>

      </div>
    </div>
</nav>

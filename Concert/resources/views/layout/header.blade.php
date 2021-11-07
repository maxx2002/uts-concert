<nav class="navbar navbar-expand-lg navbar-dark bg-blue">
    <div class="container-fluid">
        <div class="navbar-collapse d-flex justify-content-between mx-3">
            <div>
                <img src="img/logo.png" alt="" width="100">
            </div>
            <div class="navbar-nav">
              <a class="nav-link {{ ($active_home === "active") ? 'active' : '' }}" href="/">Home</a>
              <a class="nav-link {{ ($active_event === "active") ? 'active' : '' }}" href="{{ route('events.index') }}">Event</a>
              <a class="nav-link {{ ($active_band === "active") ? 'active' : '' }}" href="{{ route('bands.index') }}">Band</a>
            </div>
        </div>
    </div>
</nav>


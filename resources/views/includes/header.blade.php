<nav class="navbar navbar-expand-lg bg-dark navbar-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="{{ url('/')}}">DEV MAGAZINE</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}" aria-current="page" href="{{ url('/')}}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ request()->routeIs("tools*") ? 'active' : '' }}" href="{{ route('tools.index')}}">Tools</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
<div class="container">
    <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-2 mb-0 border-bottom">
      <a href="" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">
        <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"/></svg>
      </a>

      <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
        <li><a href="#" class="nav-link px-2 link-secondary">Home</a></li>
        <li><a href="#" class="nav-link px-2 link-dark">Features</a></li>
        <li><a href="#" class="nav-link px-2 link-dark">FAQs</a></li>
        <li><a href="#" class="nav-link px-2 link-dark">About</a></li>
      </ul>

      {{-- <div class="col-md-3 text-end">
        <a href="/Login"><button type="button" class="btn btn-outline-primary me-2">Login</button></a>
        <a href="/Register"><button type="button" class="btn btn-primary">Sign-up</button></a>
      </div>
    </header>
  </div> --}}

@auth
<div class="text-end col-md-3">
{{-- <li class="nav-item dropdown"> --}}
    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
      Welcome, back {{ auth()->user()->name }}
    </a>
    <ul class="dropdown-menu">
      <li><a class="dropdown-item" href="/Dashboard">My Dashboard</a></li>
      <li><hr class="dropdown-divider"></li>
      <li>
        <form action="/logout" method="post">
            @csrf
            <button type="submit" class="dropdown-item">logout</button>
        </form>
        
    </li>
    </ul>
  </li>
</div>
</header>
</div>      
@else
<div class="col-md-3 text-end">
    <a href="/Login"><button type="button" class="btn btn-outline-primary me-2">Login</button></a>
    <a href="/Register"><button type="button" class="btn btn-primary">Sign-up</button></a>
  </div>
</header>
</div>  


@endauth
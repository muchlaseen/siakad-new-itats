<nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
    {{-- <button class="btn btn-primary" id="menu-toggle">Toggle Menu</button> --}}

    {{-- <div class="menu-toggle">
      <i class="fas fa-arrow-right right"></i>
      <i class="fas fa-times cancel"></i>
    </div> --}}

    {{-- <i class="fas fa-bars side menu-toggle"></i>
    <i class="fas fa-times cancel menu-toggle"></i> --}}


    {{-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button> --}}

    <div class="container-fluid">
        <div class="menu-toggle">
            <i class="fas fa-arrow-right right"></i>
            <i class="fas fa-times cancel"></i>
        </div>
        <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
    {{-- <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
        <li class="nav-item active">
          <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li> --}}
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            {{-- Dropdown --}}
            <i class="fas fa-user-circle fa-lg"></i>
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
            {{-- <a class="dropdown-item" href="#">Action</a> --}}
            <a class="dropdown-item" href="#">Setting <i class="fas fa-users-cog ml-2"></i></a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="{{route('akun.logout')}}">Logout <i class="fas fa-sign-out-alt ml-2"></i></a>
          </div>
        </li>
      </ul>
    </div>
  </nav>

  {{-- {{dd($akun)}} --}}

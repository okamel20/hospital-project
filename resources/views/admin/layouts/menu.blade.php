<nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top " id="navigation-example">
  <div class="container-fluid">
    <div class="navbar-wrapper">
      <a class="navbar-brand">{{ trans('admin.Dashboard') }}</a>
    </div>
    <div class="collapse navbar-collapse justify-content-end">
      <ul class="navbar-nav">
        {{-- <li class="nav-item dropdown">
          <a class="nav-link" href="javscript:void(0)" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="material-icons">notifications</i>
            <span class="notification">5</span>
            <p class="d-lg-none d-md-block">
              Some Actions
            </p>
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" href="javascript:void(0)">Mike John responded to your email</a>
            <a class="dropdown-item" href="javascript:void(0)">You have 5 new tasks</a>
            <a class="dropdown-item" href="javascript:void(0)">You're now friend with Andrew</a>
            <a class="dropdown-item" href="javascript:void(0)">Another Notification</a>
            <a class="dropdown-item" href="javascript:void(0)">Another One</a>
          </div>
        </li> --}}
        <li class="nav-item">
          <a class="nav-link" href="{{ adminUrl('profile') }}">
            <i class="material-icons">person</i>
            <p class="d-lg-none d-md-block">
              Account
            </p>
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link" target="_blank" href="{{ url('/') }}">
            <i class="material-icons">home</i>
            <p class="d-lg-none d-md-block">
              Account
            </p>
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="{{ adminUrl('logout') }}">
            <i class="material-icons">logout</i>
            <p class="d-lg-none d-md-block">
              Account
            </p>
          </a>
        </li>
        
      </ul>
    </div>
  </div>
</nav>




<nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
    <!-- Navbar Brand-->
    <a class="navbar-brand ps-3" href="index.html">Logo Brand</a>
    <!-- Sidebar Toggle-->
    <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
    <!-- Navbar Search-->
    <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
        @csrf
        <div class="input-group">
            <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
            <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
        </div>
    </form>
    <!-- Navbar-->
    <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
        <div class=""><a href="{{ route('admin.logout') }}" class="btn btn-light"><i class="fa fa-sign-out" aria-hidden="true"></i></a></div>
        {{-- <div class="dropdown">
            <a class="btn btn-light dropdown-toggle" type="button" id="menu1" data-toggle="dropdown"> 
                <i class="fas fa-user fa-fw"></i>
            <span class="caret"></span></a>
            <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
              <li role="presentation"><a role="menuitem" href="#">Setting</a></li>
              <li role="presentation"><a role="menuitem" href="#">Activity</a></li>
              <li role="presentation"><a role="menuitem" href="#">Logout</a></li>
              
            </ul>
          </div> --}}
        {{-- <div class="dropdown">
            <li class="nav-item dropdown">
                <a id="menu1" class="nav-link dropdown-toggle"  href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="fas fa-user fa-fw"></i></a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="menu1">
                    <li><a class="dropdown-item" href="#!">Settings</a></li>
                    <li><a class="dropdown-item" href="#!">Activity Log</a></li>
                    <li><hr class="dropdown-divider" /></li>
                    <li><a class="dropdown-item" href="#!">Logout</a></li>
                </ul>
            </li>
        </div> --}}
        
    </ul>
</nav>
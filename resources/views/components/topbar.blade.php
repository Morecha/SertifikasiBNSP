<nav class="navbar navbar-expand navbar-light bg-navbar topbar mb-4 static-top">
    <button id="sidebarToggleTop" class="btn btn-link rounded-circle mr-3">
        <i class="fa fa-bars"></i>
    </button>
    <div class="row">
        <div class="col text-center">
            <span class="navbar-brand mb-0 font-weight-bold h1 text-white" style="margin-left: 330px">MOTOR CLUB</span>
        </div>
    </div>

    <ul class="navbar-nav ml-auto">
        <li class="nav-item active no-arrow mx-1">
            <a class="nav-link" href="#">Profil<span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item active no-arrow mx-1">
            <a class="nav-link" href="#">Visi&Misi<span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item active no-arrow mx-1">
            <a class="nav-link" href="#">Produk<span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item active no-arrow mx-1">
            <a class="nav-link" href="#">Kontak<span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item active no-arrow mx-1">
            <a class="nav-link" href="#">About Us<span class="sr-only">(current)</span></a>
        </li>
        <div class="topbar-divider d-none d-sm-block"></div>
        <li class="nav-item dropdown no-arrow">
            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
                <img class="img-profile rounded-circle" src="{{ asset((auth()->user()->avatar) ? 'storage/'.auth()->user()->avatar : 'dist/img/boy.png') }}" style="max-width: 60px">
                <span class="ml-2 d-none d-lg-inline text-white small">{{ Auth::user()->name }}</span>
            </a>
            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="{{ route('admin.profile') }}">
                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                    Profile
                </a>
                <a class="dropdown-item" href="{{ route('admin.logs') }}">
                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                    Activity Log
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="javascript:void(0);" data-toggle="modal" data-target="#logoutModal">
                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                    Logout
                </a>
            </div>
        </li>
    </ul>
</nav>

<ul class="navbar-nav sidebar sidebar-light accordion" id="accordionSidebar">
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="">
        <div class="sidebar-brand-icon">
            <img src="{{ asset((setting('logo')) ? '/storage/'.setting('logo') : 'dist/img/logo/logo2.png') }}">
        </div>
        <div class="sidebar-brand-text mx-3">Motor Club</div>
    </a>
    <hr class="sidebar-divider my-0">

    <x-nav-link
        text="Home"
        icon="tachometer-alt"
        url="{{ route('admin.dashboard') }}"
        active="{{ request()->routeIs('admin.dashboard') ? ' active' : '' }}"
    />

    <hr class="sidebar-divider mb-0">

    <x-nav-link
        text="Artikel"
        icon="arrow-right"
        url="{{ route('admin.artikel') }}"
        active="{{ request()->routeIs('admin.artikel') ? ' active' : '' }}"
    />

    @can('event')
    <x-nav-link
        text="Event"
        icon="flag"
        url="{{ route('admin.event') }}"
        active="{{ request()->routeIs('admin.event') ? ' active' : '' }}"
    />
    @endcan

    @can('galery-foto')
    <x-nav-link
        text="Galery Foto"
        icon="palette"
        url="{{ route('admin.galery') }}"
        active="{{ request()->routeIs('admin.galery') ? ' active' : '' }}"
    />
    @endcan

    @can('klien-kami')
    <x-nav-link
        text="Klien Kami"
        icon="users"
        url="{{ route('admin.klien') }}"
        active="{{ request()->routeIs('admin.klien') ? ' active' : '' }}"
    />
    @endcan

    <hr class="sidebar-divider mb-0">

    @can('member-list')
    <x-nav-link
        text="Member"
        icon="users"
        url="{{ route('admin.member') }}"
        active="{{ request()->routeIs('admin.member') ? ' active' : '' }}"
    />
    @endcan

    @can('role-list')
    <x-nav-link
        text="Roles"
        icon="th-list"
        url="{{ route('admin.roles') }}"
        active="{{ request()->routeIs('admin.roles') ? ' active' : '' }}"
    />
    @endcan

    <hr class="sidebar-divider mb-0">

    @can('setting-list')
    <x-nav-link
        text="Settings"
        icon="cogs"
        url="{{ route('admin.settings') }}"
        active="{{ request()->routeIs('admin.settings') ? ' active' : '' }}"
    />
    @endcan
</ul>

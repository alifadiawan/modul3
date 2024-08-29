<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item {{ request()->is('/') ? 'active' : '' }}">
            <a class="nav-link" href="/">
                <i class="icon-grid menu-icon"></i>
                <span class="menu-title">Dashboard</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false"
                aria-controls="ui-basic">
                <i class="icon-layout menu-icon"></i>
                <span class="menu-title">Buku</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item {{ (strpos(Route::currentRouteName(), 'buku.create') == 0) ? 'active' : '' }}"> <a class="nav-link" href="{{ route('buku.create') }}">Tambah Buku</a></li>
                    <li class="nav-item {{ strpos(Route::currentRouteName(), 'buku.index') == 0 ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('buku.index') }}">Semua Buku</a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#form-elements" aria-expanded="false"
                aria-controls="form-elements">
                <i class="icon-columns menu-icon"></i>
                <span class="menu-title">Kategori</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="form-elements">
                <ul class="nav flex-column sub-menu">
                    <li
                        class="nav-item {{ strpos(Route::currentRouteName(), 'kategori.index') == 0 ? 'active' : '' }}">
                        <a class="nav-link" href="/kategori">Semua Kategori</a></li>
                </ul>
                <ul class="nav flex-column sub-menu">
                    <li
                        class="nav-item {{ strpos(Route::currentRouteName(), 'kategori.create') == 0 ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('kategori.create') }}">Tambah Kategori</a>
                    </li>
                </ul>
            </div>
        </li>
    </ul>
</nav>

<div class="app-sidebar sidebar-shadow">
    <div class="app-header__logo">
        <div class="logo-src"></div>
        <div class="header__pane ml-auto">
            <div>
                <button type="button" class="hamburger close-sidebar-btn hamburger--elastic"
                    data-class="closed-sidebar">
                    <span class="hamburger-box">
                        <span class="hamburger-inner"></span>
                    </span>
                </button>
            </div>
        </div>
    </div>
    <div class="app-header__mobile-menu">
        <div>
            <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                <span class="hamburger-box">
                    <span class="hamburger-inner"></span>
                </span>
            </button>
        </div>
    </div>
    <div class="app-header__menu">
        <span>
            <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                <span class="btn-icon-wrapper">
                    <i class="fa fa-ellipsis-v fa-w-6"></i>
                </span>
            </button>
        </span>
    </div>
    <div class="scrollbar-sidebar">
        <div class="app-sidebar__inner">
            <ul class="vertical-nav-menu">
                <li class="app-sidebar__heading">Dashboards</li>
                <li >
                    <a href="{{ route('admin.home') }}" class="@yield('dashboard') ">
                        <i class="metismenu-icon feather-home"></i>
                        Dashboard
                    </a>

                </li>

                <li>
                    <a class="@yield('movie-serie')" href="{{ route('admin.movie-serie') }}">
                        <i class="metismenu-icon feather-tv"></i>
                        Movie - Series
                    </a>

                </li>
                <li>
                    <a class="@yield('category')" href="{{ route('admin.category') }}">
                        <i class="metismenu-icon pe-7s-albums"></i>
                        Category
                    </a>

                </li>
                <li>
                    <a class="@yield('genre')" href="{{ route('admin.genre.index') }}">
                        <i class="metismenu-icon pe-7s-film"></i>
                        Genre
                    </a>

                </li>
            </ul>
        </div>
    </div>
</div>

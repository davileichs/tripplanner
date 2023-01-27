<nav class="nav navbar navbar-expand-xl navbar-light iq-navbar">
    <div class="container-fluid navbar-inner">
        <div class="d-flex justify-content-between w-100 align-items-center">
            <button data-trigger="navbar_main" class="d-xl-none btn btn-primary rounded-pill p-1 pt-0 col-auto"
                type="button">
                <svg width="20px" height="20px" viewBox="0 0 24 24">
                    <path fill="currentColor"
                        d="M4,11V13H16L10.5,18.5L11.92,19.92L19.84,12L11.92,4.08L10.5,5.5L16,11H4Z"></path>
                </svg>
            </button>
            <div class="col-auto navbar-brand">
                <a href="{{ route('dashboards') }}" class="d-flex">
                    <x-logo />
                    <h4 class="logo-title d-none d-sm-block" data-setting="app_name">{{ env('APP_NAME') }}</h4>
                </a>
            </div>
            <nav id="navbar_main" class="mobile-offcanvas nav navbar navbar-expand-xl horizontal-nav col-auto ">
                <div class="container-fluid">
                    <div class="offcanvas-header px-0">
                        <div class="navbar-brand ms-0">
                            <x-logo />
                            <h4 class="logo-title" data-setting="app_name">{{ env('APP_NAME') }}</h4>
                        </div>
                        <button class="btn-close float-end"></button>
                    </div>
                    <ul class="iq-nav-menu list-unstyled">
                        <li class="nav-item"><a class="nav-link {{ activeRoute(route('dashboards')) }}"
                                href="{{ route('dashboards') }}"> Dashboard </a></li>
                    </ul>
                </div>
            </nav>
            <div class="col-auto">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon">
                        <span class="navbar-toggler-bar bar1 mt-1"></span>
                        <span class="navbar-toggler-bar bar2"></span>
                        <span class="navbar-toggler-bar bar3"></span>
                    </span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="mb-2 navbar-nav ms-auto align-items-center navbar-list mb-xl-0">

                        <li class="nav-item iq-full-screen d-none  d-xl-block border-end" id="fullscreen-item">
                            <a href="#" class="nav-link pe-3" id="btnFullscreen" data-bs-toggle="dropdown">
                                <span class="btn-inner">
                                    <svg class="normal-screen icon-24" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M18.5528 5.99656L13.8595 10.8961" stroke="currentColor"
                                            stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path d="M14.8016 5.97618L18.5524 5.99629L18.5176 9.96906"
                                            stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                            stroke-linejoin="round"></path>
                                        <path d="M5.8574 18.896L10.5507 13.9964" stroke="currentColor"
                                            stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path d="M9.60852 18.9164L5.85775 18.8963L5.89258 14.9235"
                                            stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                            stroke-linejoin="round"></path>
                                    </svg>
                                    <svg class="full-normal-screen icon-32 d-none" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M13.7542 10.1932L18.1867 5.79319" stroke="white" stroke-width="1.5"
                                            stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path d="M17.2976 10.212L13.7547 10.1934L13.7871 6.62518"
                                            stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                            stroke-linejoin="round"></path>
                                        <path d="M10.4224 13.5726L5.82149 18.1398" stroke="white" stroke-width="1.5"
                                            stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path d="M6.74391 13.5535L10.4209 13.5723L10.3867 17.2755"
                                            stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                            stroke-linejoin="round"></path>
                                    </svg>
                                </span>
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="py-0 nav-link d-flex align-items-center ps-3" href="#"
                                id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="{{ asset('images/avatars/01.png') }}" alt="User-Profile"
                                    class="theme-color-default-img img-fluid avatar avatar-50 avatar-rounded"
                                    loading="lazy">
                                <img src="{{ asset('images/avatars/avtar_1.png') }}" alt="User-Profile"
                                    class="theme-color-purple-img img-fluid avatar avatar-50 avatar-rounded"
                                    loading="lazy">
                                <img src="{{ asset('images/avatars/avtar_2.png') }}" alt="User-Profile"
                                    class="theme-color-blue-img img-fluid avatar avatar-50 avatar-rounded"
                                    loading="lazy">
                                <img src="{{ asset('images/avatars/avtar_3.png') }}" alt="User-Profile"
                                    class="theme-color-green-img img-fluid avatar avatar-50 avatar-rounded"
                                    loading="lazy">
                                <img src="{{ asset('images/avatars/avtar_4.png') }}" alt="User-Profile"
                                    class="theme-color-yellow-img img-fluid avatar avatar-50 avatar-rounded"
                                    loading="lazy">
                                <img src="{{ asset('images/avatars/avtar_5.png') }}" alt="User-Profile"
                                    class="theme-color-pink-img img-fluid avatar avatar-50 avatar-rounded"
                                    loading="lazy">
                                <div class="caption ms-3 d-none d-md-block ">
                                    <h6 class="mb-0 caption-title">{{ Auth::user()->full_name }}</h6>
                                    <p class="mb-0 caption-sub-title">{{ Auth::user()->user_type }}</p>
                                </div>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <li>
                                    <a class="dropdown-item"
                                        href="{{ route('users.show', auth()->id() || 1) }}">Profile</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="{{ route('auth.user-privacy-setting') }}">Privacy
                                        Setting</a>
                                </li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li>
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf
                                        <a href="javascript:void(0)" class="dropdown-item"
                                            onclick="event.preventDefault();
                            this.closest('form').submit();">
                                            {{ __('Log out') }}
                                        </a>
                                    </form>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</nav>

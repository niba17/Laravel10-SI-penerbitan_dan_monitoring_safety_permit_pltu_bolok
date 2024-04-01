<!-- Navbar -->
<header class="navbar navbar-expand-md navbar-light d-none d-lg-flex d-print-none">
    <div class="container-xl">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-menu"
            aria-controls="navbar-menu" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="navbar-nav flex-row order-md-last">
            <div class="nav-item dropdown">
                <a href="#" class="nav-link d-flex lh-1 text-reset p-0" data-bs-toggle="dropdown"
                    aria-label="Open user menu">
                    {{-- <span class="avatar avatar-sm"
                        style="background-image: url({{ asset('template') }}/src/static/avatars/000m.jpg)"></span> --}}
                    <i class="fa-solid fa-user fa-2x text-primary"></i>
                    <div class="d-none d-xl-block ps-2">
                        <div>{{ auth()->user()->name }}</div>
                        <hr class="my-1">
                        <div>
                            @if (Auth::user()->getRoleNames())
                                {{ implode(', ', Auth::user()->getRoleNames()->toArray()) }}
                            @endif
                        </div>
                    </div>
                </a>
                <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    {{-- <a href="#" class="dropdown-item">Profile</a>
                    <div class="dropdown-divider"></div> --}}
                    {{-- <a href="/users-edit/{{ auth()->user()->id }}" class="dropdown-item">Edit</a> --}}
                    <a href="#" onclick="logout()" class="dropdown-item">Logout <i
                            class="fa-solid fa-person-walking-dashed-line-arrow-right ms-2 text-primary"></i></a>
                </div>
            </div>
        </div>
        <div class="collapse navbar-collapse" id="navbar-menu">
            <div>
                <form action="./" method="get" autocomplete="off" novalidate>
                    <div class="input-icon">
                        {{-- <span class="input-icon-addon">
                            <!-- Download SVG icon from http://tabler-icons.io/i/search -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <circle cx="10" cy="10" r="7" />
                                <line x1="21" y1="21" x2="15" y2="15" />
                            </svg>
                        </span> --}}
                        {{-- <input type="text" value="" class="form-control" placeholder="Search…"
                            aria-label="Search in website"> --}}
                    </div>
                </form>
            </div>
        </div>
    </div>
</header>

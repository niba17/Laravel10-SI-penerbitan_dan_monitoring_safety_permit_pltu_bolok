<body class="theme-light">
    {{-- <script src="./dist/js/demo-theme.min.js?1668287865"></script> --}}
    <div class="page">
        <!-- Sidebar -->
        <aside class="navbar navbar-vertical navbar-expand-lg navbar-dark">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#sidebar-menu"
                    aria-controls="sidebar-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <h1 class="navbar-brand navbar-brand-autodark">
                    <a href="/" style="text-decoration: none;" class="my-2">
                        <span>SASANDO</span>
                        {{-- <img src="http://127.0.0.1:8000/template/src/static/logo-white.svg" width="110"
                            height="32" alt="Tabler" class="navbar-brand-image"> --}}
                    </a>
                </h1>
                <div class="navbar-nav flex-row d-lg-none">
                    <div class="nav-item d-none d-lg-flex me-3">
                        <div class="btn-list">
                            <a href="https://github.com/tabler/tabler" class="btn" target="_blank" rel="noreferrer">
                                <!-- Download SVG icon from http://tabler-icons.io/i/brand-github -->
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                    viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path
                                        d="M9 19c-4.3 1.4 -4.3 -2.5 -6 -3m12 5v-3.5c0 -1 .1 -1.4 -.5 -2c2.8 -.3 5.5 -1.4 5.5 -6a4.6 4.6 0 0 0 -1.3 -3.2a4.2 4.2 0 0 0 -.1 -3.2s-1.1 -.3 -3.5 1.3a12.3 12.3 0 0 0 -6.2 0c-2.4 -1.6 -3.5 -1.3 -3.5 -1.3a4.2 4.2 0 0 0 -.1 3.2a4.6 4.6 0 0 0 -1.3 3.2c0 4.6 2.7 5.7 5.5 6c-.6 .6 -.6 1.2 -.5 2v3.5" />
                                </svg>
                                Source code
                            </a>
                            <a href="https://github.com/sponsors/codecalm" class="btn" target="_blank"
                                rel="noreferrer">
                                <!-- Download SVG icon from http://tabler-icons.io/i/heart -->
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon text-pink" width="24"
                                    height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                    fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path
                                        d="M19.5 12.572l-7.5 7.428l-7.5 -7.428m0 0a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572" />
                                </svg>
                                Sponsor
                            </a>
                        </div>
                    </div>
                    <div class="d-none d-lg-flex">
                        <a href="?theme=dark" class="nav-link px-0 hide-theme-dark" title="Enable dark mode"
                            data-bs-toggle="tooltip" data-bs-placement="bottom">
                            <!-- Download SVG icon from http://tabler-icons.io/i/moon -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path
                                    d="M12 3c.132 0 .263 0 .393 0a7.5 7.5 0 0 0 7.92 12.446a9 9 0 1 1 -8.313 -12.454z" />
                            </svg>
                        </a>
                        <a href="?theme=light" class="nav-link px-0 hide-theme-light" title="Enable light mode"
                            data-bs-toggle="tooltip" data-bs-placement="bottom">
                            <!-- Download SVG icon from http://tabler-icons.io/i/sun -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <circle cx="12" cy="12" r="4" />
                                <path
                                    d="M3 12h1m8 -9v1m8 8h1m-9 8v1m-6.4 -15.4l.7 .7m12.1 -.7l-.7 .7m0 11.4l.7 .7m-12.1 -.7l-.7 .7" />
                            </svg>
                        </a>
                        <div class="nav-item dropdown d-none d-md-flex me-3">
                            <a href="#" class="nav-link px-0" data-bs-toggle="dropdown" tabindex="-1"
                                aria-label="Show notifications">
                                <!-- Download SVG icon from http://tabler-icons.io/i/bell -->
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                    viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path
                                        d="M10 5a2 2 0 0 1 4 0a7 7 0 0 1 4 6v3a4 4 0 0 0 2 3h-16a4 4 0 0 0 2 -3v-3a7 7 0 0 1 4 -6" />
                                    <path d="M9 17v1a3 3 0 0 0 6 0v-1" />
                                </svg>
                                <span class="badge bg-red"></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-end dropdown-menu-card">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Last updates</h3>
                                    </div>
                                    <div class="list-group list-group-flush list-group-hoverable">
                                        <div class="list-group-item">
                                            <div class="row align-items-center">
                                                <div class="col-auto"><span
                                                        class="status-dot status-dot-animated bg-red d-block"></span>
                                                </div>
                                                <div class="col text-truncate">
                                                    <a href="#" class="text-body d-block">Example 1</a>
                                                    <div class="d-block text-muted text-truncate mt-n1">
                                                        Change deprecated html tags to text decoration classes (#29604)
                                                    </div>
                                                </div>
                                                <div class="col-auto">
                                                    <a href="#" class="list-group-item-actions">
                                                        <!-- Download SVG icon from http://tabler-icons.io/i/star -->
                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                            class="icon text-muted" width="24" height="24"
                                                            viewBox="0 0 24 24" stroke-width="2"
                                                            stroke="currentColor" fill="none"
                                                            stroke-linecap="round" stroke-linejoin="round">
                                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                            <path
                                                                d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z" />
                                                        </svg>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="list-group-item">
                                            <div class="row align-items-center">
                                                <div class="col-auto"><span class="status-dot d-block"></span></div>
                                                <div class="col text-truncate">
                                                    <a href="#" class="text-body d-block">Example 2</a>
                                                    <div class="d-block text-muted text-truncate mt-n1">
                                                        justify-content:between ⇒ justify-content:space-between (#29734)
                                                    </div>
                                                </div>
                                                <div class="col-auto">
                                                    <a href="#" class="list-group-item-actions show">
                                                        <!-- Download SVG icon from http://tabler-icons.io/i/star -->
                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                            class="icon text-yellow" width="24" height="24"
                                                            viewBox="0 0 24 24" stroke-width="2"
                                                            stroke="currentColor" fill="none"
                                                            stroke-linecap="round" stroke-linejoin="round">
                                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                            <path
                                                                d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z" />
                                                        </svg>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="list-group-item">
                                            <div class="row align-items-center">
                                                <div class="col-auto"><span class="status-dot d-block"></span></div>
                                                <div class="col text-truncate">
                                                    <a href="#" class="text-body d-block">Example 3</a>
                                                    <div class="d-block text-muted text-truncate mt-n1">
                                                        Update change-version.js (#29736)
                                                    </div>
                                                </div>
                                                <div class="col-auto">
                                                    <a href="#" class="list-group-item-actions">
                                                        <!-- Download SVG icon from http://tabler-icons.io/i/star -->
                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                            class="icon text-muted" width="24" height="24"
                                                            viewBox="0 0 24 24" stroke-width="2"
                                                            stroke="currentColor" fill="none"
                                                            stroke-linecap="round" stroke-linejoin="round">
                                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                            <path
                                                                d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z" />
                                                        </svg>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="list-group-item">
                                            <div class="row align-items-center">
                                                <div class="col-auto"><span
                                                        class="status-dot status-dot-animated bg-green d-block"></span>
                                                </div>
                                                <div class="col text-truncate">
                                                    <a href="#" class="text-body d-block">Example 4</a>
                                                    <div class="d-block text-muted text-truncate mt-n1">
                                                        Regenerate package-lock.json (#29730)
                                                    </div>
                                                </div>
                                                <div class="col-auto">
                                                    <a href="#" class="list-group-item-actions">
                                                        <!-- Download SVG icon from http://tabler-icons.io/i/star -->
                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                            class="icon text-muted" width="24" height="24"
                                                            viewBox="0 0 24 24" stroke-width="2"
                                                            stroke="currentColor" fill="none"
                                                            stroke-linecap="round" stroke-linejoin="round">
                                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                            <path
                                                                d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z" />
                                                        </svg>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link d-flex lh-1 text-reset p-0" data-bs-toggle="dropdown"
                            aria-label="Open user menu">
                            <i class="fa-solid fa-user fa-2x" style="color:white;"></i>
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
                            <a href="#" onclick="logout()" class="dropdown-item">Logout</a>
                        </div>
                    </div>
                </div>
                <div class="collapse navbar-collapse" id="sidebar-menu">
                    <ul class="navbar-nav pt-lg-3">
                        <li class="nav-item {{ request()->route()->getName() == 'home-index' ? 'active' : '' }}">
                            <a class="nav-link" href="/">
                                <span
                                    class="nav-link-icon d-md-none d-lg-inline-block {{ request()->route()->getName() == 'home-index' ? 'text-light' : '' }}">
                                    <i class="fa-solid fa-house"></i>
                                </span>
                                <span class="nav-link-title">
                                    Home
                                </span>
                            </a>
                        </li>
                        @role('super_user|spv_k3|staff_k3|spv_rendal_ophar|spv_mekanik|spv_listrik|spv_instrumen|spv_produksi')
                            <li
                                class="nav-item {{ ((request()->route()->getName() == 'users-index' ? 'active' : '' || request()->route()->getName() == 'users-create') ? 'active' : '' || request()->route()->getName() == 'users-edit') ? 'active' : '' }}">
                                <a class="nav-link" href="/users">
                                    <span
                                        class="nav-link-icon d-md-none d-lg-inline-block {{ ((request()->route()->getName() == 'users-index' ? 'text-light' : '' || request()->route()->getName() == 'users-create') ? 'text-light' : '' || request()->route()->getName() == 'users-edit') ? 'text-light' : '' }}">
                                        <i class="fa-solid fa-users"></i>
                                    </span>
                                    <span class="nav-link-title">
                                        User
                                    </span>
                                </a>
                            </li>
                        @endrole
                        @role('super_user|spv_k3|staff_k3|spv_rendal_ophar|spv_mekanik|spv_listrik|spv_instrumen|spv_produksi')
                            <li
                                class="nav-item {{ ((request()->route()->getName() == 'person_groups-index' ? 'active' : '' || request()->route()->getName() == 'person_groups-create') ? 'active' : '' || request()->route()->getName() == 'person_groups-edit') ? 'active' : '' }}">
                                <a class="nav-link" href="/person_groups">
                                    <span
                                        class="nav-link-icon d-md-none d-lg-inline-block {{ ((request()->route()->getName() == 'person_groups-index' ? 'text-light' : '' || request()->route()->getName() == 'person_groups-create') ? 'text-light' : '' || request()->route()->getName() == 'person_groups-edit') ? 'text-light' : '' }}">
                                        <i class="fa-solid fa-handshake"></i>
                                    </span>
                                    <span class="nav-link-title">
                                        Person Group
                                    </span>
                                </a>
                            </li>
                            <li
                                class="nav-item {{ ((request()->route()->getName() == 'safety_permits-index' ? 'active' : '' || request()->route()->getName() == 'safety_permits-create') ? 'active' : '' || request()->route()->getName() == 'safety_permits-edit') ? 'active' : '' }}">
                                <a class="nav-link" href="/safety_permits">
                                    <span
                                        class="nav-link-icon d-md-none d-lg-inline-block {{ ((request()->route()->getName() == 'safety_permits-index' ? 'text-light' : '' || request()->route()->getName() == 'safety_permits-create') ? 'text-light' : '' || request()->route()->getName() == 'safety_permits-edit') ? 'text-light' : '' }}">
                                        <i class="fa-solid fa-file-shield"></i>
                                    </span>
                                    <span class="nav-link-title">
                                        Safety Permit
                                    </span>
                                </a>
                            </li>
                            <li
                                class="nav-item {{ (((((request()->route()->getName() == 'workers-index' ? 'active' : '' || request()->route()->getName() == 'workers-create') ? 'active' : '' || request()->route()->getName() == 'workers-edit') ? 'active' : '' || request()->route()->getName() == 'skills_or_positions-index') ? 'active' : '' || request()->route()->getName() == 'skills_or_positions-create') ? 'active' : '' || request()->route()->getName() == 'skills_or_positions-edit') ? 'active' : '' }}">
                                <a class="nav-link" href="/workers">
                                    <span
                                        class="nav-link-icon d-md-none d-lg-inline-block {{ (((((request()->route()->getName() == 'workers-index' ? 'text-light' : '' || request()->route()->getName() == 'workers-create') ? 'text-light' : '' || request()->route()->getName() == 'workers-edit') ? 'text-light' : '' || request()->route()->getName() == 'skills_or_positions-index') ? 'text-light' : '' || request()->route()->getName() == 'skills_or_positions-create') ? 'text-light' : '' || request()->route()->getName() == 'skills_or_positions-edit') ? 'text-light' : '' }}">
                                        <i class="fa-solid fa-person-digging"></i>
                                    </span>
                                    <span class="nav-link-title">
                                        Pekerja
                                    </span>
                                </a>
                            </li>
                            <li
                                class="nav-item {{ (((((((((((((((((((((((request()->route()->getName() == 'jsas-index'
                                                                                                                                ? 'active'
                                                                                                                                : '' ||
                                                                                                                                    request()->route()->getName() ==
                                                                                                                                        'jsas-create')
                                                                                                                            ? 'active'
                                                                                                                            : '' ||
                                                                                                                                request()->route()->getName() ==
                                                                                                                                    'jsas-edit')
                                                                                                                        ? 'active'
                                                                                                                        : '' ||
                                                                                                                            request()->route()->getName() ==
                                                                                                                                'work_tools-index')
                                                                                                                    ? 'active'
                                                                                                                    : '' ||
                                                                                                                        request()->route()->getName() ==
                                                                                                                            'work_tools-create')
                                                                                                                ? 'active'
                                                                                                                : '' ||
                                                                                                                    request()->route()->getName() ==
                                                                                                                        'work_tools-edit')
                                                                                                            ? 'active'
                                                                                                            : '' ||
                                                                                                                request()->route()->getName() ==
                                                                                                                    'work_stages-index')
                                                                                                        ? 'active'
                                                                                                        : '' ||
                                                                                                            request()->route()->getName() ==
                                                                                                                'work_stages-create')
                                                                                                    ? 'active'
                                                                                                    : '' ||
                                                                                                        request()->route()->getName() ==
                                                                                                            'work_stages-edit')
                                                                                                ? 'active'
                                                                                                : '' ||
                                                                                                    request()->route()->getName() ==
                                                                                                        'potential_hazards-index')
                                                                                            ? 'active'
                                                                                            : '' ||
                                                                                                request()->route()->getName() ==
                                                                                                    'potential_hazards-create')
                                                                                        ? 'active'
                                                                                        : '' ||
                                                                                            request()->route()->getName() == 'potential_hazards-edit')
                                                                                    ? 'active'
                                                                                    : '' || request()->route()->getName() == 'impacts-index')
                                                                                ? 'active'
                                                                                : '' || request()->route()->getName() == 'impacts-create')
                                                                            ? 'active'
                                                                            : '' || request()->route()->getName() == 'impacts-edit')
                                                                        ? 'active'
                                                                        : '' || request()->route()->getName() == 'pics-index')
                                                                    ? 'active'
                                                                    : '' || request()->route()->getName() == 'pics-create')
                                                                ? 'active'
                                                                : '' || request()->route()->getName() == 'pics-edit')
                                                            ? 'active'
                                                            : '' || request()->route()->getName() == 'danger_controls-index')
                                                        ? 'active'
                                                        : '' || request()->route()->getName() == 'danger_controls-create')
                                                    ? 'active'
                                                    : '' || request()->route()->getName() == 'danger_controls-edit')
                                                ? 'active'
                                                : '' || request()->route()->getName() == 'k3l_appeal_of_regulations-index')
                                            ? 'active'
                                            : '' || request()->route()->getName() == 'k3l_appeal_of_regulations-create')
                                        ? 'active'
                                        : '' || request()->route()->getName() == 'k3l_appeal_of_regulations-edit')
                                    ? 'active'
                                    : '' }} dropdown">
                                <a class="nav-link dropdown-toggle {{ (((((((((((((((((((((((request()->route()->getName() == 'jsas-index'
                                                                                                                                ? 'show'
                                                                                                                                : '' ||
                                                                                                                                    request()->route()->getName() ==
                                                                                                                                        'jsas-create')
                                                                                                                            ? 'show'
                                                                                                                            : '' ||
                                                                                                                                request()->route()->getName() ==
                                                                                                                                    'jsas-edit')
                                                                                                                        ? 'show'
                                                                                                                        : '' ||
                                                                                                                            request()->route()->getName() ==
                                                                                                                                'work_tools-index')
                                                                                                                    ? 'show'
                                                                                                                    : '' ||
                                                                                                                        request()->route()->getName() ==
                                                                                                                            'work_tools-create')
                                                                                                                ? 'show'
                                                                                                                : '' ||
                                                                                                                    request()->route()->getName() ==
                                                                                                                        'work_tools-edit')
                                                                                                            ? 'show'
                                                                                                            : '' ||
                                                                                                                request()->route()->getName() ==
                                                                                                                    'work_stages-index')
                                                                                                        ? 'show'
                                                                                                        : '' ||
                                                                                                            request()->route()->getName() ==
                                                                                                                'work_stages-create')
                                                                                                    ? 'show'
                                                                                                    : '' ||
                                                                                                        request()->route()->getName() ==
                                                                                                            'work_stages-edit')
                                                                                                ? 'show'
                                                                                                : '' ||
                                                                                                    request()->route()->getName() ==
                                                                                                        'potential_hazards-index')
                                                                                            ? 'show'
                                                                                            : '' ||
                                                                                                request()->route()->getName() ==
                                                                                                    'potential_hazards-create')
                                                                                        ? 'show'
                                                                                        : '' ||
                                                                                            request()->route()->getName() == 'potential_hazards-edit')
                                                                                    ? 'show'
                                                                                    : '' || request()->route()->getName() == 'impacts-index')
                                                                                ? 'show'
                                                                                : '' || request()->route()->getName() == 'impacts-create')
                                                                            ? 'show'
                                                                            : '' || request()->route()->getName() == 'impacts-edit')
                                                                        ? 'show'
                                                                        : '' || request()->route()->getName() == 'pics-index')
                                                                    ? 'show'
                                                                    : '' || request()->route()->getName() == 'pics-create')
                                                                ? 'show'
                                                                : '' || request()->route()->getName() == 'pics-edit')
                                                            ? 'show'
                                                            : '' || request()->route()->getName() == 'danger_controls-index')
                                                        ? 'show'
                                                        : '' || request()->route()->getName() == 'danger_controls-create')
                                                    ? 'show'
                                                    : '' || request()->route()->getName() == 'danger_controls-edit')
                                                ? 'show'
                                                : '' || request()->route()->getName() == 'appeal_of_regulations-index')
                                            ? 'show'
                                            : '' || request()->route()->getName() == 'appeal_of_regulations-create')
                                        ? 'show'
                                        : '' || request()->route()->getName() == 'appeal_of_regulations-edit')
                                    ? 'show'
                                    : '' }}"
                                    href="#navbar-base" data-bs-toggle="dropdown" data-bs-auto-close="false"
                                    role="button"
                                    aria-expanded="{{ (((((((((((((((((((((((request()->route()->getName() == 'jsas-index'
                                                                                                                                    ? 'true'
                                                                                                                                    : 'false' ||
                                                                                                                                        request()->route()->getName() ==
                                                                                                                                            'jsas-create')
                                                                                                                                ? 'true'
                                                                                                                                : 'false' ||
                                                                                                                                    request()->route()->getName() ==
                                                                                                                                        'jsas-edit')
                                                                                                                            ? 'true'
                                                                                                                            : 'false' ||
                                                                                                                                request()->route()->getName() ==
                                                                                                                                    'work_tools-index')
                                                                                                                        ? 'true'
                                                                                                                        : 'false' ||
                                                                                                                            request()->route()->getName() ==
                                                                                                                                'work_tools-create')
                                                                                                                    ? 'true'
                                                                                                                    : 'false' ||
                                                                                                                        request()->route()->getName() ==
                                                                                                                            'work_tools-edit')
                                                                                                                ? 'true'
                                                                                                                : 'false' ||
                                                                                                                    request()->route()->getName() ==
                                                                                                                        'work_stages-index')
                                                                                                            ? 'true'
                                                                                                            : 'false' ||
                                                                                                                request()->route()->getName() ==
                                                                                                                    'work_stages-create')
                                                                                                        ? 'true'
                                                                                                        : 'false' ||
                                                                                                            request()->route()->getName() ==
                                                                                                                'work_stages-edit')
                                                                                                    ? 'true'
                                                                                                    : 'false' ||
                                                                                                        request()->route()->getName() ==
                                                                                                            'potential_hazards-index')
                                                                                                ? 'true'
                                                                                                : 'false' ||
                                                                                                    request()->route()->getName() ==
                                                                                                        'potential_hazards-create')
                                                                                            ? 'true'
                                                                                            : 'false' ||
                                                                                                request()->route()->getName() == 'potential_hazards-edit')
                                                                                        ? 'true'
                                                                                        : 'false' || request()->route()->getName() == 'impacts-index')
                                                                                    ? 'true'
                                                                                    : 'false' || request()->route()->getName() == 'impacts-create')
                                                                                ? 'true'
                                                                                : 'false' || request()->route()->getName() == 'impacts-edit')
                                                                            ? 'true'
                                                                            : 'false' || request()->route()->getName() == 'pics-index')
                                                                        ? 'true'
                                                                        : 'false' || request()->route()->getName() == 'pics-create')
                                                                    ? 'true'
                                                                    : 'false' || request()->route()->getName() == 'pics-edit')
                                                                ? 'true'
                                                                : 'false' || request()->route()->getName() == 'danger_controls-index')
                                                            ? 'true'
                                                            : 'false' || request()->route()->getName() == 'danger_controls-create')
                                                        ? 'true'
                                                        : 'false' || request()->route()->getName() == 'danger_controls-edit')
                                                    ? 'true'
                                                    : 'false' || request()->route()->getName() == 'k3l_appeal_of_regulations-index')
                                                ? 'true'
                                                : 'false' || request()->route()->getName() == 'k3l_appeal_of_regulations-create')
                                            ? 'true'
                                            : 'false' || request()->route()->getName() == 'k3l_appeal_of_regulations-edit')
                                        ? 'true'
                                        : 'false' }}">
                                    <span class="nav-link-icon d-md-none d-lg-inline-block">
                                        <i
                                            class="fa-solid fa-table-list {{ (((((((((((((((((((((((request()->route()->getName() == 'jsas-index'
                                                                                                                                            ? 'text-light'
                                                                                                                                            : '' ||
                                                                                                                                                request()->route()->getName() ==
                                                                                                                                                    'jsas-create')
                                                                                                                                        ? 'text-light'
                                                                                                                                        : '' ||
                                                                                                                                            request()->route()->getName() ==
                                                                                                                                                'jsas-edit')
                                                                                                                                    ? 'text-light'
                                                                                                                                    : '' ||
                                                                                                                                        request()->route()->getName() ==
                                                                                                                                            'work_tools-index')
                                                                                                                                ? 'text-light'
                                                                                                                                : '' ||
                                                                                                                                    request()->route()->getName() ==
                                                                                                                                        'work_tools-create')
                                                                                                                            ? 'text-light'
                                                                                                                            : '' ||
                                                                                                                                request()->route()->getName() ==
                                                                                                                                    'work_tools-edit')
                                                                                                                        ? 'text-light'
                                                                                                                        : '' ||
                                                                                                                            request()->route()->getName() ==
                                                                                                                                'work_stages-index')
                                                                                                                    ? 'text-light'
                                                                                                                    : '' ||
                                                                                                                        request()->route()->getName() ==
                                                                                                                            'work_stages-create')
                                                                                                                ? 'text-light'
                                                                                                                : '' ||
                                                                                                                    request()->route()->getName() ==
                                                                                                                        'work_stages-edit')
                                                                                                            ? 'text-light'
                                                                                                            : '' ||
                                                                                                                request()->route()->getName() ==
                                                                                                                    'potential_hazards-index')
                                                                                                        ? 'text-light'
                                                                                                        : '' ||
                                                                                                            request()->route()->getName() ==
                                                                                                                'potential_hazards-create')
                                                                                                    ? 'text-light'
                                                                                                    : '' ||
                                                                                                        request()->route()->getName() == 'potential_hazards-edit')
                                                                                                ? 'text-light'
                                                                                                : '' || request()->route()->getName() == 'impacts-index')
                                                                                            ? 'text-light'
                                                                                            : '' || request()->route()->getName() == 'impacts-create')
                                                                                        ? 'text-light'
                                                                                        : '' || request()->route()->getName() == 'impacts-edit')
                                                                                    ? 'text-light'
                                                                                    : '' || request()->route()->getName() == 'pics-index')
                                                                                ? 'text-light'
                                                                                : '' || request()->route()->getName() == 'pics-create')
                                                                            ? 'text-light'
                                                                            : '' || request()->route()->getName() == 'pics-edit')
                                                                        ? 'text-light'
                                                                        : '' || request()->route()->getName() == 'danger_controls-index')
                                                                    ? 'text-light'
                                                                    : '' || request()->route()->getName() == 'danger_controls-create')
                                                                ? 'text-light'
                                                                : '' || request()->route()->getName() == 'danger_controls-edit')
                                                            ? 'text-light'
                                                            : '' || request()->route()->getName() == 'k3l_appeal_of_regulations-index')
                                                        ? 'text-light'
                                                        : '' || request()->route()->getName() == 'k3l_appeal_of_regulations-create')
                                                    ? 'text-light'
                                                    : '' || request()->route()->getName() == 'k3l_appeal_of_regulations-edit')
                                                ? 'text-light'
                                                : '' }}"></i>
                                    </span>
                                    <span class="nav-link-title">
                                        Form JSA
                                    </span>
                                </a>
                                <div
                                    class="dropdown-menu {{ (((((((((((((((((((((((request()->route()->getName() == 'jsas-index'
                                                                                                                                    ? 'show'
                                                                                                                                    : '' ||
                                                                                                                                        request()->route()->getName() ==
                                                                                                                                            'jsas-create')
                                                                                                                                ? 'show'
                                                                                                                                : '' ||
                                                                                                                                    request()->route()->getName() ==
                                                                                                                                        'jsas-edit')
                                                                                                                            ? 'show'
                                                                                                                            : '' ||
                                                                                                                                request()->route()->getName() ==
                                                                                                                                    'work_tools-index')
                                                                                                                        ? 'show'
                                                                                                                        : '' ||
                                                                                                                            request()->route()->getName() ==
                                                                                                                                'work_tools-create')
                                                                                                                    ? 'show'
                                                                                                                    : '' ||
                                                                                                                        request()->route()->getName() ==
                                                                                                                            'work_tools-edit')
                                                                                                                ? 'show'
                                                                                                                : '' ||
                                                                                                                    request()->route()->getName() ==
                                                                                                                        'work_stages-index')
                                                                                                            ? 'show'
                                                                                                            : '' ||
                                                                                                                request()->route()->getName() ==
                                                                                                                    'work_stages-create')
                                                                                                        ? 'show'
                                                                                                        : '' ||
                                                                                                            request()->route()->getName() ==
                                                                                                                'work_stages-edit')
                                                                                                    ? 'show'
                                                                                                    : '' ||
                                                                                                        request()->route()->getName() ==
                                                                                                            'potential_hazards-index')
                                                                                                ? 'show'
                                                                                                : '' ||
                                                                                                    request()->route()->getName() ==
                                                                                                        'potential_hazards-create')
                                                                                            ? 'show'
                                                                                            : '' ||
                                                                                                request()->route()->getName() == 'potential_hazards-edit')
                                                                                        ? 'show'
                                                                                        : '' || request()->route()->getName() == 'impacts-index')
                                                                                    ? 'show'
                                                                                    : '' || request()->route()->getName() == 'impacts-create')
                                                                                ? 'show'
                                                                                : '' || request()->route()->getName() == 'impacts-edit')
                                                                            ? 'show'
                                                                            : '' || request()->route()->getName() == 'pics-index')
                                                                        ? 'show'
                                                                        : '' || request()->route()->getName() == 'pics-create')
                                                                    ? 'show'
                                                                    : '' || request()->route()->getName() == 'pics-edit')
                                                                ? 'show'
                                                                : '' || request()->route()->getName() == 'danger_controls-index')
                                                            ? 'show'
                                                            : '' || request()->route()->getName() == 'danger_controls-create')
                                                        ? 'show'
                                                        : '' || request()->route()->getName() == 'danger_controls-edit')
                                                    ? 'show'
                                                    : '' || request()->route()->getName() == 'k3l_appeal_of_regulations-index')
                                                ? 'show'
                                                : '' || request()->route()->getName() == 'k3l_appeal_of_regulations-create')
                                            ? 'show'
                                            : '' || request()->route()->getName() == 'k3l_appeal_of_regulations-edit')
                                        ? 'show'
                                        : '' }}">
                                    <div class="dropdown-menu-columns">
                                        <div class="dropdown-menu-column">
                                            <a class="dropdown-item {{ ((request()->route()->getName() == 'jsas-index' ? 'active text-light' : '' || request()->route()->getName() == 'jsas-create') ? 'active text-light' : '' || request()->route()->getName() == 'jsas-edit') ? 'active text-light' : '' }}"
                                                href="/jsas">
                                                <span class="nav-link-icon d-md-none d-lg-inline-block">
                                                    <i
                                                        class="fa-solid fa-paste {{ ((request()->route()->getName() == 'jsas-index' ? 'text-light' : '' || request()->route()->getName() == 'jsas-create') ? 'text-light' : '' || request()->route()->getName() == 'jsas-edit') ? 'text-light' : '' }}"></i>
                                                </span>
                                                JSA
                                            </a>
                                            @role('super_user|spv_k3|staff_k3|spv_mekanik|spv_listrik|spv_instrumen|spv_rendal_ophar')
                                                <a class="dropdown-item {{ ((request()->route()->getName() == 'work_tools-index' ? 'active text-light' : '' || request()->route()->getName() == 'work_tools-create') ? 'active text-light' : '' || request()->route()->getName() == 'work_tools-edit') ? 'active text-light' : '' }}"
                                                    href="/work_tools">
                                                    <span class="nav-link-icon d-md-none d-lg-inline-block">
                                                        <i
                                                            class="fa-solid fa-screwdriver-wrench {{ ((request()->route()->getName() == 'work_tools-index' ? 'text-light' : '' || request()->route()->getName() == 'work_tools-create') ? 'text-light' : '' || request()->route()->getName() == 'work_tools-edit') ? 'text-light' : '' }}"></i>
                                                    </span>
                                                    Tool Kerja
                                                </a>
                                                <a class="dropdown-item {{ ((((((((((((((request()->route()->getName() == 'work_stages-index'
                                                                                                            ? 'active text-light'
                                                                                                            : '' ||
                                                                                                                request()->route()->getName() == 'work_stages-create')
                                                                                                        ? 'active text-light'
                                                                                                        : '' || request()->route()->getName() == 'work_stages-edit')
                                                                                                    ? 'active text-light'
                                                                                                    : '' || request()->route()->getName() == 'potential_hazards-index')
                                                                                                ? 'active text-light'
                                                                                                : '' || request()->route()->getName() == 'potential_hazards-create')
                                                                                            ? 'active text-light'
                                                                                            : '' || request()->route()->getName() == 'potential_hazards-edit')
                                                                                        ? 'active text-light'
                                                                                        : '' || request()->route()->getName() == 'impacts-index')
                                                                                    ? 'active text-light'
                                                                                    : '' || request()->route()->getName() == 'impacts-create')
                                                                                ? 'active text-light'
                                                                                : '' || request()->route()->getName() == 'impacts-edit')
                                                                            ? 'active text-light'
                                                                            : '' || request()->route()->getName() == 'pics-index')
                                                                        ? 'active text-light'
                                                                        : '' || request()->route()->getName() == 'pics-create')
                                                                    ? 'active text-light'
                                                                    : '' || request()->route()->getName() == 'pics-edit')
                                                                ? 'active text-light'
                                                                : '' || request()->route()->getName() == 'danger_controls-index')
                                                            ? 'active text-light'
                                                            : '' || request()->route()->getName() == 'danger_controls-create')
                                                        ? 'active text-light'
                                                        : '' || request()->route()->getName() == 'danger_controls-edit')
                                                    ? 'active text-light'
                                                    : '' }}"
                                                    href="/work_stages">
                                                    <span class="nav-link-icon d-md-none d-lg-inline-block">
                                                        <i
                                                            class="fa-solid fa-stairs {{ ((((((((((((((request()->route()->getName() == 'work_stages-index'
                                                                                                                        ? 'text-light'
                                                                                                                        : '' ||
                                                                                                                            request()->route()->getName() == 'work_stages-create')
                                                                                                                    ? 'text-light'
                                                                                                                    : '' || request()->route()->getName() == 'work_stages-edit')
                                                                                                                ? 'text-light'
                                                                                                                : '' || request()->route()->getName() == 'potential_hazards-index')
                                                                                                            ? 'text-light'
                                                                                                            : '' || request()->route()->getName() == 'potential_hazards-create')
                                                                                                        ? 'text-light'
                                                                                                        : '' || request()->route()->getName() == 'potential_hazards-edit')
                                                                                                    ? 'text-light'
                                                                                                    : '' || request()->route()->getName() == 'impacts-index')
                                                                                                ? 'text-light'
                                                                                                : '' || request()->route()->getName() == 'impacts-create')
                                                                                            ? 'text-light'
                                                                                            : '' || request()->route()->getName() == 'impacts-edit')
                                                                                        ? 'text-light'
                                                                                        : '' || request()->route()->getName() == 'pics-index')
                                                                                    ? 'text-light'
                                                                                    : '' || request()->route()->getName() == 'pics-create')
                                                                                ? 'text-light'
                                                                                : '' || request()->route()->getName() == 'pics-edit')
                                                                            ? 'text-light'
                                                                            : '' || request()->route()->getName() == 'danger_controls-index')
                                                                        ? 'text-light'
                                                                        : '' || request()->route()->getName() == 'danger_controls-create')
                                                                    ? 'text-light'
                                                                    : '' || request()->route()->getName() == 'danger_controls-edit')
                                                                ? 'text-light'
                                                                : '' }}"></i>
                                                    </span>
                                                    Tahapan Kerja
                                                </a>
                                                <a class="dropdown-item {{ ((request()->route()->getName() == 'k3l_appeal_of_regulations-index' ? 'active text-light' : '' || request()->route()->getName() == 'k3l_appeal_of_regulations-create') ? 'active text-light' : '' || request()->route()->getName() == 'k3l_appeal_of_regulations-edit') ? 'active text-light' : '' }}"
                                                    href="/k3l_appeal_of_regulations">
                                                    <span class="nav-link-icon d-md-none d-lg-inline-block">
                                                        <i
                                                            class="fa-solid fa-scale-balanced {{ ((request()->route()->getName() == 'k3l_appeal_of_regulations-index' ? 'text-light' : '' || request()->route()->getName() == 'k3l_appeal_of_regulations-create') ? 'text-light' : '' || request()->route()->getName() == 'work_tools-edit') ? 'text-light' : '' }}"></i>
                                                    </span>
                                                    Ketentuan K3L
                                                </a>
                                            @endrole
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <li
                                class="nav-item {{ (((((((((((request()->route()->getName() == 'forms-index'
                                                                                ? 'active'
                                                                                : '' || request()->route()->getName() == 'forms-create')
                                                                            ? 'active'
                                                                            : '' || request()->route()->getName() == 'forms-edit')
                                                                        ? 'active'
                                                                        : '' || request()->route()->getName() == 'descriptions-index')
                                                                    ? 'active'
                                                                    : '' || request()->route()->getName() == 'descriptions-create')
                                                                ? 'active'
                                                                : '' || request()->route()->getName() == 'descriptions-edit')
                                                            ? 'active'
                                                            : '' || request()->route()->getName() == 'protective_equipments-index')
                                                        ? 'active'
                                                        : '' || request()->route()->getName() == 'protective_equipments-create')
                                                    ? 'active'
                                                    : '' || request()->route()->getName() == 'protective_equipments-edit')
                                                ? 'active'
                                                : '' || request()->route()->getName() == 'additional_notes-index')
                                            ? 'active'
                                            : '' || request()->route()->getName() == 'additional_notes-create')
                                        ? 'active'
                                        : '' || request()->route()->getName() == 'additional_notes-edit')
                                    ? 'active'
                                    : '' }} dropdown">
                                <a class="nav-link dropdown-toggle {{ (((((((((((request()->route()->getName() == 'forms-index'
                                                                                ? 'show'
                                                                                : '' || request()->route()->getName() == 'forms-create')
                                                                            ? 'show'
                                                                            : '' || request()->route()->getName() == 'forms-edit')
                                                                        ? 'show'
                                                                        : '' || request()->route()->getName() == 'descriptions-index')
                                                                    ? 'show'
                                                                    : '' || request()->route()->getName() == 'descriptions-create')
                                                                ? 'show'
                                                                : '' || request()->route()->getName() == 'descriptions-edit')
                                                            ? 'show'
                                                            : '' || request()->route()->getName() == 'protective_equipments-index')
                                                        ? 'show'
                                                        : '' || request()->route()->getName() == 'protective_equipments-create')
                                                    ? 'show'
                                                    : '' || request()->route()->getName() == 'protective_equipments-edit')
                                                ? 'show'
                                                : '' || request()->route()->getName() == 'additional_notes-index')
                                            ? 'show'
                                            : '' || request()->route()->getName() == 'additional_notes-create')
                                        ? 'show'
                                        : '' || request()->route()->getName() == 'additional_notes-edit')
                                    ? 'show'
                                    : '' }}"
                                    href="#navbar-base" data-bs-toggle="dropdown" data-bs-auto-close="false"
                                    role="button"
                                    aria-expanded="{{ (((((((((((request()->route()->getName() == 'forms-index'
                                                                                    ? 'true'
                                                                                    : 'false' || request()->route()->getName() == 'forms-create')
                                                                                ? 'true'
                                                                                : 'false' || request()->route()->getName() == 'forms-edit')
                                                                            ? 'true'
                                                                            : 'false' || request()->route()->getName() == 'descriptions-index')
                                                                        ? 'true'
                                                                        : 'false' || request()->route()->getName() == 'descriptions-create')
                                                                    ? 'true'
                                                                    : 'false' || request()->route()->getName() == 'descriptions-edit')
                                                                ? 'true'
                                                                : 'false' || request()->route()->getName() == 'protective_equipments-index')
                                                            ? 'true'
                                                            : 'false' || request()->route()->getName() == 'protective_equipments-create')
                                                        ? 'true'
                                                        : 'false' || request()->route()->getName() == 'protective_equipments-edit')
                                                    ? 'true'
                                                    : 'false' || request()->route()->getName() == 'additional_notes-index')
                                                ? 'true'
                                                : 'false' || request()->route()->getName() == 'additional_notes-create')
                                            ? 'true'
                                            : 'false' || request()->route()->getName() == 'additional_notes-edit')
                                        ? 'true'
                                        : 'false' }}">
                                    <span class="nav-link-icon d-md-none d-lg-inline-block">
                                        <i
                                            class="fa-solid fa-table-list {{ (((((((((((request()->route()->getName() == 'forms-index'
                                                                                            ? 'text-light'
                                                                                            : '' || request()->route()->getName() == 'forms-create')
                                                                                        ? 'text-light'
                                                                                        : '' || request()->route()->getName() == 'forms-edit')
                                                                                    ? 'text-light'
                                                                                    : '' || request()->route()->getName() == 'descriptions-index')
                                                                                ? 'text-light'
                                                                                : '' || request()->route()->getName() == 'descriptions-create')
                                                                            ? 'text-light'
                                                                            : '' || request()->route()->getName() == 'descriptions-edit')
                                                                        ? 'text-light'
                                                                        : '' || request()->route()->getName() == 'protective_equipments-index')
                                                                    ? 'text-light'
                                                                    : '' || request()->route()->getName() == 'protective_equipments-create')
                                                                ? 'text-light'
                                                                : '' || request()->route()->getName() == 'protective_equipments-edit')
                                                            ? 'text-light'
                                                            : '' || request()->route()->getName() == 'additional_notes-index')
                                                        ? 'text-light'
                                                        : '' || request()->route()->getName() == 'additional_notes-create')
                                                    ? 'text-light'
                                                    : '' || request()->route()->getName() == 'additional_notes-edit')
                                                ? 'text-light'
                                                : '' }}"></i>
                                    </span>
                                    <span class="nav-link-title">
                                        Form Safety Permit
                                    </span>
                                </a>
                                <div
                                    class="dropdown-menu {{ (((((((((((request()->route()->getName() == 'forms-index'
                                                                                    ? 'show'
                                                                                    : '' || request()->route()->getName() == 'forms-create')
                                                                                ? 'show'
                                                                                : '' || request()->route()->getName() == 'forms-edit')
                                                                            ? 'show'
                                                                            : '' || request()->route()->getName() == 'descriptions-index')
                                                                        ? 'show'
                                                                        : '' || request()->route()->getName() == 'descriptions-create')
                                                                    ? 'show'
                                                                    : '' || request()->route()->getName() == 'descriptions-edit')
                                                                ? 'show'
                                                                : '' || request()->route()->getName() == 'protective_equipments-index')
                                                            ? 'show'
                                                            : '' || request()->route()->getName() == 'protective_equipments-create')
                                                        ? 'show'
                                                        : '' || request()->route()->getName() == 'protective_equipments-edit')
                                                    ? 'show'
                                                    : '' || request()->route()->getName() == 'additional_notes-index')
                                                ? 'show'
                                                : '' || request()->route()->getName() == 'additional_notes-create')
                                            ? 'show'
                                            : '' || request()->route()->getName() == 'additional_notes-edit')
                                        ? 'show'
                                        : '' }}">
                                    <div class="dropdown-menu-columns">
                                        <div class="dropdown-menu-column">
                                            <a class="dropdown-item {{ ((request()->route()->getName() == 'forms-index' ? 'active text-light' : '' || request()->route()->getName() == 'forms-create') ? 'active text-light' : '' || request()->route()->getName() == 'forms-edit') ? 'active text-light' : '' }}"
                                                href="/forms">
                                                <span class="nav-link-icon d-md-none d-lg-inline-block">
                                                    <i
                                                        class="fa-solid fa-file-shield {{ ((request()->route()->getName() == 'forms-index' ? 'text-light' : '' || request()->route()->getName() == 'forms-create') ? 'text-light' : '') || request()->route()->getName() == 'forms-edit' ? 'text-light' : '' }}"></i>
                                                </span>
                                                Safety Permit
                                            </a>
                                        </div>
                                    </div>
                                    @role('super_user|spv_k3|staff_k3')
                                        <div class="dropdown-menu-columns">
                                            <div class="dropdown-menu-column">
                                                <a class="dropdown-item {{ ((request()->route()->getName() == 'descriptions-index' ? 'active text-light' : '' || request()->route()->getName() == 'descriptions-create') ? 'active text-light' : '' || request()->route()->getName() == 'descriptions-edit') ? 'active text-light' : '' }}"
                                                    href="/descriptions">
                                                    <span class="nav-link-icon d-md-none d-lg-inline-block">
                                                        <i
                                                            class="fa-solid fa-triangle-exclamation {{ ((request()->route()->getName() == 'descriptions-index' ? 'text-light' : '' || request()->route()->getName() == 'descriptions-create') ? 'text-light' : '') || request()->route()->getName() == 'descriptions-edit' ? 'text-light' : '' }}"></i>
                                                    </span>
                                                    Deskripsi
                                                </a>
                                            </div>
                                        </div>
                                        <div class="dropdown-menu-columns">
                                            <div class="dropdown-menu-column">
                                                <a class="dropdown-item {{ ((request()->route()->getName() == 'protective_equipments-index' ? 'active text-light' : '' || request()->route()->getName() == 'protective_equipments-create') ? 'active text-light' : '' || request()->route()->getName() == 'protective_equipments-edit') ? 'active text-light' : '' }}"
                                                    href="/protective_equipments">
                                                    <span class="nav-link-icon d-md-none d-lg-inline-block">
                                                        <i
                                                            class="fa-solid fa-shield {{ ((request()->route()->getName() == 'protective_equipments-index' ? 'text-light' : '' || request()->route()->getName() == 'protective_equipments-create') ? 'text-light' : '') || request()->route()->getName() == 'protective_equipments-edit' ? 'text-light' : '' }}"></i>
                                                    </span>
                                                    Alat Pelindung Diri
                                                </a>
                                            </div>
                                        </div>
                                        <div class="dropdown-menu-columns">
                                            <div class="dropdown-menu-column">
                                                <a class="dropdown-item {{ ((request()->route()->getName() == 'additional_notes-index' ? 'active text-light' : '' || request()->route()->getName() == 'additional_notes-create') ? 'active text-light' : '' || request()->route()->getName() == 'additional_notes-edit') ? 'active text-light' : '' }}"
                                                    href="/additional_notes">
                                                    <span class="nav-link-icon d-md-none d-lg-inline-block">
                                                        <i
                                                            class="fa-solid fa-note-sticky {{ ((request()->route()->getName() == 'additional_notes-index' ? 'text-light' : '' || request()->route()->getName() == 'additional_notes-create') ? 'text-light' : '') || request()->route()->getName() == 'additional_notes-edit' ? 'text-light' : '' }}"></i>
                                                    </span>
                                                    Catatan Tambahan
                                                </a>
                                            </div>
                                        </div>
                                    @endrole
                                </div>
                            </li>
                            <li
                                class="nav-item {{ (((((((((((request()->route()->getName() == 'ptws-index'
                                                                                ? 'active'
                                                                                : '' || request()->route()->getName() == 'ptws-create')
                                                                            ? 'active'
                                                                            : '' || request()->route()->getName() == 'ptws-edit')
                                                                        ? 'active'
                                                                        : '' || request()->route()->getName() == 'ptw_descriptions-index')
                                                                    ? 'active'
                                                                    : '' || request()->route()->getName() == 'ptw_descriptions-create')
                                                                ? 'active'
                                                                : '' || request()->route()->getName() == 'ptw_descriptions-edit')
                                                            ? 'active'
                                                            : '' || request()->route()->getName() == 'isolation_methods-index')
                                                        ? 'active'
                                                        : '' || request()->route()->getName() == 'isolation_methods-create')
                                                    ? 'active'
                                                    : '' || request()->route()->getName() == 'isolation_methods-edit')
                                                ? 'active'
                                                : '' || request()->route()->getName() == 'ptw_notes-index')
                                            ? 'active'
                                            : '' || request()->route()->getName() == 'ptw_notes-create')
                                        ? 'active'
                                        : '' || request()->route()->getName() == 'ptw_notes-edit')
                                    ? 'active'
                                    : '' }} dropdown">
                                <a class="nav-link dropdown-toggle {{ (((((((((((request()->route()->getName() == 'ptws-index'
                                                                                ? 'show'
                                                                                : '' || request()->route()->getName() == 'ptws-create')
                                                                            ? 'show'
                                                                            : '' || request()->route()->getName() == 'ptws-edit')
                                                                        ? 'show'
                                                                        : '' || request()->route()->getName() == 'ptw_descriptions-index')
                                                                    ? 'show'
                                                                    : '' || request()->route()->getName() == 'ptw_descriptions-create')
                                                                ? 'show'
                                                                : '' || request()->route()->getName() == 'ptw_descriptions-edit')
                                                            ? 'show'
                                                            : '' || request()->route()->getName() == 'isolation_methods-index')
                                                        ? 'show'
                                                        : '' || request()->route()->getName() == 'isolation_methods-create')
                                                    ? 'show'
                                                    : '' || request()->route()->getName() == 'isolation_methods-edit')
                                                ? 'show'
                                                : '' || request()->route()->getName() == 'ptw_notes-index')
                                            ? 'show'
                                            : '' || request()->route()->getName() == 'ptw_notes-create')
                                        ? 'show'
                                        : '' || request()->route()->getName() == 'ptw_notes-edit')
                                    ? 'show'
                                    : '' }}"
                                    href="#navbar-base" data-bs-toggle="dropdown" data-bs-auto-close="false"
                                    role="button"
                                    aria-expanded="{{ (((((((((((request()->route()->getName() == 'ptws-index'
                                                                                    ? 'true'
                                                                                    : 'false' || request()->route()->getName() == 'ptws-create')
                                                                                ? 'true'
                                                                                : 'false' || request()->route()->getName() == 'ptws-edit')
                                                                            ? 'true'
                                                                            : 'false' || request()->route()->getName() == 'ptw_descriptions-index')
                                                                        ? 'true'
                                                                        : 'false' || request()->route()->getName() == 'ptw_descriptions-create')
                                                                    ? 'true'
                                                                    : 'false' || request()->route()->getName() == 'ptw_descriptions-edit')
                                                                ? 'true'
                                                                : 'false' || request()->route()->getName() == 'isolation_methods-index')
                                                            ? 'true'
                                                            : 'false' || request()->route()->getName() == 'isolation_methods-create')
                                                        ? 'true'
                                                        : 'false' || request()->route()->getName() == 'isolation_methods-edit')
                                                    ? 'true'
                                                    : 'false' || request()->route()->getName() == 'ptw_notes-index')
                                                ? 'true'
                                                : 'false' || request()->route()->getName() == 'ptw_notes-create')
                                            ? 'true'
                                            : 'false' || request()->route()->getName() == 'ptw_notes-edit')
                                        ? 'true'
                                        : 'false' }}">
                                    <span class="nav-link-icon d-md-none d-lg-inline-block">
                                        <i
                                            class="fa-solid fa-table-list {{ (((((((((((request()->route()->getName() == 'ptws-index'
                                                                                            ? 'text-light'
                                                                                            : '' || request()->route()->getName() == 'ptws-create')
                                                                                        ? 'text-light'
                                                                                        : '' || request()->route()->getName() == 'ptws-edit')
                                                                                    ? 'text-light'
                                                                                    : '' || request()->route()->getName() == 'ptw_descriptions-index')
                                                                                ? 'text-light'
                                                                                : '' || request()->route()->getName() == 'ptw_descriptions-create')
                                                                            ? 'text-light'
                                                                            : '' || request()->route()->getName() == 'ptw_descriptions-edit')
                                                                        ? 'text-light'
                                                                        : '' || request()->route()->getName() == 'isolation_methods-index')
                                                                    ? 'text-light'
                                                                    : '' || request()->route()->getName() == 'isolation_methods-create')
                                                                ? 'text-light'
                                                                : '' || request()->route()->getName() == 'isolation_methods-edit')
                                                            ? 'text-light'
                                                            : '' || request()->route()->getName() == 'ptw_notes-index')
                                                        ? 'text-light'
                                                        : '' || request()->route()->getName() == 'ptw_notes-create')
                                                    ? 'text-light'
                                                    : '' || request()->route()->getName() == 'ptw_notes-edit')
                                                ? 'text-light'
                                                : '' }}"></i>
                                    </span>
                                    <span class="nav-link-title">
                                        Form PTW
                                    </span>
                                </a>
                                <div
                                    class="dropdown-menu {{ (((((((((((request()->route()->getName() == 'ptws-index'
                                                                                    ? 'show'
                                                                                    : '' || request()->route()->getName() == 'ptws-create')
                                                                                ? 'show'
                                                                                : '' || request()->route()->getName() == 'ptws-edit')
                                                                            ? 'show'
                                                                            : '' || request()->route()->getName() == 'ptw_descriptions-index')
                                                                        ? 'show'
                                                                        : '' || request()->route()->getName() == 'ptw_descriptions-create')
                                                                    ? 'show'
                                                                    : '' || request()->route()->getName() == 'ptw_descriptions-edit')
                                                                ? 'show'
                                                                : '' || request()->route()->getName() == 'isolation_methods-index')
                                                            ? 'show'
                                                            : '' || request()->route()->getName() == 'isolation_methods-create')
                                                        ? 'show'
                                                        : '' || request()->route()->getName() == 'isolation_methods-edit')
                                                    ? 'show'
                                                    : '' || request()->route()->getName() == 'ptw_notes-index')
                                                ? 'show'
                                                : '' || request()->route()->getName() == 'ptw_notes-create')
                                            ? 'show'
                                            : '' || request()->route()->getName() == 'ptw_notes-edit')
                                        ? 'show'
                                        : '' }}">
                                    <div class="dropdown-menu-columns">
                                        <div class="dropdown-menu-column">
                                            <a class="dropdown-item {{ ((request()->route()->getName() == 'ptws-index'
                                                        ? 'active text-light'
                                                        : '' || request()->route()->getName() == 'ptws-create')
                                                    ? 'active text-light'
                                                    : '' || request()->route()->getName() == 'ptws-edit')
                                                ? 'active text-light'
                                                : '' }}"
                                                href="/ptws">
                                                <span class="nav-link-icon d-md-none d-lg-inline-block">
                                                    <i
                                                        class="fa-solid fa-key {{ ((request()->route()->getName() == 'ptws-index'
                                                                ? 'text-light'
                                                                : '' || request()->route()->getName() == 'ptws-create')
                                                            ? 'text-light'
                                                            : '') || request()->route()->getName() == 'ptws-edit'
                                                            ? 'text-light'
                                                            : '' }}"></i>
                                                </span>
                                                PTW
                                            </a>
                                            @role('super_user|spv_k3|staff_k3|spv_produksi')
                                                <a class="dropdown-item {{ (((((request()->route()->getName() == 'ptw_descriptions-index'
                                                                        ? 'active text-light'
                                                                        : '' || request()->route()->getName() == 'ptw_descriptions-create')
                                                                    ? 'active text-light'
                                                                    : '' || request()->route()->getName() == 'ptw_descriptions-edit')
                                                                ? 'active text-light'
                                                                : '' || request()->route()->getName() == 'isolation_methods-index')
                                                            ? 'active text-light'
                                                            : '' || request()->route()->getName() == 'isolation_methods-create')
                                                        ? 'active text-light'
                                                        : '' || request()->route()->getName() == 'isolation_methods-edit')
                                                    ? 'active text-light'
                                                    : '' }}"
                                                    href="/ptw_descriptions">
                                                    <span class="nav-link-icon d-md-none d-lg-inline-block">
                                                        <i
                                                            class="fa-solid fa-triangle-exclamation {{ (((((request()->route()->getName() == 'ptw_descriptions-index'
                                                                            ? 'text-light'
                                                                            : '' || request()->route()->getName() == 'ptw_descriptions-create')
                                                                        ? 'text-light'
                                                                        : '') || request()->route()->getName() == 'ptw_descriptions-edit'
                                                                        ? 'text-light'
                                                                        : '' || request()->route()->getName() == 'isolation_methds-index')
                                                                    ? 'text-light'
                                                                    : '' || request()->route()->getName() == 'isolation_methds-create')
                                                                ? 'text-light'
                                                                : '') || request()->route()->getName() == 'isolation_methds-edit'
                                                                ? 'text-light'
                                                                : '' }}"></i>
                                                    </span>
                                                    Deskripsi
                                                </a>
                                                <a class="dropdown-item {{ ((request()->route()->getName() == 'ptw_notes-index'
                                                            ? 'active text-light'
                                                            : '' || request()->route()->getName() == 'ptw_notes-create')
                                                        ? 'active text-light'
                                                        : '' || request()->route()->getName() == 'ptw_notes-edit')
                                                    ? 'active text-light'
                                                    : '' }}"
                                                    href="/ptw_notes">
                                                    <span class="nav-link-icon d-md-none d-lg-inline-block">
                                                        <i
                                                            class="fa-solid fa-note-sticky {{ ((request()->route()->getName() == 'ptw_notes-index'
                                                                    ? 'text-light'
                                                                    : '' || request()->route()->getName() == 'ptw_notes-create')
                                                                ? 'text-light'
                                                                : '') || request()->route()->getName() == 'ptw_notes-edit'
                                                                ? 'text-light'
                                                                : '' }}"></i>
                                                    </span>
                                                    Catatan Tambahan
                                                </a>
                                            @endrole
                                        </div>
                                    </div>
                                </div>
                            </li>
                        @endrole
                        @role('super_user')
                            <li
                                class="nav-item {{ (((((request()->route()->getName() == 'roles_and_users-index'
                                                        ? 'active'
                                                        : '' || request()->route()->getName() == 'roles_and_users-create')
                                                    ? 'active'
                                                    : '' || request()->route()->getName() == 'roles_and_users-edit')
                                                ? 'active'
                                                : '' || request()->route()->getName() == 'permissions-index')
                                            ? 'active'
                                            : '' || request()->route()->getName() == 'permissions-create')
                                        ? 'active'
                                        : '' || request()->route()->getName() == 'permissions-edit')
                                    ? 'active'
                                    : '' }} dropdown">
                                <a class="nav-link dropdown-toggle {{ (((((request()->route()->getName() == 'roles_and_users-index'
                                                        ? 'show'
                                                        : '' || request()->route()->getName() == 'roles_and_users-create')
                                                    ? 'show'
                                                    : '' || request()->route()->getName() == 'roles_and_users-edit')
                                                ? 'show'
                                                : '' || request()->route()->getName() == 'permissions-index')
                                            ? 'show'
                                            : '' || request()->route()->getName() == 'permissions-create')
                                        ? 'show'
                                        : '' || request()->route()->getName() == 'permissions-edit')
                                    ? 'show'
                                    : '' }}"
                                    href="#navbar-base" data-bs-toggle="dropdown" data-bs-auto-close="false"
                                    role="button"
                                    aria-expanded="{{ (((((request()->route()->getName() == 'roles_and_users-index'
                                                            ? 'true'
                                                            : 'false' || request()->route()->getName() == 'roles_and_users-create')
                                                        ? 'true'
                                                        : 'false' || request()->route()->getName() == 'roles_and_users-edit')
                                                    ? 'true'
                                                    : 'false' || request()->route()->getName() == 'permissions-index')
                                                ? 'true'
                                                : 'false' || request()->route()->getName() == 'permissions-create')
                                            ? 'true'
                                            : 'false' || request()->route()->getName() == 'permissions-edit')
                                        ? 'true'
                                        : 'false' }}">
                                    <span class="nav-link-icon d-md-none d-lg-inline-block">
                                        <i
                                            class="fa-solid fa-user-check {{ (((((request()->route()->getName() == 'roles_and_users-index'
                                                                    ? 'text-light'
                                                                    : '' || request()->route()->getName() == 'roles_and_users-create')
                                                                ? 'text-light'
                                                                : '' || request()->route()->getName() == 'roles_and_users-edit')
                                                            ? 'text-light'
                                                            : '' || request()->route()->getName() == 'permissions-index')
                                                        ? 'text-light'
                                                        : '' || request()->route()->getName() == 'permissions-create')
                                                    ? 'text-light'
                                                    : '' || request()->route()->getName() == 'permissions-edit')
                                                ? 'text-light'
                                                : '' }}"></i>
                                    </span>
                                    <span class="nav-link-title">
                                        Akses User
                                    </span>
                                </a>
                                <div
                                    class="dropdown-menu {{ (((((request()->route()->getName() == 'roles_and_users-index'
                                                            ? 'show'
                                                            : '' || request()->route()->getName() == 'roles_and_users-create')
                                                        ? 'show'
                                                        : '' || request()->route()->getName() == 'roles_and_users-edit')
                                                    ? 'show'
                                                    : '' || request()->route()->getName() == 'permissions-index')
                                                ? 'show'
                                                : '' || request()->route()->getName() == 'permissions-create')
                                            ? 'show'
                                            : '' || request()->route()->getName() == 'permissions-edit')
                                        ? 'show'
                                        : '' }}">
                                    <div class="dropdown-menu-columns">
                                        <div class="dropdown-menu-column">
                                            <a class="dropdown-item {{ ((request()->route()->getName() == 'roles_and_users-index'
                                                        ? 'active text-light'
                                                        : '' || request()->route()->getName() == 'roles_and_users-create')
                                                    ? 'active text-light'
                                                    : '' || request()->route()->getName() == 'roles_and_users-edit')
                                                ? 'active text-light'
                                                : '' }}"
                                                href="/roles_and_users">
                                                <span class="nav-link-icon d-md-none d-lg-inline-block">
                                                    <i
                                                        class="fa-solid fa-person-military-pointing {{ ((request()->route()->getName() == 'roles_and_users-index'
                                                                ? 'text-light'
                                                                : '' || request()->route()->getName() == 'roles_and_users-create')
                                                            ? 'text-light'
                                                            : '') || request()->route()->getName() == 'roles_and_users-edit'
                                                            ? 'text-light'
                                                            : '' }}"></i>
                                                </span>
                                                Roles & Users
                                            </a>
                                            {{-- <a class="dropdown-item {{ ((request()->route()->getName() == 'permissions-index'
                                                        ? 'active text-light'
                                                        : '' || request()->route()->getName() == 'permissions-create')
                                                    ? 'active text-light'
                                                    : '' || request()->route()->getName() == 'permissions-edit')
                                                ? 'active text-light'
                                                : '' }}"
                                                href="/permissions">
                                                <span class="nav-link-icon d-md-none d-lg-inline-block">
                                                    <i
                                                        class="fa-solid fa-key {{ ((request()->route()->getName() == 'permissions-index'
                                                                ? 'text-light'
                                                                : '' || request()->route()->getName() == 'permissions-create')
                                                            ? 'text-light'
                                                            : '') || request()->route()->getName() == 'permissions-edit'
                                                            ? 'text-light'
                                                            : '' }}"></i>
                                                </span>
                                                Permission
                                            </a> --}}
                                        </div>
                                    </div>
                                </div>
                            </li>
                        @endrole
                    </ul>
                </div>
            </div>
        </aside>

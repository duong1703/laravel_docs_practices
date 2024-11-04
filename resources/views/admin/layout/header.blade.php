

<!-- Header Start -->
<header class="app-header w-100">
    <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm w-100">
        <div class="d-flex justify-content-between align-items-center w-100 px-3">
            <!-- Sidebar Toggler (only on small screens) -->
            <div class="d-flex align-items-center">
                <a class="nav-link sidebartoggler d-block d-xl-none me-3" id="headerCollapse" href="javascript:void(0)">
                    <i class="ti ti-menu-2 fs-5"></i>
                </a>
            </div>

            <!-- User Profile at the end of navbar -->
            <ul class="navbar-nav flex-row align-items-center">
                <li class="nav-item dropdown">
                    <a class="nav-link d-flex align-items-center gap-2" href="javascript:void(0)" id="userDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                        
                        @foreach ($data as $getname )
                        
                        <h4 class="mt-2">Welcome back! {{ $getname->name }}</h4>
                        @endforeach
                       
                        <img src="{{ asset('images/profile/user-1.jpg') }}" alt="User" width="35" height="35" class="rounded-circle border border-light shadow-sm">
                    </a>
                    <div class="dropdown-menu dropdown-menu-end dropdown-menu-animate-up shadow-lg border-0" aria-labelledby="userDropdown">
                        <div class="dropdown-header text-center fw-bold">User Menu</div>
                        <a href="javascript:void(0)" class="d-flex align-items-center gap-2 dropdown-item">
                            <i class="ti ti-user fs-6 text-primary"></i>
                            <span>My Profile</span>
                        </a>
                        <a href="javascript:void(0)" class="d-flex align-items-center gap-2 dropdown-item">
                            <i class="ti ti-mail fs-6 text-primary"></i>
                            <span>My Account</span>
                        </a>
                        <a href="javascript:void(0)" class="d-flex align-items-center gap-2 dropdown-item">
                            <i class="ti ti-list-check fs-6 text-primary"></i>
                            <span>My Task</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <form action="{{ route('logout.destroy') }}" method="post">
                            @csrf
                            <button type="submit"  class="btn btn-outline-primary d-block mx-auto text-center">Logout</button>
                        </form>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
</header>
<!-- Header End -->

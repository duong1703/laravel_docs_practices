<!-- Sidebar Start -->
<aside class="left-sidebar">
    <!-- Sidebar scroll-->
    <div>
        <div class="brand-logo d-flex align-items-center justify-content-between text-center">
            <a href="{{ route('dashboard') }}" class="text-nowrap logo-img">
                <img src="https://laravel.com/img/logomark.min.svg" alt="">
                <img src="https://laravel.com/img/logotype.min.svg" alt="">
            </a>
            <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
                <i class="ti ti-x fs-8"></i>
            </div>
        </div>
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
            <ul id="sidebarnav">
                <li class="nav-small-cap">
                    <iconify-icon icon="solar:menu-dots-linear" class="nav-small-cap-icon fs-4"></iconify-icon>
                    <span class="hide-menu">Home</span>
                </li>
                <li class="sidebar-item active">
                    <a class="sidebar-link" href="{{ route('dashboard') }}" aria-expanded="false">
                        <iconify-icon icon="solar:widget-add-line-duotone"></iconify-icon>
                        <span class="hide-menu">Dashboard</span>
                    </a>
                </li>
                <li>
                    <span class="sidebar-divider lg"></span>
                </li>
                <li class="nav-small-cap">
                    <iconify-icon icon="solar:menu-dots-linear" class="nav-small-cap-icon fs-4"></iconify-icon>
                    <span class="hide-menu">Post Management</span>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link" href="{{ route('docs.index') }}" aria-expanded="false">
                        <img width="20" height="20" src="https://img.icons8.com/ios/50/list--v1.png" alt="list--v1" />
                        <span class="hide-menu">Post List</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link" href="{{ route('docs.create') }}" aria-expanded="false">
                        <img width="20" height="20" src="https://img.icons8.com/ios/50/plus--v1.png" alt="list--v1" />
                        <span class="hide-menu">Post Create</span>
                    </a>
                </li>
                <li class="nav-small-cap">
                    <iconify-icon icon="solar:menu-dots-linear" class="nav-small-cap-icon fs-4"></iconify-icon>
                    <span class="hide-menu">AUTH</span>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link" href="./authentication-login.html" aria-expanded="false">
                        <iconify-icon icon="solar:login-3-line-duotone"></iconify-icon>
                        <span class="hide-menu">Login</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link" href="./authentication-register.html" aria-expanded="false">
                        <iconify-icon icon="solar:user-plus-rounded-line-duotone"></iconify-icon>
                        <span class="hide-menu">Register</span>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>
<!-- Sidebar End -->

<style>
.sidebar-item.active .sidebar-link,
.sidebar-item.active .sidebar-link span {
    color: black !important;
}
</style>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>@yield('page_title')</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@500;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('dashboard/assets/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('dashboard/assets/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css') }}" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link rel="stylesheet" href="{{ asset('dashboard/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('dashboard/assets/css/style.css') }}">

    <style>
        .form-control::placeholder {
            color: var(--secondary);
        }

        input[type=file]::file-selector-button {
            background-color: var(--light);
            color: white;
            border-right: 2px solid white;
        }
    </style>
</head>

<body>
    <div class="container-fluid position-relative d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-dark position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Sidebar Start -->
        <div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-secondary navbar-dark py-0">
                <a href="{{ route('admin.dashboard') }}" class="navbar-brand mx-4 py-3">
                    <h2 class="text-primary my-0"><i class="fa fa-user-edit me-2"></i>Nice Day</h2>
                </a>
                <div class="navbar-nav w-100">
                    <a href="{{ route('admin.dashboard') }}" class="nav-item nav-link my-1 @if (Route::is('admin.dashboard')) active @endif)"><i class="bi bi-speedometer me-2"></i>Dashboard</a>
                    <div class="nav-item dropdown my-1">
                        <a href="#" class="nav-link dropdown-toggle @if (Route::is('admin.addcategory') || Route::is('admin.allcategories')) active @endif)" data-bs-toggle="dropdown"><i class="bi bi-file-earmark-plus me-2"></i>Categories</a>
                        <div class="dropdown-menu bg-transparent rounded-0 border-0 border-top border-bottom">
                            <a href="{{ route('admin.addcategory') }}" class="dropdown-item my-1">Add Category</a>
                            <a href="{{ route('admin.allcategories') }}" class="dropdown-item my-1">All Categories</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown my-1">
                        <a href="#" class="nav-link dropdown-toggle @if (Route::is('admin.addproduct') || Route::is('admin.allproducts')) active @endif)" data-bs-toggle="dropdown"><i class="bi bi-file-earmark-plus me-2"></i>Products</a>
                        <div class="dropdown-menu bg-transparent rounded-0 border-0 border-top border-bottom">
                            <a href="{{ route('admin.addproduct') }}" class="dropdown-item my-1">Add Product</a>
                            <a href="{{ route('admin.allproducts') }}" class="dropdown-item my-1">All Products</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown my-1">
                        <a href="#" class="nav-link dropdown-toggle @if (Route::is('admin.pendingorders') || Route::is('admin.completedorders') || Route::is('admin.canceledorders')) active @endif)" data-bs-toggle="dropdown"><i class="far fa-file-alt me-2"></i>Orders</a>
                        <div class="dropdown-menu bg-transparent rounded-0 border-0 border-top border-bottom">
                            <a href="{{ route('admin.pendingorders') }}" class="dropdown-item my-1">Pending Orders</a>
                            <a href="{{ route('admin.completedorders') }}" class="dropdown-item my-1">Completed Orders</a>
                            <a href="{{ route('admin.canceledorders') }}" class="dropdown-item my-1">Canceled Orders</a>
                        </div>
                    </div>
                    <a href="{{ route('admin.allusers') }}" class="nav-item nav-link my-1 @if (Route::is('admin.allusers')) active @endif)"><i class="bi bi-people-fill me-2"></i>Users</a>
                    <div class="nav-item dropdown my-1">
                        <a href="#" class="nav-link dropdown-toggle @if (Route::is('admin.blog') || Route::is('admin.faq')) active @endif)" data-bs-toggle="dropdown"><i class="bi bi-substack me-2"></i>Pages</a>
                        <div class="dropdown-menu bg-transparent rounded-0 border-0 border-top border-bottom">
                            <a href="{{ route('admin.blog') }}" class="dropdown-item my-1">Blog</a>
                            <a href="{{ route('admin.faq') }}" class="dropdown-item my-1">FAQ</a>
                        </div>
                    </div>
                </div>
            </nav>

            <!-- Footer Start -->
            <div class="container-fluid position-absolute bottom-0 p-4">
                <div class="bg-secondary rounded-top">
                    <div class="text-center text-sm-start">
                        &copy; <a href="{{ route('home') }}">Nice Day</a>, <br>All Right Reserved.
                    </div>
                </div>
            </div>
            <!-- Footer End -->
        </div>
        <!-- Sidebar End -->


        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
            <nav class="navbar navbar-expand bg-secondary navbar-dark sticky-top px-4 py-3 mx-5 mt-4 rounded-3 d-flex justify-content-between">
                <div class="align-items-center d-flex">
                    <a href="{{ route('home') }}" class="navbar-brand d-flex d-lg-none me-4">
                        <h2 class="text-primary mb-0"><i class="fa fa-user-edit"></i></h2>
                    </a>
                    <a href="#" class="sidebar-toggler flex-shrink-0">
                        <i class="fa fa-bars"></i>
                    </a>
                </div>
                <div class="d-flex align-items-center ms-4">
                    <div class="d-flex flex-column">
                        <span class="text-warning">Welcome Back!</span>
                        <form method="POST" class="w-100 text-end" action="{{ route('logout') }}">
                            @csrf
                            <x-dropdown-link class="text-end" style="padding: 0 !important;" :href="route('logout')" onclick="event.preventDefault(); this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form>
                    </div>
                    <div class="border-start ps-3 border-white ms-3">
                        <h6 class="mb-0">{{ auth()->user()->name }}</h6>
                        <span>{{ auth()->user()->roles[0]->{'display_name'} }}</span>
                    </div>
                </div>
            </nav>
            <!-- Navbar End -->

            <!-- Real Content -->
            @yield('content')
            <!-- Real Content End -->

        </div>
        <!-- Content End -->

        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('dashboard/assets/lib/chart/chart.min.js') }}"></script>
    <script src="{{ asset('dashboard/assets/lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('dashboard/assets/lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('dashboard/assets/lib/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('dashboard/assets/lib/tempusdominus/js/moment.min.js') }}"></script>
    <script src="{{ asset('dashboard/assets/lib/tempusdominus/js/moment-timezone.min.js') }}"></script>
    <script src="{{ asset('dashboard/assets/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js') }}"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('dashboard/assets/js/main.js') }}"></script>
</body>

</html>
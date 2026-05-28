<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="adminHMD professional admin dashboard template">
    <title>Dashboard Admin</title>

    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/bootstrap-icons/bootstrap-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>

<body>
    <div class="admin-shell">
        <div class="sidebar-backdrop" data-sidebar-close></div>

        <x-aside></x-aside>

        <div class="admin-main">
            <x-navbar-dashboard></x-navbar-dashboard>
            

            <main class="dashboard-content">
                <div class="container-fluid px-3 px-lg-4 py-4">

                    {{ $slot }}
                </div>
            </main>

            <x-footer-dashboard></x-footer-dashboard>
        </div>
    </div>

    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
    @include('sweetalert::alert')
</body>

</html>
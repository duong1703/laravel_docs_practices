<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MaterailM Free Bootstrap Admin Template by WrapPixel</title>
    <link rel="shortcut icon" type="image/png" href=" {{ asset('images/logos/favicon.png') }}" />
    <link rel="stylesheet" href=" {{ asset('css/styles.min.css') }}" />
    <link rel="stylesheet" href="https://cdn.datatables.net/2.1.8/css/dataTables.dataTables.css">
</head>

<body>
    <!--  Body Wrapper -->
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="fixed">
        @include('admin.layout.header')
        @include('admin.layout.sidebar')

        <!--  Main wrapper -->
        <div class="body-wrapper">
            @yield('content')
        </div>
    </div>
    <script src=" {{ asset('libs/jquery/dist/jquery.min.js') }}"></script>
    <script src=" {{ asset('libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <script src=" {{ asset('js/sidebarmenu.js') }}"></script>
    <script src=" {{ asset('js/app.min.js') }} "></script>
    <script src=" {{ asset('libs/apexcharts/dist/apexcharts.min.js') }}"></script>
    <script src=" {{ asset('libs/simplebar/dist/simplebar.js') }}"></script>
    <script src=" {{ asset('js/dashboard.js') }}"></script>
    <!-- solar icons -->
    <script src="https://cdn.jsdelivr.net/npm/iconify-icon@1.0.8/dist/iconify-icon.min.js"></script>
    <!-- Place the first <script> tag in your HTML's <head> -->
    <script src="https://cdn.tiny.cloud/1/hbozepm8v83oquejurp97p1x4p1eymqxvifr4r4izmvfi34i/tinymce/7/tinymce.min.js"
        referrerpolicy="origin"></script>

    <!-- Place the following <script> and <textarea> tags your HTML's <body> -->
    <script>
    tinymce.init({
        selector: 'textarea',
        plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount',
        toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table | align lineheight | numlist bullist indent outdent | emoticons charmap | removeformat',
    });
    </script>
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://cdn.datatables.net/2.1.8/js/dataTables.js"></script>
    <script>
        new DataTable('#example');
    </script>
</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Hospital Management System')</title>

    <!-- Bootstrap 5.3.7 -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link href="{{ asset('css/bootstrap-icons.min.css') }}" rel="stylesheet">
    <!-- DataTables CSS (Bootstrap 5 styling) -->
    <link href="{{ asset('css/dataTables.bootstrap5.min.css') }}" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{ asset('css/dashboard.css') }}" rel="stylesheet">

    @stack('styles')
    <!-- JS Files --->
    <script src="{{ asset('js/jquery-3.7.1.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <!-- DataTables JS core + Bootstrap 5 integration -->
    <script src="{{ asset('js/dataTables.min.js') }}"></script>
    <script src="{{ asset('js/dataTables.bootstrap5.min.js') }}"></script>
    <!--Sweet Alert -->
    <script src="{{ asset('js/sweetalert2@11.js') }}"></script>
    <!--Dashboard charts -->
    <script src="{{ asset('js/chart.umd.js') }}"></script>
    <script src="{{ asset('js/chart.umd.min.js') }}"></script>
    <!--Custom JS -->
    <script src="{{ asset('js/dashboard.js') }}"></script>
    @stack('scripts')
</head>

<body>

    <div class="main-wrapper">

        @include('common.sidemenu')

        <div class="content-wrapper">

            @include('common.header')

            <div id="content-area" class=" ">
                @yield('content')


            </div>
            @include('common.chatbot')

            @include('common.footer')

        </div>

    </div>




</body>

</html>

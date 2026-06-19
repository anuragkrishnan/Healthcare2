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

    <!-- Custom CSS -->
    <link href="{{ asset('css/dashboard.css') }}" rel="stylesheet">

    @stack('styles')
</head>

<body>

    <div class="main-wrapper">

        @include('common.sidemenu')

        <div class="content-wrapper">

            @include('common.header')

            <div id="content-area">
                @yield('content')
            </div>

            @include('common.footer')

        </div>

    </div>

    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/jquery-3.7.1.min.js') }}"></script>
    <script src="{{ asset('js/chart.umd.js') }}"></script>
    <script src="{{ asset('js/chart.umd.min.js') }}"></script>
    <script src="{{ asset('js/dashboard.js') }}"></script>
    @stack('scripts')

</body>

</html>

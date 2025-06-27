<!DOCTYPE html>
<html lang="en">
<head>
    <title>{{ $title }} &mdash; Stislaravel by Kandita</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/components.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/all.min.css') }}">
</head>
<body>

    <div id="app">
        <div class="main-wrapper">

            @include('layouts.header')
            @include('layouts.sidebar')

            <div class="main-content">
                @include('sweetalert::alert')
                <div class="mt-3">
                    @yield('content')
                </div>
            </div>

            @include('layouts.footer')

        </div>
    </div>

    <script src="{{ asset('js/jquery-3.7.1.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/scripts.js') }}"></script>
    <script src="{{ asset('js/jquery.nicescroll.min.js') }}"></script>
    <script src="{{ asset('js/stisla.js') }}"></script>
</body>
</html>

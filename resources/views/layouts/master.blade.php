<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ $page_title }}</title>
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100 dark:bg-gray-900">
            @include('layouts.navigation')

            <!-- Page Content -->
            @include('shared.head')
                <div class="py-3">
                    <div class="col text-center">
                        <div class="py-4 bg-primary">
                            <h1 class="mb-0 text-white">{{ $page_title }}</h1>
                        </div>
                    </div>
                </div>

            @yield('button')<br>

            @yield('content')

            @yield('buttons')
        </div>

        <br><br>
        @include('shared.footer')

    </body>
</html>
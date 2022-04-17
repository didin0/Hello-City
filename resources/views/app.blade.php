<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://cdn.tailwindcss.com"></script>
        <title>@yield('title',config('app.name'))</title>
    </head>
    <body class="py-6 min-h-screen flex flex-col justify-between items-center">
        <main role="main" class="flex flex-col items-center">

            @yield('content')

        </main>
            <footer>
                <p class="text-gray-400">&copy; Copyright {{date('Y')}}
                
                @if(!Route::is('app_about'))
                    &middot; <a href={{ route('app_about') }} class="text-indigo-400 hover:text-indigo-800 underline">About us</a></p>
                @endif

            </footer>
        
    </body>
</html>
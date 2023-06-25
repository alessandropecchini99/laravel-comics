{{-- DA USARE QUANDO SI CREA UN LAYOUTS --}}
{{--   @yield('nome section')   --}}

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        {{-- bootstrap icon --}}
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

        {{-- font-awesome --}}
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        {{-- title --}}
        <title>@yield('title')</title>

        {{-- Vite --}}
        @vite('resources/js/app.js')
    </head>


    <body> 
        {{-- HEADER --}}
       @include('layouts.base-partials.header')

       {{-- MAIN --}}
       <main>
        @yield('main')
       </main>

       {{-- FOOTER --}}
       @include('layouts.base-partials.footer')
    </body>

</html>
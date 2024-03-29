<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        {{-- CSS --}}
        {{-- asset() punta direttamente alla cartella 'public' --}}
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        {{-- CSS --}}
        <title>Document</title>
    </head>
    <body>
        
        {{-- @include('partials/header') --}}
        @include('partials.header')

        <main>
            @yield('main-content')   
        </main>

        @include('partials.footer')


    </body>
</html>
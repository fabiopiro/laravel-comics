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
        

        <header>
            <div class="header-top">

            </div>
            <nav>
                <img src="{{ asset('img/dc-logo.png') }}" alt="dc logo">
            </nav>
            {{-- opzione background dinamico --}}
            {{-- <div class="jumbotron" style="background-image: url('{{ assets("img/jumbotron.jpg") }}')"> --}}
            <div class="jumbotron">

            </div>
        </header>

        <main>
            <div class="container">
                @foreach ($comicsArray as $comic)
                    <div class="card">
                        <img src="{{ $comic['thumb']}}" alt="{{ $comic['title']}}">
                        <p>{{ $comic['title']}}</p>
                    </div>  
                @endforeach
            </div>
            {{-- @dump($comicsArray) --}}
        </main>

        <footer></footer>


    </body>
</html>
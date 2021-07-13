<div class="comics">
    <div class="container width-75">
        @foreach ($comicsArray as $comic)
            <div class="card">
                <img src="{{ $comic['thumb']}}" alt="{{ $comic['title']}}">
                <p>{{ $comic['title']}}</p>
            </div>  
        @endforeach
    </div>
</div>
{{-- @dump($comicsArray) --}}
<nav class="comics-nav">

</nav>
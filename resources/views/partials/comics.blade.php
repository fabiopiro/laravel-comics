<div class="container">
    @foreach ($comicsArray as $comic)
        <div class="card">
            <img src="{{ $comic['thumb']}}" alt="{{ $comic['title']}}">
            <p>{{ $comic['title']}}</p>
        </div>  
    @endforeach
</div>
{{-- @dump($comicsArray) --}}
<nav class="comics-nav">

</nav>
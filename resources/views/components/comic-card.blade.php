<div class="card bg-dark" style="width: 18rem;">
    <img src="/img/{{ $comic->img }}" class="card-img-top" alt="{{ $comic->title }}">
    <div class="card-body">
        <h5 class="card-title-comic">{!! $comic->title !!}</h5>
        <p class="card-text">Editor: {!! $comic->editor !!}</p>
        <p class="card-text">Genre: {!! $comic->genre !!}</p>
        <p class="card-text">Abstract: {!! Str::limit($comic->abstract, 18) !!}</p>
        <p class="card-text">Release: {!! Str::limit($comic->release_year, 18) !!}</p>
        <a href="#" class="btn btn-info">Scopri di più</a>
    </div>
</div>
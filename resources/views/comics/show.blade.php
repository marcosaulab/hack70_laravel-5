<x-layout>



    <div class="container">
        <div class="row my-5">
            <div class="col-12">
                <h1>Comic: {{ $comic->title }}</h1>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row my-5">
            <div class="col-6">
                <img src="{{ Storage::url($comic->img) }}" class="img-fluid w-50" alt="">
            </div>
            <div class="col-6">
                <h3 class="card-title-comic">{{ $comic->title }} </h3>
                <p class="lead">{{ $comic->abstract }}</p>
                <p class="d-flex justify-content-between">
                    <span>Editore: {{ $comic->editor }}</span>
                    <span>Genere: {{ $comic->genre }}</span>
                </p>
                <p class="h4">Anno: {{ $comic->release_year }}</p>
            </div>
        </div>
    </div>


</x-layout>
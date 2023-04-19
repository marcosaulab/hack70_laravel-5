<x-layout>

    <x-slot name="title">  Comic 404</x-slot>

    <div class="container">
        <div class="row my-5">
            <div class="col-12">
                <h1>404 Pagina non trovata</h1>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row my-5">
            <div class="col-12">
                <h3>Non ho trovato nulla mi spiace!!</h3>
                <a href="{{ route('home') }}" class="btn btn-info">Torna alla home</a>
                <br><br>
                <img src="https://previews.123rf.com/images/tatahnka/tatahnka1801/tatahnka180100128/94358880-retro-comic-speech-bubble-with-404-internet-page-error-in-pop-art-style-vector-comic-balloon-with.jpg" class="img-fluid w-50" alt="">
            </div>
        </div>
    </div>


</x-layout>
<x-layout>


    <x-masthead />

    @if(session('message'))

        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('message') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        
    @endif

    <div class="container">
        <div class="row my-5">
            <div class="col-12">
                <h1>Hack70 Comics'</h1>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row my-5">

            @if($comics->isNotEmpty())
                @foreach ($comics as $comic)
                    <div class="col-12 col-md-3">
                        <x-comic-card 
                            :comic="$comic"
                         />
                    </div>
                @endforeach
            @else
                <div class="alert alert-warning" role="alert">
                    Non ci sono Comics
                </div>
            @endif

        </div>
    </div>


</x-layout>
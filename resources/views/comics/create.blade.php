<x-layout>

    <x-slot name="title"> Crea Comic</x-slot>

    <div class="container">
        <div class="row my-5">
            <div class="col-12">
                <h1>Aggiungi un Comic</h1>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row my-5">
            <div class="col-4">
                <form method="post" action="{{ route('comic.store') }}">
                    @csrf
                    <div class="mb-3">
                        <label for="title" class="form-label">Title</label>
                        <input type="text" name="title" class="form-control">                        
                    </div>
                    <div class="mb-3">
                        <label for="editor" class="form-label">Editor</label>
                        <input type="text" name="editor" class="form-control">                        
                    </div>
                    <div class="mb-3">
                        <label for="genre" class="form-label">Genre</label>
                        <input type="text" name="genre" class="form-control">                        
                    </div>
                    <div class="mb-3">
                        <label for="img" class="form-label">Image</label>
                        <input type="text" name="img" class="form-control">                        
                    </div>
                    <div class="mb-3">
                        <label for="abstract" class="form-label">Abstract</label>
                        <textarea name="abstract" class="form-control" cols="30" rows="10"></textarea>             
                    </div>
                    <div class="mb-3">
                        <label for="release_year" class="form-label">Release Year</label>
                        <input type="numer" name="release_year" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-info">Submit</button>
                </form>
            </div>
        </div>
    </div>


</x-layout>
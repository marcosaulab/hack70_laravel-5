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
                <form method="post" action="{{ route('comic.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="title" class="form-label">Title</label>
                        <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" value="{{ old('title') }}">
                        @error('title')
                            <div class="alert text-danger">{{ $message }}</div>
                        @enderror                        
                    </div>
                    <div class="mb-3">
                        <label for="editor" class="form-label">Editor</label>
                        <input type="text" name="editor" class="form-control @error('editor') is-invalid @enderror" value="{{ old('editor') }}">  
                        @error('editor')
                            <div class="alert text-danger">{{ $message }}</div>
                        @enderror                      
                    </div>
                    <div class="mb-3">
                        <label for="genre" class="form-label">Genre</label>
                        <input type="text" name="genre" class="form-control @error('genre') is-invalid @enderror" value="{{ old('genre') }}">     
                        @error('genre')
                            <div class="alert text-danger">{{ $message }}</div>
                        @enderror                   
                    </div>
                    <div class="mb-3">
                        <label for="img" class="form-label">Image</label>
                        <input type="file" name="img" class="form-control @error('img') is-invalid @enderror">
                        @error('img')
                            <div class="alert text-danger">{{ $message }}</div>
                        @enderror                                                
                    </div>
                    <div class="mb-3">
                        <label for="abstract" class="form-label">Abstract</label>
                        <textarea name="abstract" class="form-control @error('abstract') is-invalid @enderror" cols="30" rows="10">{{ old('abstract') }}</textarea> 
                        @error('abstract')
                            <div class="alert text-danger">{{ $message }}</div>
                        @enderror    
                    </div>
                    <div class="mb-3">
                        <label for="release_year" class="form-label">Release Year</label>
                        <input type="number" name="release_year" class="form-control @error('release_year') is-invalid @enderror" value="{{ old('release_year') }}">
                        @error('release_year')
                            <div class="alert text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-info">Submit</button>
                </form>
            </div>
        </div>
    </div>


</x-layout>
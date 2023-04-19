<x-layout>

    <x-slot name="title"> Crea Editor</x-slot>

    <div class="container">
        <div class="row my-5">
            <div class="col-12">
                <h1>Aggiungi un Editor</h1>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row my-5">
            <div class="col-4">
                <form method="post" action="{{ route('editor.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Nome</label>
                        <input type="text" name="name" class="form-control @error('name') is-invalid @enderror"
                            value="{{ old('name') }}">
                        @error('name')
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
                        <label for="description" class="form-label">Descrizione</label>
                        <textarea name="description" class="form-control @error('description') is-invalid @enderror" cols="30"
                            rows="10">{{ old('description') }}</textarea>
                        @error('description')
                        <div class="alert text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="foundation_year" class="form-label">Foundation Year</label>
                        <input type="number" name="foundation_year"
                            class="form-control @error('foundation_year') is-invalid @enderror"
                            value="{{ old('foundation_year') }}">
                        @error('foundation_year')
                        <div class="alert text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-info">Submit</button>
                </form>
            </div>
        </div>
    </div>


</x-layout>
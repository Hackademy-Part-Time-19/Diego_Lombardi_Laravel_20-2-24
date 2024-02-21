<x-layout>



    <div class="container">
        <div class="row">
            <div class="col-lg-4 mx-auto">

                <form class="mt-5" action="{{ route('books.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <h1>Inserisci un Libro</h1>
                    <div class="row mb-3">
                        <label for="title" class="col-sm-2 col-form-label">Titolo</label>
                        <div class="col-sm-10">
                            <input name="title" type="string" class="form-control" id="title">
                        </div>
                    </div>
                    @error('title')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                    <div class="row mb-3">
                        <label for="price" class="col-sm-2 col-form-label">Prezzo</label>
                        <div class="col-sm-10">
                            <input name="price" type="decimal" class="form-control" id="password">
                        </div>
                    </div>
                    @error('price')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror

                    <div class="row mb-3">
                        <label for="description" class="col-sm-2 col-form-label">Descrizione</label>
                        <div class="col-sm-10">
                            <input name="description" type="string" class="form-control" id="description">
                        </div>
                    </div>
                    @error('description')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                    <div class="row mb-3">
                        <label for="image" class="col-sm-2 col-form-label">Immagine Libro</label>
                        <div class="col-sm-10">
                            <input name="image" type="file" class="form-control" id="image">
                        </div>
                    </div>
                    @error('image')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                    <button type="submit" class="btn btn-primary">Aggiungi</button>
                </form>

            </div>
        </div>
    </div>



</x-layout>

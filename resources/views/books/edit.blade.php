<x-layout>



    <div class="container">
        <div class="row">
            <div class="col-lg-4 mx-auto">

                <form class="mt-5" action="{{ route('books.update') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <h1>Aggiorna il Libro {{$book->title}}</h1>
                    <div class="row mb-3">
                        <label for="title" class="col-sm-2 col-form-label">Titolo</label>
                        <div class="col-sm-10">
                            <input name="title" type="string" class="form-control" id="title" value="{{old('title'.$book->title)}}">
                        </div>
                    </div>
                    @error('title')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                    <div class="row mb-3">
                        <label for="price" class="col-sm-2 col-form-label">Prezzo</label>
                        <div class="col-sm-10">
                            <input name="price" type="decimal" class="form-control" id="price" value="{{old('price'.$book->price)}}">
                        </div>
                    </div>
                    @error('price')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror

                    <div class="row mb-3">
                        <label for="description" class="col-sm-2 col-form-label">Descrizione</label>
                        <div class="col-sm-10">
                            <input name="description" type="string" class="form-control" id="description" value="{{old('description'.$book->description)}}">
                        </div>
                    </div>
                    @error('description')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                    <div class="row mb-3">
                        <label for="image" class="col-sm-2 col-form-label">Immagine Libro</label>
                        <div class="col-sm-10">
                            <input name="image" type="file" class="form-control" id="image" >
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

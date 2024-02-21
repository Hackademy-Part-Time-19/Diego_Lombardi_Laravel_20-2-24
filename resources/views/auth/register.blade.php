<x-layout>


    <h1 class="text-primary">Registrati</h1>

    <div class="container">
        <div class="row">
            <div class="col-lg-4 mx-auto">

                <form class="mt-5" action="/register" method="POST">
                    @csrf
                    <h1>Registrati</h1>
                    <div class="row mb-3">
                        <label for="name" class="col-sm-2 col-form-label">Nome</label>
                        <div class="col-sm-10">
                            <input name="name" type="string" class="form-control" id="name">
                        </div>
                    </div>
                    @error('name')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                    <div class="row mb-3">
                        <label for="email" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                            <input name="email" type="email" class="form-control" id="email">
                        </div>
                    </div>
                    @error('email')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                    <div class="row mb-3">
                        <label for="password" class="col-sm-2 col-form-label">Password</label>
                        <div class="col-sm-10">
                            <input name="password" type="password" class="form-control" id="password">
                        </div>
                    </div>
                    @error('password')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror

                    <div class="row mb-3">
                        <label for="password_confirmation" class="col-sm-2 col-form-label">Conferma Password</label>
                        <div class="col-sm-10">
                            <input name="password_confirmation" type="password" class="form-control"
                                id="password_confirmation">
                        </div>

                    </div>
                    <button type="submit" class="btn btn-primary">Register</button>
                </form>

            </div>
        </div>
    </div>



</x-layout>

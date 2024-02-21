<x-layout>
    <h1>Log In</h1>


    <div class="container">
        <div class="row">
            <div class="col-lg-4 mx-auto">

                <form class="mt-5" action="/login" method="POST">
                    <div class="row mb-3">
                        <label for="email" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                            <input name="email" type="email" class="form-control" id="email">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="password" class="col-sm-2 col-form-label">Password</label>
                        <div class="col-sm-10">
                            <input name="password" type="password" class="form-control" id="password">
                        </div>
                    </div>
                    @error('email')<span class="text-danger">{{$message}}</span> @enderror
                    <button type="submit" class="btn btn-primary">Sign in</button>
                </form>

            </div>
        </div>
    </div>


</x-layout>

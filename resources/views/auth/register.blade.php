<main class="container" >
    @if ($errors->any())
        <div class="text-center alert alert-danger">
            @foreach ($errors->all() as $error)
            <p>{{ $error }}</p>
            @endforeach
        </div>
    @endif
    <form method="POST" action="/register" style="background-color:#f7f7f7">
     @csrf
     <div class="form-group row   ">
            <label for="name">Name: </label>
            <input class="form-control" name="name" id="name" type="text">
        </div>

        <div class="form-group row w-3">
            <label for="email">Email: </label>
            <input class="form-control" name="email" id="email" type="email">
        </div>
        <div class="form-group row w-3">
            <label for="password">Password: </label>
            <input class="form-control" name="password" id="password" type="password">
        </div>
        <div class="form-group row w-3">
            <label for="password_confirmation">Password Conformation: </label>
            <input class="form-control" name="password_confirmation" id="password_confirmation" type="password">
        </div>
        <div class="form-group ml-10">
            <button type="submit" class="btn btn-primary btn-sm ">Register</button>
        </div>
    </form>

</main>
@extends("master")

@section("content")
<div class="row justify-content-center">
    <div class="col-xl-3 col-lg-4 col-md-5 col-sm-6 ">
        <form class="form-control mt-3 p-3" action="/store-bakery" method="post">
        @csrf
            <label for="name">Név</label>
            <input class="form-control" type="text" name="name">
            <label for="type" class="mt-1">Típus</label>
            <input class="form-control" type="text" name="type">
            <label for="price" class="mt-1">Ár</label>
            <input class="form-control" type="text" name="price">
            <button class="btn btn-primary mt-3" type="submit">Küldés</button>
        </form>
    </div>
</div>
@endsection
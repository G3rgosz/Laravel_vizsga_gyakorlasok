@extends("layouts.master")

@section("content")
<div class="row justify-content-center">
    <div class="col-xl-3 col-lg-4 col-md-5 col-sm-6 ">
        <form class="form-control mt-3 p-3" action="/store-car" method="post">
        @csrf
            <label for="plate">Rendszám</label>
            <input class="form-control" type="text" name="plate">
            <label for="brand" class="mt-1">Márka</label>
            <input class="form-control" type="text" name="brand">
            <label for="color" class="mt-1">Szín</label>
            <input class="form-control" type="text" name="color">
            <label for="price" class="mt-1">Ár</label>
            <input class="form-control" type="text" name="price">
            <button class="btn btn-outline-primary mt-3" type="submit">Küldés</button>
        </form>
    </div>
</div>
@endsection
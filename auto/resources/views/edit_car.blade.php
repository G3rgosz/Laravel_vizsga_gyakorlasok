@extends("layouts.master")

@section("content")
<div class="row">
    <div class="col-lg-3 offset-lg-3">
        <form class="form-control" action="/update-car" method="post">
        @csrf
            <label for="plate">Rendszám</label>
            <input class="form-control" type="text" name="plate" value="{{ $car->plate }}">
            <label for="brand">Márka</label>
            <input class="form-control" type="text" name="brand" value="{{ $car->brand }}">
            <label for="color">Szín</label>
            <input class="form-control" type="text" name="color" value="{{ $car->color }}">
            <label for="price">Ár</label>
            <input class="form-control" type="text" name="price" value="{{ $car->price }}">
            <button class="btn btn-outline-primary" type="submit">Küldés</button>
        </form>
    </div>
</div>
@endsection
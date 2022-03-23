@extends("layouts.master")

@section("content")
<div class="container">
    <div class="row">
        <div class="col-6">
            <form action="">
                <select name="color" id="">
                    <option selected>Szín</option>
                    <option>Kék</option>
                    <option>Sárga</option>
                    <option>Piros</option>
                </select>
                <button class="btn btn-outline-info" type="submit">Keresés</button>
            </form>
        </div>
        <div class="col-6">
            <a href="/register">Regisztráció</a>
            <a href="/login">Bejelentkés</a>
            <a href="/logout">Kijelentkezés</a>
        </div>
    </div>
    <div class="row">
        <div class="col-8">
            <table class="table table-stripped">
                <thead>
                    <th scope="col">Id</th>
                    <th scope="col">Rendszám</th>
                    <th scope="col">Márka</th>
                    <th scope="col">Szín</th>
                    <th scope="col">Ár</th>
                    <th scope="col">Művelet</th>
                </thead>
                <tbody>
                    @foreach($cars as $car)
                        <tr>
                            <td>{{ $car->id }}</td>
                            <td>{{ $car->plate }}</td>
                            <td>{{ $car->brand }}</td>
                            <td>{{ $car->color }}</td>
                            <td>{{ $car->price }}</td>
                            <td>
                                <a class="btn btn-outline-primary btn-sm" href="/edit-car/{{ $car->id }}">Szerkesztés</a>
                                <a class="btn btn-outline-danger btn-sm" href="/delete-car/{{ $car->id }}">Törlés</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="col-2">
            <a class="btn btn-outline-primary" href="/new-car">Új autó</a>
        </div>
    </div>
</div>
@endsection
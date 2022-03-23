@extends("layouts.master")

@section("content")
<div class="container">
    <div class="row">
        <div class="col-8">
            <table class="table table-stripped">
                <thead>
                    <th scope="col">Id</th>
                    <th scope="col">Rendszám</th>
                    <th scope="col">Márka</th>
                    <th scope="col">Szín</th>
                    <th scope="col">Ár</th>
                </thead>
                <tbody>
                    {{-- @foreach($cars as $car)
                        <tr>
                            <td>{{ $car->id }}</td>
                            <td>{{ $car->plate }}</td>
                            <td>{{ $car->brand }}</td>
                            <td>{{ $car->color }}</td>
                            <td>{{ $car->price }}</td>
                        </tr>
                    @endforeach --}}
                </tbody>
            </table>
        </div>
        <div class="col-2">
            <a class="btn btn-outline-primary" href="/new-car">Új autó</a>
        </div>
    </div>
</div>
@endsection
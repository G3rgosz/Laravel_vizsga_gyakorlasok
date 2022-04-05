@extends("master")

@section("content")
<div class="container">
  <h2>Pékárúk lista</h2>
 
  <table class="table">
  <div class="row">
        <div class="col-4">
            <form action="">
                <select class="form-select" name="color" id="">
                    <option selected>Általános</option>
                    <option>Kenyerek</option>
                    <option>Péksütemények</option>
                </select>
                <button class="btn btn-info mt-2" type="submit">Keresés</button>
            </form>
        </div>
        <div class="col-8">
            <a class="btn btn-warning mb-1" href="/register">Regisztráció</a>
            <a class="btn btn-warning mb-1" href="/login">Bejelentkés</a>
            <a class="btn btn-danger mb-1" href="/logout">Kijelentkezés</a>
        </div>
    </div>
    <div class="row mt-2">
        <div class="col-lg-10 col-md-10 col-sm-12">
            <table class="table table-striped">
                <thead>
                    <th scope="col">Id</th>
                    <th scope="col">Név</th>
                    <th scope="col">Típus</th>
                    <th scope="col">Ár</th>
                </thead>
                <tbody>
                    @foreach($bakeries as $bakery)
                        <tr>
                            <td>{{ $bakery->id }}</td>
                            <td>{{ $bakery->name }}</td>
                            <td>{{ $bakery->type }}</td>
                            <td>{{ $bakery->price }}</td>
                            <td>
                                <a class="btn btn-primary btn-sm" href="/edit-bakery/{{ $bakery->id }}">Szerkesztés</a>
                                <a class="btn btn-danger btn-sm" href="/delete-bakery/{{ $bakery->id }}">Törlés</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <a class="btn btn-primary" href="/new-bakery">Új áru</a>
        </div>
    </div>
</div>
@endsection
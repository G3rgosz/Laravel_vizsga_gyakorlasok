@extends("master")

@section("content")
<div class="container">
  <h2>Ital lista</h2>
  <div class=row>
    <div class="col-6">
    <a class="btn btn-info" href="/">Vissza</a>
    </div>
    <div class="col-6">
      <a class="btn btn-primary" href="/register">Regisztráció</a>
      <a class="btn btn-primary" href="/login">Belépés</a>
      <a class="btn btn-primary" href="/logout">Kilépés</a>
    </div>
  </div>

  <table class="table">
    <thead>
      <tr>
        <th>Id</th>
        <th>Név</th>
        <th>Típus</th>
        <th>Ár</th>
      </tr>
    </thead>
    <tbody>
      @foreach( $drinks as $drink )
            <tr>
                <td>{{ $drink->id }}</td>
                <td>{{ $drink->name }}</td>
                <td>{{ $drink->type }}</td>
                <td>{{ $drink->price }}</td>
                <td>
                    <a class="btn btn-info" href="/edit/{{ $drink->id }}">Szerkesztés</a>
                    <a class="btn btn-danger" href="/delete/{{ $drink->id }}">Törlés</a>
                </td>
            </tr>
      @endforeach
    </tbody>
  </table>
  <a class="btn btn-primary" href="/new">Új</a>
</div>
@endsection
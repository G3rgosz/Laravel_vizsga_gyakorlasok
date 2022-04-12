@extends("master")

@section("content")
<h2>Köcsögök</h2>
<div class="row">
    <div class="col-4">
        <form action="search">
        <select class="form-select" name="type">
            <option value="Tányérok">Tányérok</option>
            <option value="Bögrék">Bögrék</option>
            <option value="valami">valami</option>
        </select>
        <button class="btn btn-info mt-2" type="submit">Keresés</button>
        </form>
    </div>
    <div class="col-8">
        <a class="btn btn-warning mb-1" href="/register">Regisztráció</a>
        <a class="btn btn-warning mb-1" href="/login">Bejelentkezés</a>
        <a class="btn btn-warning mb-1" href="/logout">Kijelentkezés</a>
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
      @foreach( $bastards as $bastard )
         <tr>
           <td>{{ $bastard->id }}</td>
           <td>{{ $bastard->name }}</td>
           <td>{{ $bastard->type }}</td>
           <td>{{ $bastard->price }}</td>
           <td>
               <a class="btn btn-primary btn-sm" href="edit-bastard/{{$bastard->id}}">Szerkesztés</a>
               <a class="btn btn-danger btn-sm" href="delete-bastard/{{$bastard->id}}">Törlés</a>
           </td>
         </tr>
      @endforeach
    </tbody>
  </table>
  <a class="btn btn-primary" href="/new-bastard">Új áru</a>
@endsection
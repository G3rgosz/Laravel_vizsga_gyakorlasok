@extends("master")

@section("content")
<form action="/update-bastard" method="post">
@csrf
@method("PUT")
<input type="hidden" name="id" value="{{$bastard->id}}">
  <div class="mb-3">
    <label for="name" class="form-label">Név</label>
    <input type="text" class="form-control" id="name" name="name" value="{{$bastard->name}}">
  </div>
  <div class="mb-3">
    <label for="type" class="form-label">Típus</label>
    <input type="text" class="form-control" id="type" name="type" value="{{$bastard->type}}">
  </div>
  <div class="mb-3">
    <label for="price" class="form-label">Ár</label>
    <input type="text" class="form-control" id="price" name="price" value="{{$bastard->price}}">
  </div>

  <button type="submit" class="btn btn-primary">küldés</button>
</form>
@endsection
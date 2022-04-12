@extends("master")

@section("content")
<form action="store-bastard" method="post">
@csrf
  <div class="mb-3">
    <label for="name" class="form-label">Név</label>
    <input type="text" class="form-control" id="name" name="name">
  </div>
  <div class="mb-3">
    <label for="type" class="form-label">Típus</label>
    <input type="text" class="form-control" id="type" name="type">
  </div>
  <div class="mb-3">
    <label for="price" class="form-label">Ár</label>
    <input type="text" class="form-control" id="price" name="price">
  </div>

  <button type="submit" class="btn btn-primary">küldés</button>
</form>
@endsection
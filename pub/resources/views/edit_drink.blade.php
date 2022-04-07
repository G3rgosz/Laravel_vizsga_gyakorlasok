@extends("master")

@section("content")
<div class="container">
  <form action="/update" method="post">
  @csrf
  @method("PUT")
  <input class="form-control" type="hidden" name="id" value="{{ $drink->id }}">
    <div class="mb-3">
      <label for="name" class="form-label">Név</label>
      <input type="text" class="form-control" id="name" name="name" value="{{$drink->name}}">
    </div>
    <div class="mb-3">
      <label for="type" class="form-label">Típus</label>
      <input type="text" class="form-control" id="type" name="type" value="{{$drink->type}}">
    </div>
    <div class="mb-3">
      <label for="price" class="form-label">Ár</label>
      <input type="text" class="form-control" id="price" name="price" value="{{$drink->price}}">
    </div>
    <button type="submit" class="btn btn-primary">Küldés</button>
  </form>
</div>

@endsection
@extends('layouts.app')
@section('content')
@if ($errors->any())
  <div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
        @endforeach
    </ul>
  </div><br/>
@endif
<form action="{{route('admin.posts.store')}}" method="post">
  @csrf

  <div class="form-group">
    <label for="title">Titolo</label>
    <input type="text" name="title" id="title" class="form-control" placeholder="Inserisci titolo" aria-describedby="helpId" required>
    <small id="helpId" class="text-muted">Post's Title</small>
  </div>
 
  <div class="form-group">
    <label for="body">Body</label>
    <textarea class="form-control" name="body" id="body" rows="3" required></textarea>
    <small class="text-muted">Body's Post</small>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection
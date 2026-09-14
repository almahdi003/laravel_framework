@extends('layouts.app')
@section('title') Create @endsection
@section ('content')

<form method="POST" action="{{route('posts.store')}}" class="container" style="max-width: 80%; margin-top: 20px;">

  <div class="mb-3">
    <label for="title" class="form-label">Title</label>
    <input type="text" class="form-control" id="title" placeholder="Enter title">
  </div>

  <div class="mb-3">
    <label for="description" class="form-label">Description</label>
    <textarea class="form-control" id="description" rows="3" placeholder="Enter description"></textarea>
  </div>

  <div class="mb-3">
    <label class="form-label" for="email">Email</label>
    <input type="email" class="form-control" id="email" placeholder="Enter email">
  </div>

  <button type="submit" class="btn btn-primary">Upload</button>

</form>
@endsection
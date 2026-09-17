@extends('layouts.app')
@section('title') Edit Post @endsection
@section ('content')


<form method ="POST" action="{{route("posts.update", 2)}}" class="container" style="max-width: 80%; margin-top: 20px;">

  @csrf
  @method('PUT');
  <div class="mb-3">
    <label for="title" class="form-label">Title</label>
    <input type="text" class="form-control" id="title" placeholder="Enter The Title" name="title">
  </div>

  <div class="mb-3">
    <label for="description" class="form-label">Description</label>
    <textarea class="form-control" id="description" rows="3" placeholder="Enter Description" name="description"></textarea>
  </div>

  <div class="mb-3">
    <label class="form-label" for="posted_by">Posted By</label>
    <input type="text" class="form-control" id="posted_by" placeholder="Enter Your Name" name="posted_by">
  </div>

  <button type="submit" class="btn btn-primary">Edit</button>

</form>
@endsection
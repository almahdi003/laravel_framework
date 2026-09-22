@extends('layouts.app')
@section('title') Create @endsection
@section ('content')


<form method="POST" action="{{route('posts.store')}}" class="container" style="max-width: 80%; margin-top: 20px;">

{{-- @csrf --}}
  <div class="mb-3">
    <label for="title" class="form-label">Title</label>
    <input type="text" class="form-control" id="title" placeholder="Enter The Title" name="title">
  </div>

  <div class="mb-3">
    <label for="description" class="form-label">Description</label>
    <textarea class="form-control" id="description" rows="3" placeholder="Enter Description" name="description"></textarea>
  </div>

  <div class="mb-3">
      <label  class="form-label">Post Creator</label>
      <select name="posted_by" class="form-control">
      @foreach ($users as $user)
        <option value="{{$user->id}}"> {{$user->name}}</option>
      @endforeach
      </select>
  </div>

  <button type="submit" class="btn btn-primary">Upload</button>

</form>
@endsection


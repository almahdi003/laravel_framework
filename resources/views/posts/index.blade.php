@extends('layouts.app')
@section('title') Index @endsection
@section('content')

<div class="container mb-4 d-flex justify-content-center">
    <a href= "{{route('posts.create')}}" type="button"  class="btn btn-sm btn-success">Create Post</a>
</div>

<div class="container md-4">
        <div class="table-responsive">
            <table class="table table-striped table-hover align-middle">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Title</th>
                        <th scope="col">Posted By</th>
                        <th scope="col">Created At</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody class="table-group-divider">
                    @foreach ($posts as $post)
                    <tr>
                        <td>{{$post->id}}</td>       {{-- <td>{{$post["id"]}}</td>  --}}
                        <td>{{$post->title}}</td>    {{-- <td>{{$post["title"]}}</td> --}}
                        <td>{{$post->user ? $post->user->name : "Not Found"}}</td>
                        {{-- @dd($post->created_at->format('Y-m')) --}}
                        <td>{{$post->created_at->format('y-m-d')}}</td>
                        <td>
                            <a href="{{route('posts.show', $post->id)}}"  class="btn btn-sm btn-success">View</a>
                            <a href="{{route('posts.edit', $post->id)}}" class="btn btn-sm btn-primary">Edit</a>
                            <form style="display: inline"  method="POST" action="{{route('posts.destroy',$post->id)}}">
                                @method("DELETE")
                                <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
                
            </table>
        </div>
</div>
@endsection
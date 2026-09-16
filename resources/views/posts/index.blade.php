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
                @foreach ($Posts as $post)
                    <tr>
                        <td>{{$post["ID"]}}</td>
                        <td>{{$post["Title"]}}</td>
                        <td>{{$post["Posted By"]}}</td>
                        <td>{{$post["Created At"]}}</td>
                        <td>
                            <a href="{{route('posts.show', $post['ID'])}}"  class="btn btn-sm btn-success">View</a>
                            <a href="{{route('posts.edit', $post['ID'])}}" class="btn btn-sm btn-primary">Edit</a>
                            <a type="button" class="btn btn-sm btn-danger">Delete</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
                
            </table>
        </div>
</div>
@endsection
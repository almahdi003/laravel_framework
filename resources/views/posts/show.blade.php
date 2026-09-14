@extends('layouts.app')

@section('title') Show @endsection

@section('content')

    <div class="container mb-4">
        <div class="card">
            <h5 class="card-header">Post Info</h5>
            <div class="card-body">
                <h5 class="card-title">Title : {{$post['Title']}} </h5>
                <p class="card-text">Description : {{$post['Description']}} </p>
            </div>
        </div>

        <div class="card" style="margin-top: 20px;">
            <h5 class="card-header">Post Creator Info</h5>
            <div class="card-body">
                <h5 class="card-title">Name : {{$user['Name']}} </h5>
                <p class="card-text">Email :  {{$user['Email']}}</p>
                <p class="card-text">Created At :  {{$user['Created At']}}</p>
            </div>
        </div>
    </div>

@endsection
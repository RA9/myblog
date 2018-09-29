@extends('layouts.app')


@section('content')
    <a href="/posts" class="btn btn-default">Go Back</a>
    <h1>{{$post->title}}</h1>
    <img width="100%" src="/storage/cover_images/{{$post->cover_image}}" alt="" class="img-responsive">
    <small>Written on {{$post->created_at}} by {{$post->user->name}}</small>
        <div>
            {!!$post->body!!}
        </div>
@endsection
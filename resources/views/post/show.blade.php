@extends('layout/main')
@section('title','Detail')
@section('content')
<div class="container text-center" style="width: 500px; margin: auto">
    <p>Title</p>
    <h1>{{ $post->title }}</h1>
    <br>
    <p>by</p>
    <h3>{{ $post->author }}</h3>
    <br><br><br><br>
    <p>Release Year</p>
    <h3>{{ $post->year }}</h3>
    <br>
    <p>Page</p>
    <h3>{!! nl2br($post->page) !!} sheets</h3>
    <br><br><br><br><br><br><br>
    <p class="text text-secondary">Published at - {{ $post->created_at->format('D M,Y') }}</p>

</div>
@endsection

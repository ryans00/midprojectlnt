@extends('layout/main')
@section('title','Edit')
@section('content')
    <div class="container">
        <form action="{{ route('post/update',$post) }}" style="width: 500px; margin: auto; background-color:whitesmoke" method="POST">
            @csrf
            @method('PATCH')
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" id="title" placeholder="Title" value="{{ $post->title }}">
            @error('title')
            <div id="validationServer03Feedback" class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror

            <label for="author" class="form-label">Author</label>
            <input type="text" class="form-control @error('author') is-invalid @enderror" name="author" id="author" placeholder="author" value="{{ $post->author }}">
            @error('author')
            <div id="validationServer03Feedback" class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror


            <div class="row">
                <div class="col-4">
                    <label for="page" class="form-label">Page</label>
                    <input type="text" class="form-control @error('page') is-invalid @enderror" name="page" id="page" placeholder="page" value="{{ $post->page }}">
                    @error('page')
                    <div id="validationServer03Feedback" class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="col-4">
                    <label for="year" class="form-label">Year</label>
                    <input type="text" class="form-control @error('year') is-invalid @enderror" name="year" id="year" placeholder="year" value="{{ $post->year }}">
                    @error('year')
                    <div id="validationServer03Feedback" class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <div class="col-3">
                    <label for="form-label" class="text-light">Post</label>
                    <button type="submit" class="btn btn-primary form-group">Submit</button>
                </div>
            </div>
        </form>
    </div>
@endsection

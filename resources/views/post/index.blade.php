@extends('layout/main')
@section('title','Library')
@section('content')
<div class="text-center" style="background-color:#4e4234">
    <h3 class="text-light">Library</h3>
</div>

<div class="container">
    @foreach ($posts as $post)
    <div class="col-3">

        <div class="card border-dark mb-3" style="width: 17rem;">
            <div class="card-body">
              <h5 class="card-title">{{ $post->title }} </h5>
              <h6 class="card-subtitle">{{ $post->author }}</h6>
              <h4><span class="badge bg-secondary text-light">{{ $post->year }}</span></h4>
                <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                    <a href="{{ route('post/show',$post) }}" class="btn btn-primary btn-sm">View</a>
                    <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                        <form action="{{ route('post/delete',$post) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-outline-danger btn-sm">delete</button>
                        </form>
                    </div>
                    <a href="{{ route('post/edit',$post) }}" class="btn btn-outline-success btn-sm">Edit</a>
                </div>
            </div>
        </div>
    </div>
    @endforeach

    </div>

    <div class="container">

        <div class="card text-center">
            <div class="card-header">
              Quote
            </div>
            <div class="card-body">
              <blockquote class="blockquote mb-0">
                <p>“Books are the quietest and most constant of friends; they are the most accessible and wisest of counselors, and the most patient of teachers.”</p>
                <footer class="blockquote-footer"><cite title="Source Title">Charles W. Eliot</cite></footer>
              </blockquote>
            </div>
          </div>
    </div>
@endsection

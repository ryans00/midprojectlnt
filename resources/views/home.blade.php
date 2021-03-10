@extends('layout/main')
@section('title','Home')
@section('content')
<div class="text-center text-light" style="background-color:#fdf1e3">

</div>

<div class="container" style="background-color:#4e4234">
    <div class="text-center text-light">
        <h6 style="color:rgb(182, 168, 150)">Built by</h6>
        <h3>
            Ryan Runako Sutantyo
        </h3>
        <h5>
            2440027120/BN20120
        </h5>
    </div>
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active opacity-5">
            <img src="/images/bookwp2rev.jpg" class="d-block w-100" alt="MISSING JPG">
          </div>
          <div class="carousel-caption d-none d-md-block">
            <h5>Find your favorite book!</h5>
            <p></p>
            <a href="{{ route('post/index') }}" class="btn btn-primary btn-xl">Get started</a>
          </div>
        </div>
      </div>
</div>
@endsection

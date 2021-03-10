<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--bootstrap css-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="css/custom-bg.css">
    <title>@yield('title')</title>

</head>
<body>
    @if (Session::has('success'))
      <div class="container">
          <div class="alert alert-success" role="alert">
            {{ session::get('success') }}
        </div>
      </div>
      @endif

    <div style="background-color: #4e4234">
        <div class="container">
            <nav class="navbar sticky-top navbar-expand-lg navbar-dark" style="background-color: #4e4234">
                <a class="navbar-brand" href="{{ route('home') }}">Bookshelf</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                  <ul class="navbar-nav">
                    <li class="nav-item {{ Request::is('/') ? 'active' : ''}}">
                      <a class="nav-link" href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="nav-item {{ Request::is('post') ? 'active' : ''}}">
                      <a class="nav-link" href="{{ route('post/index') }}">Library</a>
                    </li>
                    <li class="nav-item {{ Request::is('post/create') ? 'active' : ''}}">
                      <a class="nav-link" href="{{ route('post/create') }}">Create Post</a>
                    </li>
                  </ul>
                </div>
            </nav>
        </div>
    </div>


      @yield('content')

      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>
</html>

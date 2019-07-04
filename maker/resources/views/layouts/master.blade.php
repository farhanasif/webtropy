<!doctype html>
<html lang="{{ app()->getLocale() }}">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://bootswatch.com/4/superhero/bootstrap.min.css">
    <link rel="stylesheet" href="https://bootswatch.com/_assets/css/custom.min.css">
    <title>Maker!</title>
    <style>
        .img-circle {
            border-radius: 50%!important;
            float: left;
            margin-top: -5px;
            margin-right: 5px;
            height: 29px;
            display: inline-block;
        }
    </style>
  </head>
  <body>
  <div class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark">
      <div class="container">
        <a href="../" class="navbar-brand">Maker</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="../help/">Help</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="https://blog.bootswatch.com">Blog</a>
            </li>
            <li class="nav-item">
                <button class="btn btn-primary my-2 my-sm-0" type="submit">Write a new post!!</button>
            </li>
          </ul>
          <ul class="nav navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="https://wrapbootstrap.com/?ref=bsw" target="_blank">Login</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="https://wrapbootstrap.com/?ref=bsw" target="_blank">Register</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" id="download">
                <img alt="" class="img-circle" src="http://demo.crm.entertechbd.com/assets/layouts/layout3/img/avatar9.jpg" />
                <span class="username username-hide-on-mobile"> username </span>
                <i class="fa fa-angle-down"></i></span></a>
              <div class="dropdown-menu" aria-labelledby="download">
                <a class="dropdown-item" target="_blank" href="https://jsfiddle.net/bootswatch/9n4nxnqy/">Profile</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="../4/superhero/bootstrap.min.css" download>Log out</a>
              </div>
            </li>
          </ul>

        </div>
      </div>
    </div>
    <div class="container">
        @yield('content')
    </div>
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
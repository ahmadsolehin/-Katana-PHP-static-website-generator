<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="description" content="@yield('pageDescription')">
    <title>{{$sitename}} @yield('pageTitle')</title>
    <link rel="stylesheet" href="http://bootswatch.com/flatly/bootstrap.min.css">
    <link rel="stylesheet" href="@url('assets/css/all.css')">
  </head>
  <body>
    <nav class="navbar navbar-inverse">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">{{$sitename}}</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li><a href="@url('/')">Home</a></li>
            <li><a href="@url('blog')">Blog</a></li>
            <li><a href="@url('about')">About</a></li>
            <li><a href="@url('contact')">Contact</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <div class="container">
      <div class="row">
        <div class="col-md-8 col-sm-8">
          @yield('body')
        </div>
        <div class="col-md-4 col-sm-4">
          @include('_includes.sidebar')
        </div>
      </div>
    </div>

  </body>
</html>

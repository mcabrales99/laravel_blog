<!DOCTYPE html>
<html lang="en">
<head>
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
<style type="text/css">

        #top-heading    {
            padding-left: 200px;
        }
        
        #navsearch {
            padding-top: 10px;
        }
      
</style>

</head>
<body>
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="/posts">Mauro_Blog</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="navsearch">
        <ul class="nav navbar-nav">
        @if (Auth::check())
        <li><a href="/posts/create">Create a Post!</a></li>
        @endif
        <li class="form-group">
        <li>{{ Form::open(['method'=> 'GET', 'action' => 'PostsController@search'])}}</li>
        <li><input id= type="text" class="form-control" placeholder="Search Blog" name="search"></li>
        <li><button id= 'navbutton' type="submit" class="btn btn-default">Submit</button></li>
        {{Form::close()}}
        </ul>
        @if (Auth::check())
            <ul class="nav navbar-nav navbar-right">
            <li><a href="/logout">Logout</a></li>
            </ul>
        @else
            <ul class="nav navbar-nav navbar-right">
            <li><a href="/login">Login</a></li>
            </ul>
        @endif
   </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<div>
    @if (Session::has('successMessage'))
        <div class="alert alert-success">{{{ Session::get('successMessage') }}}</div>
    @endif
    @if (Session::has('errorMessage'))
        <div class="alert alert-danger">{{{ Session::get('errorMessage') }}}</div>
    @endif

<h3 id="top-heading">@yield('top-heading')</h3>
</div>
<h1>@yield('name')</h1>
<br>
<div>@yield('content')</div>
</body>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</html>
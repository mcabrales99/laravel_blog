@extends('layouts.master')

@section('title')
Index page
@stop

@section('content')
<h1 class= 'container'>Posts</h1>
    @foreach($posts as $post)
<div class= 'container'>
    <h2><a href="{{{ action('PostsController@show', $post->id)}}}">{{{ $post->title }}}</a></h2>
    <p>{{{ $post->content }}}</p>
    <h5><p>{{ $post->created_at->setTimezone('America/Chicago')->format('l, F jS Y @ h:i:s A'); }}</p></h5>
</div>
@endforeach
<h2>{{ $posts->links() }}</h2>
</body>
@stop
</html>
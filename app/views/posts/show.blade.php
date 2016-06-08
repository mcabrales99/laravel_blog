@extends('layouts.master')


@section('title')
Show page
@stop
@section('content')
   
        <div class= 'container'>
        <h1 class= 'container'>Your Posts</h1>
            <h2>{{{ $post->title }}}</h2>
            <p>Written by: {{{ $post->user->email }}}</p>
            <p>{{{ $post->content }}}</p>


            @if (Auth::check())
           <button><a href="{{action('PostsController@edit', $post->id) }}">Edit here</a></button>
            {{Form::open(['method' => 'DELETE', 'action' => ['PostsController@destroy', $post->id]])}}
           <button type='submit'>Delete this post</button>
            {{Form::close()}}
         @endif
        
        </div>

        
@stop

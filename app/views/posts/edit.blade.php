@extends('layouts.master')


@section('title')
Edit page
@stop
@section('name')
<h1>Edit a Blog Post!</h1>
@section('content')

{{ Form::open(array('action' =>['PostsController@update', $post->id], 'method' => 'PUT')) }}

{{ Form::label('title', 'Title') }}
{{ Form::text('title', null) }}
{{ Form::label('content', 'Content') }}
{{ Form::textarea('content', null) }}
{{ Form::submit('submit') }}
{{ Form::close() }}
@stop


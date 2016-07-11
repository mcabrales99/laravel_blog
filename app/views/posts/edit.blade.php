@extends('layouts.master')


@section('title')
Edit page
@stop
@section('name')
@section('content')
<h1>Edit a Blog Post!</h1>
{{ Form::open(array('action' =>['PostsController@update', $post->id], 'method' => 'PUT')) }}

{{ Form::label('title', 'Title') }}
{{ Form::text('title', null) }}
{{ Form::label('content', 'Content') }}
{{ Form::text('content', null) }}
{{ Form::submit('submit') }}
{{ Form::close() }}
@stop


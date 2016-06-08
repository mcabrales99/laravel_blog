@extends('layouts.master')


@section('title')
Create page
@stop
@section('name')

@section('content')
<h1>Create a Blog Post!</h1>

{{ Form::open(array('action' =>'PostsController@store')) }}

{{ Form::label('title', 'Title') }}
{{ Form::text('title', null) }}
{{ Form::label('content', 'Content') }}
{{ Form::text('content', null) }}
{{ Form::submit('submit') }}
{{ Form::close() }}
@stop



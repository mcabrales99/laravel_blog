@extends('layouts.master')
@section('content')
<section class="loginform cf">
<form name="login" action="{{action ('HomeController@doLogin')}}" method="POST" accept-charset="utf-8">
    {{ Form::token() }}
    <div class='container'>
        <label for="usermail">Email</label>
        <input type="email" name="email" placeholder="yourname@email.com" required>
        <label for="password">Password</label>
        <input type="password" name="password" placeholder="password" required>
        <input type="submit" value="Login">
    </div>

        
    
</form>
</section>
@stop
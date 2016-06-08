@extends('layouts.master')
@section('content')
<section class="loginform cf">
<form name="login" action="{{action ('HomeController@doLogin')}}" method="POST" accept-charset="utf-8">
    {{ Form::token() }}
    <ul>
        <li><label for="usermail">Email</label>
        <input type="email" name="email" placeholder="yourname@email.com" required></li>
        <li><label for="password">Password</label>
        <input type="password" name="password" placeholder="password" required></li>

        <li>
        <input type="submit" value="Login"></li>
    </ul>
</form>
</section>
@stop
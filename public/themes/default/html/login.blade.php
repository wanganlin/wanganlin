@extends('frontend::layouts.auth')

@section('content')
<form class="form-signin">
    {!! csrf_field() !!}
    <label for="inputEmail" class="sr-only">Email</label>
    <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
    <label for="inputPassword" class="sr-only">Password</label>
    <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
    
    <button class="btn btn-lg btn-primary btn-block" type="submit">登 录</button>
</form>
@endsection

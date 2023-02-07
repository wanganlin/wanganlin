@extends('layouts.auth')

@section('content')
    <form class="form-signin" method="post">
        {!! csrf_field() !!}
        <label for="inputEmail" class="sr-only">用户名</label>
        <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
        <label for="inputPassword" class="sr-only">密 码</label>
        <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
        <button class="btn btn-lg btn-primary btn-block" type="submit">登 录</button>
    </form>
@endsection

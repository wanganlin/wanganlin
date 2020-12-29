@extends('layouts.auth')

@section('content')
<form class="form-signin">
    {!! csrf_field() !!}
    <div class="text-center">
      <img class="mb-4" src="https://getbootstrap.com/docs/4.5/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
      <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
    </div>
    <label for="inputEmail" class="sr-only">Email</label>
    <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
    <label for="inputPassword" class="sr-only">Password</label>
    <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
    
    <button class="btn btn-lg btn-primary btn-block" type="submit">登 录</button>
</form>
@endsection

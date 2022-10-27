@extends('layouts.auth-master')

@section('content')
    <head>
        <title>Register</title>

        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    </head>

    <html class="container p-3">

        <div class="panel panel-default">
            <div class="panel-heading">Registration form</div>
            <div class="panel-body">

    <form method="post" action="{{ route('register.perform') }}">
@csrf
        <div class="text-center">
            <img class="mb-4" src="{!! url('https://cdn-icons-png.flaticon.com/512/5087/5087579.png') !!}" alt="" width="250" height="250">
        </div>

        <h1 class="text-center h3 mb-3 fw-normal">Register</h1>

        <div class="mb-3">
            <input type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="name@example.com" required="required" autofocus>
            @if ($errors->has('email'))
                <span class="text-danger text-left">Mail adresi zaten kullanımda!</span>
            @endif
        </div>

        <div class="mb-3">
            <input type="text" class="form-control" name="username" value="{{ old('username') }}" placeholder="Username" required="required" autofocus>
            @if ($errors->has('username'))
                <span class="text-danger text-left">Kullanıcı adı zaten kullanımda!</span>
            @endif
        </div>

        <div class="mb-3">
            <input type="password" class="form-control" name="password" value="{{ old('password') }}" placeholder="Password" required="required">
            @if ($errors->has('password'))
                <span class="text-danger text-left">Şifre onayı eşleşmiyor!</span>
            @endif
        </div>

        <div class="mb-3">
            <input type="password" class="form-control" name="password_confirmation" value="{{ old('password_confirmation') }}" placeholder="Confirm Password" required="required">
            @if ($errors->has('password_confirmation'))
                <span class="text-danger text-left">Şifre onayı ile şifre eşleşmelidir!</span>
            @endif
        </div>

        <button class="w-100 btn btn-lg btn-primary" type="submit">Register</button>

        @include('auth.partials.copy')
    </form>
            </div>
        </div>

@endsection

@extends('layouts.auth-master')

@section('content')
    <head>
        <title>Login</title>

        <!-- Latest compiled and minified CSS -->
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

        <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    </head>

    <div class="container login-module p-3">
        <div class="panel panel-default">
            <div class="panel-heading">Login page</div>
            <div class="panel-body">
                <form method="post" action="{{ route('login.perform') }}">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
                    <div class="text-center">
                        <img class="mb-4" src="{!! url('https://cdn-icons-png.flaticon.com/512/5087/5087579.png') !!}" alt="" width="250" height="250">
                    </div>
                    <h1 class="h3 mb-3 text-center fw-normal">Login</h1>
                    @include('layouts.partials.messages')

                    <div class="mb-3">
                        <input type="text" class="form-control" name="username" value="{{ old('username') }}"
                               placeholder="Username" required="required" autofocus>
                        @if ($errors->has('username'))
                            <span class="text-danger text-left">{{ $errors->first('username') }}</span>
                        @endif
                    </div>
                    <div class="mb-3">
                        <input type="password" class="form-control" name="password" value="{{ old('password') }}"
                               placeholder="Password" required="required">
                        @if ($errors->has('password'))
                            <span class="text-danger text-left">{{ $errors->first('password') }}</span>
                        @endif
                    </div>
                    <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>

                    @include('auth.partials.copy')
                </form>
            </div>
        </div>
    </div>
@endsection


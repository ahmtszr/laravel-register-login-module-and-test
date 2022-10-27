@extends('layouts.app-master')

@section('content')
    <head>
        <title>Registration</title>

        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

        <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    </head>
    <div class="bg-light p-5 rounded">
        @auth
            <h1 class="text-center">ANA SAYFA</h1>
        <br>
        <br>
            <br>
            <br>
            <p class="lead">HOŞGELDİNİZ!</p>
            <p class="lead">Bu bölüme yalnızca kimliği doğrulanmış kullanıcılar erişebilir.</p>
        @endauth

        @guest
            <h1>Anasayfa</h1>
            <p class="lead">Kısıtlanmış verileri görmek için lütfen giriş yapın.</p>
        @endguest
    </div>
@endsection

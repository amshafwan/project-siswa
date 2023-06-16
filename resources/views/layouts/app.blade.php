<!DOCTYPE html>
<html>

<head>
    <title>@yield('title')</title>

        <link href="{{ asset('bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

        <script src="{{ asset('bootstrap/js/bootstrap.bundle.min.js')}}"></script>

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
    .body {
        padding: 6px;
        border-bottom: 2px solid red;
    }

    span {
        color: aqua;
    }
    </style>

</head>

<body>

        @include('layouts.app.header')


    <div class="container my-4">

        @yield('content')

            

        @include('layouts.app.footer')





<script src="{{ asset('bootstrap/js/bootstrap.bundle.min.js')}}"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
</body>

</html>
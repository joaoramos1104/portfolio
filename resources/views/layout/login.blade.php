<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:500,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Muli:400,400i,800,800i" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css2?family=Crimson+Pro" rel="stylesheet" type="text/css" />

    <link rel="stylesheet" href="{{ url(mix('assets/bootstrap/bootstrap.css')) }}">
    <script src="{{ url(mix('assets/bootstrap/bootstrap.bundle.js')) }}"></script>

    <link href="{{ asset('/assets/css/login.css') }}" rel="stylesheet">

    <link href="{{ url(mix('assets/fontawesome/fontawesome.css')) }}" rel="stylesheet">
    <script defer src="{{ url(mix('assets/fontawesome/fontawesome.js')) }}"></script>

</head>
<body>


@hasSection('content')
    @yield('content')
@endif

<script src="{{ url(mix('assets/jquery/jquery.min.js')) }}"></script>

</body>
</html>

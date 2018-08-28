<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ URL::asset('css/chosen.css') }}"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}"/>
    <title>{{ $title }}</title>
</head>
<body>
<div class="container">
    <h1 class="text-center">{{ $pagetitle }}</h1>
    @yield('content')
</div>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"></script>
<script type="text/javascript" src="{{ URL::asset('js/bootstrap.bundle.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/util.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/tooltip.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/chosen.jquery.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/common.js') }}"></script>
</body>
</html>
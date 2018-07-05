<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    <link rel="icon" href="{{ asset ('img/favicon.png') }}">
    <link rel="stylesheet" href="{{ asset ('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset ('css/styles.css') }}">
</head>

<body>

    @include('layout.nav')



    @yield('content')


    <div class="empty-space"></div>

<script src="{{ asset ('js/jquery-3.2.1.min.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="{{ asset ('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/script.js') }}"></script>

</body>

</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('titre')</title>
</head>
<body>
    @yield('content')
    <nav>
        <a href="{{('/')}}">Index</a><br>
        <a href="{{('services')}}">Services</a><br>
        <a href="{{('about')}}">About</a><br>
        <a href="{{('pricing')}}">Pricing</a><br>
        <a href="{{('contact')}}">Contact</a><br>
        <a href="{{('details')}}">Details</a><br>
        <a href="{{('portfolio')}}">Portfolio</a>
    </nav>
</body>
</html>
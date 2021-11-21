<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
    @include('include.head')
    </head>
    <body class="antialiased">
        
    <section class="container">
    <div class="jumbotron">
        <h1 class="display-4">Welcome {{ $username }}</h1>
        <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
        <hr class="my-4">
        <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
        <p class="lead">
            <a class="btn btn-primary btn-lg" href="{{ url('login') }}" role="button">Login Now</a>
        </p>
    </div>

    @include('include.foot')
    </body>
</html>

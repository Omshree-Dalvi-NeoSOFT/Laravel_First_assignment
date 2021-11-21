<!DOCTYPE html>
<html lang="en">
<head>
    @include('include.head')
</head>
<body>
    @include('include.nav')
    <section class="mt-4"></section>
    <section class="container row">
        <div class="col-md-4">
            @include('include.sidebar')
        </div>
        <div class="col-md-8">
            @yield('content')
        </div>
</secion>

    @include('include.foot')
</body>
</html>
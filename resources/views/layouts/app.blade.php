<!DOCTYPE html>
<html>
<head>
    <title>Тайтл страницы: @yield('title')</title>
</head>
@include('elems.header')
<body>

<aside>
    сайдбар @yield('sidebar')
</aside>
<main>
    @yield('content')
</main>
@include('elems.footer')
</body>
</html>
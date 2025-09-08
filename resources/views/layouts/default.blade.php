<!DOCTYPE html>
<html>

<head>
    <title> {{ $title }} </title>
    <meta name="description" content="@yield('meta_desc')">
    <meta name="keywords" content="@yield('meta_keywords')">


    @include('includes.head')
</head>

<body>

    @include('includes.header')
    @yield('content')
    @include('includes.footer')

</body>

</html>

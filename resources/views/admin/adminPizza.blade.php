<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    @include('css')
    {{--@include('css')--}}
    {{--@include('fonts')--}}
    {{--@include('meta')--}}
</head>
<body>
{{--@include('header')--}}

<h1>@yield('title')</h1>

@yield('admin')
{{--@include('footer')--}}
</body>
{{--@include('js')--}}
{{--@include('scripts')--}}
</html>
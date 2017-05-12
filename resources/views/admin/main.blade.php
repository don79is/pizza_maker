<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    @include('css')
    <meta name="csrf-token" content="{{ csrf_token() }}">
    {{--@include('css')--}}
    {{--@include('fonts')--}}
    {{--@include('meta')--}}
</head>
<body>
{{--@include('header')--}}

<h1>@yield('title')</h1>




@yield('content')




<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
@yield('html_script')
{{--@include('footer')--}}
</body>
{{--@include('js')--}}
{{--@include('scripts')--}}
</html>
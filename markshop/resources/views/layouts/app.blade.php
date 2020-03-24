<!DOCTYPE html>
<html lang="en">
<head>
    <title>markshop</title>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    @include('layouts.head')
    <script !src="">
        laravel_token = '{{@csrf_token()}}'
    </script>
</head>
<body>
@include('layouts.header')
{{--content--}}
@yield('content')
{{--end content--}}
@include('layouts.footer')
@include('layouts.script')

</body>
</html>

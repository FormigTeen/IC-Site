<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title', 'Home Page')</title>

    <!-- Fonts -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/all.css') }}">
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
</head>
<body>

    @include('includes.navbar.fixedBar')

    <div class="pusher">
        @section('content')
        @show
    </div>

    @section('scripts')
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="{{ asset('js/all.js') }}"></script>
    @show

</body>
</html>

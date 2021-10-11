<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel | @yield('title', 'Home')</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    </head>
    <body>
    @section('sidebar')
        <p>メインのサイドバー（共通部分）</p>
    @show
    
    <div id='container'>
        @yield('content')
    </div>

    @section('footer')
        <script src="app.js"></script>
    @show
    </body>
</html>

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://kit.fontawesome.com/d773f239a3.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="/css/app.css">
        <script src="/js/app.js" charset="utf-8"></script>
        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    </head>
    <body>
        <header>
          @include('header')
          @include('navbar')
        </header>
        <main>

        </main>
        <footer>

        </footer>
    </body>
</html>

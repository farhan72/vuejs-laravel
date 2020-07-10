<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel Vue | NIAGAHOSTER Landing Page</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="{{mix("/css/app.css")}}">
    </head>
    <body>
        <div id="app">
            <layout-component></layout-component>
        </div>
        <script src="{{mix('/js/app.js')}}"></script>
    </body>
</html>

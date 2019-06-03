<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Gazzar</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
                </head>
    <body>
        <div id="app">
            <div class="container">
                <nav-bar></nav-bar>
                <week-selection></week-selection>
                <week-selection-card :vins='{{ $vins }}'></week-selection-card>
                <week-selection-producer></week-selection-producer>
                <history-bar></history-bar>
                <footer-bar></footer-bar>

            </div>
        </div>
            <script src="js/app.js"></script>
    </body>
</html>

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Home</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">


</head>

<body>
    <h1>Hello World</h1>
    <p>oggi è {{$day}}</p>
    <h2>Quanti giorni mancano alla fine del corso? scoprilo subito <a href="{{route('page')}}">Clicca qui</a></h2>
</body>

</html>
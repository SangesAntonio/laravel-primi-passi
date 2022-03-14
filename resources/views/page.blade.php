<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>page</title>
</head>

<body>
    @if($numb_days)
    <h1>Giorni alla fine del corso : {{$numb_days}}</h1>
    @else
    <h1>Il corso è finito </h1>
    @endif
    Cosa abbiamo imparato?
    <ul>
        @foreach($languages as $language)
        <li>{{$language}}</li>
        @endforeach
    </ul>
</body>

</html>
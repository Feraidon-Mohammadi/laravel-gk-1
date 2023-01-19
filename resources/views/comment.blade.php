<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Variable ausgeben</title>
</head>
<body>

    {{--Variablen 1. ausgeben und 2. interpretieren--}}
    <p>1.{{ $kommentar}}</p>
    <p>2.{!! $kommentar!!}</p>
    {{-- Kontrollstrukturen --}}
    <p>
        @if ($songs === 1)
            ein Song 
        @elseif ($songs > 1)
            mehrere Songs
        @else 
            kein Song
        @endif
    </p>



    <p>
        {{-- negatives if --}}
        @unless ($loggedin)
            Nicht eingeloggt!
        @endunless

    </p>


    {{-- schleifen --}}
    @for ($i = 0; $i < 4; $i++)
        <p>Der aktuelle Wert ist {{$i}}</p>
    @endfor
        

</body>
</html>
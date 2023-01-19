<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Master / Child Template</title>


</head>
<body>
    <NAv>
        <P><a href="/child">Child 1</a>| <a href="/child2">Child 2</a></P>
    </NAv>
    
    @section('sidebar')
        <h2>Die zentrale Sidebar aus dem Master (layout.blade.php)</h2>
    @show



       {{--  #fcc; self ; use for normal color--}}


    <div style="background:rgb(15, 231, 15)">

        @yield('content')
    </div>

</body>
</html>
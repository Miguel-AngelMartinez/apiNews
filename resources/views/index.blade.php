<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <a href="{{Route('jalar')}}">seccion1</a>
    <a href="{{Route('jalar2')}}">seccion2</a>
    <div>
    @yield('apis1')
    </div>
    <hr>
    <div>
    <hr>
    @yield('apis2')
    </div>
    <hr>
    <div>
    @yield('apis3')
    </div>
    <hr>
    
</body>
</html>
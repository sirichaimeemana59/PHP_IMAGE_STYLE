<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
    <style>
        .img{
            width: {!! $w !!}px;
            height: {!! $h !!}px;
            opacity: {!! $b !!};
        }
    </style>
</head>
<body class="antialiased">

<form method ="POST"  action="">
    <img class="img" src="https://img.freepik.com/free-vector/blue-copy-space-digital-background_23-2148821698.jpg?size=626&ext=jpg" alt="" ><br>
    <img class="img" src="https://image.freepik.com/free-photo/hand-painted-watercolor-background-with-sky-clouds-shape_24972-1095.jpg" alt="" ><br>
</form>
</body>
</html>

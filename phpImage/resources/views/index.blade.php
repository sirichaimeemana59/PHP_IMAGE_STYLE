<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
</head>
<body class="antialiased">
<form method ="post" action="{!! url('style_display') !!}">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <img src="https://img.freepik.com/free-vector/blue-copy-space-digital-background_23-2148821698.jpg?size=626&ext=jpg" alt="" width="250" height="250"><br>
    <img src="https://image.freepik.com/free-photo/hand-painted-watercolor-background-with-sky-clouds-shape_24972-1095.jpg" alt="" width="250" height="250"><br>
    ความสูง : <input type="text" name="H" required><br>
    ความกว้าง  :  <input type="text" name="W" required><br>
    ความสว่าง  :  <input type="text" name="B" required><br>
    <button type="submit">OK</button>
</form>
</body>
</html>

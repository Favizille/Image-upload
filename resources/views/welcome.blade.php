<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    </head>
    <body>
        <form action="{{route("image.add")}}" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="email" placeholder="Enter Email" name="email">
            <input type="password" placeholder="Enter Password" name="password">
            <input type="file" name="image">
            <button type= "submit" >Submit</button>
        </form>
    </body>
</html>

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Display</title>

    </head>
    <body>
        <div>
            <h3>Uploaded Images</h3>

            <img src="{{ asset('images/' . $user->image) }}" alt="">

            <p>Uploaded by: {{$user->email}} </p>

        </div>

    </body>
</html>

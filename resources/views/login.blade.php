<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Techsign</title>
    </head>
    <body>

        <form method="POST" action="/login">
            @csrf
            <input type="text" name="email"/>
            <input type="password" name="password"/>
            <input type="submit">
        </form>

    </body>
</html>

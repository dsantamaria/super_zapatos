<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Super Zapatos</title>
    </head>

    <body>
    @if (Session::has('message_add_success'))
        <div class="alert alert-success">
            Se ha agregado con <strong>exito!</strong>
        </div>
    @endif
    @yield('content')
    </body>
</html>
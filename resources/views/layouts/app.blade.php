<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <meta name="theme-color" content="#3e454c">

        <title>Super Zapatos</title>

        {!! Html::style('harmony/css/font-awesome.min.css') !!}
        {!! Html::style('harmony/css/bootstrap.min.css') !!}
        {!! Html::style('harmony/css/dataTables.bootstrap.min.css') !!}
        {!! Html::style('harmony/css/bootstrap-social.css') !!}
        {!! Html::style('harmony/css/bootstrap-select.css') !!}
        {!! Html::style('harmony/css/fileinput.min.css') !!}
        {!! Html::style('harmony/css/awesome-bootstrap-checkbox.css') !!}
        {!! Html::style('harmony/css/style.css') !!}
    </head>

    <body>
        <div class="brand clearfix">
            <a href="#" class="logo">Super Zapatos</a>
        </div>
        <div class="ts-main-content">
            <nav class="ts-sidebar">
                <ul class="ts-sidebar-menu">
                    <li class="ts-label">Super Zapatos</li>
                    <li class="open"><a href="{{ route('stores.index') }}"><i class="fa fa-dashboard"></i>Tiendas</a></li>
                    <li class="open"><a href="{{ route('articles.index') }}"><i class="fa fa-dashboard"></i>Articulos</a></li>
                </ul>
            </nav>
            <div class="content-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        @if (Session::has('message_add_success'))
                            <div class="alert alert-dismissible alert-success">
                                Se ha agregado con <strong>exito!</strong>
                            </div>
                        @endif
                        @if (count($errors) > 0)
                            <div class="alert alert-dismissible alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                    </div>
                    <div class="row">
                        @yield('content')
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
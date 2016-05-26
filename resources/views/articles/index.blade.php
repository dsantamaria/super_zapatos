
@extends('layouts.app')

@section('content')

    <div class="col-md-12">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Articulos
                    <a href="{{ route('articles.create') }}">Agregar</a>
                </h1>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Registros
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <div class="dataTable_wrapper">
                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                            <thead>
                            <tr>
                                <th>Nombre</th>
                                <th>Descripcion</th>
                                <th>Precio</th>
                                <th>Total en estante</th>
                                <th>Total en bodega</th>
                                <th>Nombre Tienda</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($articles as $store)
                                <tr class="odd gradeX">
                                    <td>{{$store->name}}</td>
                                    <td>{{$store->description}}</td>
                                    <td>{{$store->price}}</td>
                                    <td>{{$store->total_in_shelf}}</td>
                                    <td>{{$store->total_in_vault}}</td>
                                    <td>{{$store->stores->name}}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
@extends('layouts.app')
@section('content')

    <div class="col-md-12">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="page-title">Agregar Articulo</h2>
                <div class="row">
                    <div class="col-md-10">
                        <div class="panel panel-default">
                            <div class="panel-heading">Formulario agregar articulo</div>
                            <div class="panel-body">
                                {!! Form::open(['route' => 'articles.store', 'class' => 'form-horizontal', 'method' => 'POST']) !!}

                                <div class="form-group">
                                    {!! Form::label('name', 'Nombre:', ['class' => 'col-sm-2 control-label']) !!}
                                    <div class="col-lg-10">
                                        {!! Form::text('name', $value = '', ['class' => 'form-control', 'rows' => 3]) !!}
                                    </div>
                                </div>

                                <div class="form-group">
                                    {!! Form::label('description', 'Descripcion:', ['class' => 'col-lg-2 control-label']) !!}
                                    <div class="col-lg-10">
                                        {!! Form::textarea('description', $value = '', ['class' => 'form-control', 'rows' => 3]) !!}
                                    </div>
                                </div>

                                <div class="form-group">
                                    {!! Form::label('price', 'Precio:', ['class' => 'col-lg-2 control-label']) !!}
                                    <div class="col-lg-10">
                                        {!! Form::text('price', $value = '', ['class' => 'form-control', 'rows' => 3]) !!}
                                    </div>
                                </div>

                                <div class="form-group">
                                    {!! Form::label('total_in_shelf', 'Total en display:', ['class' => 'col-lg-2 control-label']) !!}
                                    <div class="col-lg-10">
                                        {!! Form::text('total_in_shelf', $value = '', ['class' => 'form-control', 'rows' => 3]) !!}
                                    </div>
                                </div>

                                <div class="form-group">
                                    {!! Form::label('total_in_vault', 'Total en Bodega:', ['class' => 'col-lg-2 control-label']) !!}
                                    <div class="col-lg-10">
                                        {!! Form::text('total_in_vault', $value = '', ['class' => 'form-control', 'rows' => 3]) !!}
                                    </div>
                                </div>

                                <div class="form-group">
                                    {!! Form::label('store_id', 'Tienda:', ['class' => 'col-lg-2 control-label']) !!}
                                    <div class="col-lg-10">
                                        {!! Form::select('store_id',
                                            (['0' => 'Seleccione una tienda'] + $Stores),
                                                null,
                                                ['class' => 'form-control']) !!}
                                    </div>
                                </div>

                                <!-- Submit Button -->
                                <div class="form-group">
                                    <div class="col-lg-10 col-lg-offset-2">
                                        {!! Form::submit('Guardar articulo', ['class' => 'btn btn-primary'] ) !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@stop
@extends('layouts.app')
@section('content')

    <div id="wrapper">
        <!-- /.panel-heading -->
        <div class="panel-body">
            {!! Form::open(['route' => 'articles.store', 'class' => 'form-horizontal', 'method' => 'POST']) !!}

            <fieldset>
                <div class="form-group">
                    {!! Form::label('name', 'Nombre:', ['class' => '']) !!}
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
                        {!! Form::submit('Agregar', ['class' => 'btn btn-lg btn-info pull-right'] ) !!}
                    </div>
                </div>

            </fieldset>

            {!! Form::close()  !!}
        </div>
        <!-- /.panel-body -->
    </div>
    <!-- /#wrapper -->

@stop
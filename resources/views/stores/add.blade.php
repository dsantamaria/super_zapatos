@extends('layouts.app')
@section('content')

    <div class="col-md-12">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="page-title">Agregar Tienda</h2>
                <div class="row">
                    <div class="col-md-offset-2 col-md-8">
                        <div class="panel panel-default">
                            <div class="panel-heading">Formulario agregar tienda</div>
                            <div class="panel-body">
                                {!! Form::open(['route' => 'stores.store', 'class' => 'form-horizontal', 'method' => 'POST']) !!}
                                    <div class="form-group">
                                        {!! Form::label('name', 'Nombre:', ['class' => 'col-sm-2 control-label']) !!}
                                        <div class="col-lg-10">
                                            {!! Form::text('name', $value = '', ['class' => 'form-control', 'rows' => 3]) !!}
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        {!! Form::label('address', 'Direccion:', ['class' => 'col-lg-2 control-label']) !!}
                                        <div class="col-lg-10">
                                            {!! Form::text('address', $value = '', ['class' => 'form-control', 'rows' => 3]) !!}
                                        </div>
                                    </div>

                                    <!-- Submit Button -->
                                    <div class="form-group">
                                        <div class="col-lg-10 col-lg-offset-2">
                                            {!! Form::submit('Guardar Tienda', ['class' => 'btn btn-primary'] ) !!}
                                        </div>
                                    </div>
                                {!! Form::close()  !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@stop
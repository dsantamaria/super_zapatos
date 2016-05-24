@extends('layouts.app')
@section('content')

    <div id="wrapper">
        <!-- /.panel-heading -->
        <div class="panel-body">
            {!! Form::open(['route' => 'stores.store', 'class' => 'form-horizontal', 'method' => 'POST']) !!}

            <fieldset>
                <div class="form-group">
                    {!! Form::label('name', 'Nombre:', ['class' => '']) !!}
                    <div class="col-lg-10">
                        {!! Form::text('name', $value = '', ['class' => 'form-control', 'rows' => 3]) !!}
                    </div>
                </div>

                <div class="form-group">
                    {!! Form::label('addresss', 'Direccion:', ['class' => 'col-lg-2 control-label']) !!}
                    <div class="col-lg-10">
                        {!! Form::text('address', $value = '', ['class' => 'form-control', 'rows' => 3]) !!}
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
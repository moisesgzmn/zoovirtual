@extends('base.basico')

@section('content')

    <style>
        body{
            background-color: grey;
        }

    </style>

    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default" style="top: 50%;">
                    <div class="panel-heading">
                        <h3 class="panel-title">Iniciar Sesión</h3>
                    </div>
                    <div class="panel-body">

                        {!!Form::open()!!}

                            <fieldset>

                                <div class="form-group">
                                    {!!Form::text('email', null, ['class'=>'form-control', 'placeholder' => 'Introduzca Email'])!!}
                                </div>

                                <div class="form-group">
                                    {!!Form::password('password', ['class'=>'form-control', 'placeholder' => 'Introduzca Contraseña'])!!}                          
                                </div>

                                <label>
                                    {!!Form::checkbox('recordar', '0', false, ['class' => ''])!!}
                                    Recordarme
                                </label>
                                    <br>

                                {!!Form::submit('Entrar',['class' => 'form-control btn btn-success'])!!}

                            </fieldset>
                        {!!Form::close()!!}

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection



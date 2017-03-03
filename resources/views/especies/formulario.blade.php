@extends('base.paneladmin')

@section('titulo', 'Especies')

@section('contenido')

<div class="row">
    <div class="col-lg-12">
        <div class="">
            <form class="form-horizontal style-form" method="post" action="{{ route('guardar') }}">
                {{ csrf_field() }}
                <div class="row form-panel">

                <div class="col-md-6">

                    <h4 class="mb"><i class="fa fa-angle-right"></i> Datos Generales</h4>

                    <div class="form-group">
                    <label class="col-sm-4 col-md-4 control-label">Nombre Común: </label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" name="nombre_comun" id="nombre_comun" value="@if(isset($nombre_comun)) {{$nombre_comun}} @endif">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-4 col-sm-4 control-label">Nombre Científico: </label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" name="nombre_cientifico" id="nombre_cientifico">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-4 col-md-4 control-label">Tipo: </label>
                    <div class="col-sm-6">

                        <select name="id_coleccion" id="id_coleccion" class="form-control">
                            <option value="" selected disabled>Seleccione...</option>
                            @foreach($colecciones as $coleccion)
                                <option value="{{ $coleccion->id }}">{{ $coleccion->coleccion }}</option>
                            @endforeach
                        </select>

                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-4 col-md-4 control-label">Peso Promedio: </label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" name="peso" id="peso">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-4 col-md-4 control-label">Altura Promedio: </label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" name="altura" id="altura">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-4 col-md-4 control-label">Color Predominante: </label>
                    <div class="col-sm-6">
                        <select name="id_color" id="id_color" class="form-control">
                            <option value="" selected disabled>Seleccione...</option>
                            @foreach($colores as $color)
                                <option value="{{ $color->id }}">{{ $color->color }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-4 col-md-4 control-label">Descripción: </label>
                    <div class="col-sm-6 col-md-6">
                        <textarea name="descripcion" id="descripcion" class="form-control" cols="30" rows="5"></textarea>
                    </div>
                </div>

                    <div class="form-group">
                    <label class="col-sm-4 col-md-4 control-label">Dato Curioso: </label>
                    <div class="col-sm-6 col-md-6">
                        <textarea name="dato_curioso" id="dato_curioso" class="form-control" cols="30" rows="5"></textarea>
                    </div>
                </div>

                    <div class="form-group">
                        <input type="submit" class="btn btn-primary" value="Guardar"/>
                    </div>

                </div>

                    <div class="col-md-6">
                        <h4 class="mb"><i class="fa fa-angle-right"></i> Archivos </h4>
                    </div>

                </div>
            </form>
        </div>

    </div><!-- col-lg-12-->
</div><!-- /row -->

@endsection
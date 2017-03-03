@extends('base.paneladmin')

@section('titulo', 'Especies')

@section('contenido')

    <h3><i class="fa fa-angle-right"></i> <a href="{{ route('agregar-especie') }}">Agregar Especie</a> </h3>
    <div class="row mt">
        <div class="col-lg-12">
            <div class="content-panel">
                <h4><i class="fa fa-angle-right"></i> Listado de Especies</h4>
                <section id="unseen">
                    <table class="table table-bordered table-striped table-condensed">
                        <thead>
                        <tr>
                            <th>Imagen</th>
                            <th>Nombre Común</th>
                            <th>Nombre Científico</th>
                            <th>Descripción</th>
                            <th>Dato Curioso</th>
                            <!-- <th>Tipo</th> -->
                            <th>Estatus</th>
                            <th>Opciones</th>

                        </tr>
                        </thead>
                        <tbody>

                        @foreach($especies as $especie)

                            <tr>
                                <td></td>
                                <td>{{ $especie->nombre_comun }}</td>
                                <td>{{ $especie->nombre_cientifico }}</td>
                                <td>{{ $especie->descripcion }}</td>
                                <td>{{ $especie->dato_curioso }}</td>
                                <!-- <td>{{ $especie->coleccion }}</td> -->
                                <td>

                                    @if($especie->estatus==1) 
                                        <span class="badge"> {{ 'Habilitado' }} </span>
                                    @elseif($especie->estatus==0) 
                                        <span class="badge"> {{ 'Deshabilitado' }} </span>
                                    @endif 

                                </td>
                                <td><a href="{{ route('editar', [1]) }}" class="btn btn-circle btn-info">Editar</a></td>
                            </tr>

                        @endforeach
                       
                        </tbody>
                    </table>
                </section>
            </div><!-- /content-panel -->
        </div><!-- /col-lg-4 -->
    </div><!-- /row -->

    </div><!-- /row -->


@stop
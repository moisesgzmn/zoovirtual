@extends('base.basico')

<link href="{{ asset('css/estilo_menuadmin.css') }}" rel="stylesheet">

@section('content')

    <section id="container" >

        @extends('base.header')
        @extends('base.menulateral')


        <section id="main-content">
            <section class="wrapper">
                <h1>Panel Administrativo - ZooVirtual / @yield('titulo')</h1>
                @yield('contenido')
            </section>
        </section>
    </section>

@endsection

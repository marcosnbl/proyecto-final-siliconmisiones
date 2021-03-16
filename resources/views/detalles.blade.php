@extends ('layouts.main')

@section('title','Detalles')

@section('content')

<div class="container" id="detalle">
    <div class="heading">
        <div class="image">
            <img src="{{URL::to('imgs/' . $curso['imagen'])}}" alt="imagen-del-curso-{{$curso["nombre"]}}">
        </div>

        <div class="title">
            <h1>{{ $curso['nombre'] }}</h1>
            <h3>{{ $curso['descripcion_corta'] }}</h3>
        </div>
    </div>

    <div class="description">
        <h2>Descripcion</h2>
        <p>{{ $curso['descripcion_larga'] }}</p>
        <a href="{!! route('cursos.index') !!}">Volver</a>
    </div>
</div>

@endsection
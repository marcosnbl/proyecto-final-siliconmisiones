@extends ('layouts.main')

@section('title','cursos')

@section('content')

<div class="col-md-10">
    <table class="table table-bordered">
        <thead>
          <tr>
            <th>Cursos</th>
            <th>Imagenes</th>
            <th>Descripcion Corta</th>
            <th>Descripcion Larga</th>
            <th>Fecha</th>
            <th>Editar- Eliminar</th>
          </tr>
        </thead>
        <tbody>
        
        <ul>
            @foreach ($curso as $cursos)
                <li>{{$curso->nombre}}</li>
            @endforeach
        </ul>

        
        </tbody>
    </table>
</div>

@endsection
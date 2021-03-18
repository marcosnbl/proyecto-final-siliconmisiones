@extends ('layouts.main')

@section('title','cursos')

@section('content')

<div class="col-md-10">
    <table class="table table-bordered">
        <thead>
          <tr>
            <th>id</th>
            <th>Cursos</th>
            <th>Imagen</th>
            <th>Descripción Corta</th>
            <th>Descripción Larga</th>
            <th>Fecha</th>
            <th>Acciones</th>
          </tr>
        </thead>
        <tbody>
        
        
            @foreach ($cursos as $curso)
            <tr>



                <td>{{$curso['id']}}</td>
                <td>{{$curso['nombre']}}</td>
                <td>{{$curso['imagen']}}</td>
                <td>{{$curso['descripcion_corta']}}</td>
                <td>{{$curso['descripcion_larga']}}</td>
                <td>{{$curso['created_at']}}</td>
                <td>
                  <a href="{!! route('cursos.editar',$curso) !!}" class="btn btn-secondary">
                  <i class="fas fa-marker"></i>
                  </a>
                  <a href="{!! route('cursos.editar',$curso) !!}" class="btn btn-danger">
                  <i class="far fa-trash-alt"></i>
                  </a>
                </td>
                





            </tr>
            @endforeach
        

        
        </tbody>
    </table>
</div>

@endsection
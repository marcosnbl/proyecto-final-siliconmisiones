@extends ('layouts.main')

@section('title','cursos')

@section('content')

<div class="col-md-10">
    <table class="table table-bordered">
        <thead>
          <tr>
            <th>id</th>
            <th>Cursos</th>
            <th>Fecha</th>
            <th>Acciones</th>
          </tr>
        </thead>
        <tbody>
        
        
            @foreach ($cursos as $curso)
            <tr>



                <td>{{$curso['id']}}</td>
                <td>{{$curso['nombre']}}</td>
                <td>{{$curso['created_at']}}</td>
                





            </tr>
            @endforeach
        

        
        </tbody>
    </table>
</div>

@endsection
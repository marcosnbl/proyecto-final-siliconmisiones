@extends ('layouts.main')

@section('title','Cursos')

@section('content')
   
  <!-- Page Content -->
  <div class="container">

    <!-- Page Heading/Breadcrumbs -->
    <h1 class="mt-4 mb-3">Nuestros Cursos
      
    </h1>

    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="{!! route('home') !!}">Home</a>
      </li>
      <li class="breadcrumb-item active">Cursos</li>
    </ol>

    <!-- Imagen del Header -->
    <img class="variedad" src="imgs/cursoslista.png" alt="Cursos Disponibles">

    <!-- Tarjetas Para los cursos -->
    <div class="row">

     @foreach($cursos as $curso)
      <div class="col-lg-4 mb-4">
        <div class="card h-100">
          <h4 class="card-header">{{ $curso['nombre'] }}</h4>
          <div class="card-body">
            <p class="card-text">{{ $curso['descripcion_corta'] }}</p>
          </div>
          <div class="card-footer">
            <a href="{!! route('cursos.showDetails', ['id' => $curso['id']]) !!}" class="btn btn-primary">Ver mas</a>
          </div>
        </div>
      </div>
     @endforeach

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->

@endsection

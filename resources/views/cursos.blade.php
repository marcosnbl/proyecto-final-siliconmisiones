@extends ('layouts.main')

@section('title','Cursos')

@section('content')
   
  <!-- Page Content -->
  <div class="container">

    <!-- Page Heading/Breadcrumbs -->
    <h1 class="mt-4 mb-3">Nuestros Cursos
      <small>Subtitulo</small>
    </h1>

    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="{!! route('home') !!}">Home</a>
      </li>
      <li class="breadcrumb-item active">Cursos</li>
    </ol>

    <!-- Imagen del Header -->
    <img class="img-fluid rounded mb-4" src="http://placehold.it/1200x300" alt="">

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
            <a href="#" class="btn btn-primary">Ver mas</a>
          </div>
        </div>
      </div>
     @endforeach

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->

@endsection

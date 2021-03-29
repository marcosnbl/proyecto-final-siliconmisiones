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
    <section class="buscador ">
    
    </section>

    <nav class="col">
                        
                        <ul class="nav nav-pills py-3">
        
                            
                            <li class="nav-item mb-2 mb-lg-0">
                                <a href="{!! route('cursos.index') !!}" class="nav-link shadow-sm">
                                    <i class="fas fa-layer-group"></i>
                                    Todos los cursos
                                </a>
                            </li>

                            
                            <li class="nav-item dropdown mb-2 mb-lg-0">
                                <a class="nav-link dropdown-toggle dropdown-toggle shadow-sm" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                                    <i class="fas fa-tags"></i>
                                    Categorías
                                </a>
        
                                <div class="dropdown-menu">
        
                                                                            <a class="dropdown-item" rel="nofollow" href="{!! route('cursos.index') !!}">Desarrollo web</a>
                                                                            <a class="dropdown-item" rel="nofollow" href="{!! route('cursos.index') !!}">Diseño web</a>
                                                                            <a class="dropdown-item" rel="nofollow" href="{!! route('cursos.index') !!}">Programación</a>
                                                                        
                                </div>
                            </li>

                            

                            <input list="cursos_disponibles" />
			                        <datalist id="cursos_disponibles">
                                <option value="Javascript"></option>
                                <option value="HTML5"></option>
                                <option value="CSS3"></option>
                                <option value="Python"></option>
			                        </datalist>
                            <div class="input-group-append">
                            <button class="btn btn-danger" type="submit">Buscar</button>
                            </div>
                    
                        </ul>
        
                    </nav>
                    
                    </section>



    <!-- Imagen del Header -->
    <img class="variedad" src="imgs/cursoslista.png" alt="Cursos Disponibles">

    <!-- Tarjetas Para los cursos -->
    <div class="row">

     @foreach($cursos as $curso)
      <div class="col-lg-4 mb-4">
        <div class="card h-100">
          <h3 class="card-header">{{ $curso['nombre'] }}</h3>
          <div class="card-body">
            <p class="card-text">{{ $curso['descripcion_corta'] }}</p>
          </div>
          <div class="card-footer">
            <a href="{!! route('cursos.showDetails', ['id' => $curso['id']]) !!}" class="btn btn-primary">Ver más</a>
          </div>
        </div>
      </div>
     @endforeach

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->

@endsection

@extends ('layouts.main')

@section('title','cursos')

@section('content')



  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.82.0">


    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/dashboard/">

    

    <!-- Bootstrap core CSS -->
<link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="dashboard.css" rel="stylesheet">
  </head>
  <body>
    


<div class="container-fluid">
  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="position-sticky pt-3">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{!! route('home') !!}">
              <span data-feather="home"></span>
              Inicio
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{!! route('cursos.index') !!}">
              <span data-feather="file"></span>
              Cursos
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{!! route('cursos.create') !!}">
              <span data-feather="shopping-cart"></span>
              Crear Curso
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="users"></span>
              
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="bar-chart-2"></span>
              
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="layers"></span>
              
            </a>
          </li>
        </ul>

        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
          <span></span>
          <a class="link-secondary" href="#" aria-label="Add a new report">
            <span data-feather="plus-circle"></span>
          </a>
        </h6>
        <ul class="nav flex-column mb-2">
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file-text"></span>
              
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file-text"></span>
              
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file-text"></span>
              
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file-text"></span>
              
            </a>
          </li>
        </ul>
      </div>
    </nav>
    
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Dashboard</h1>
        
    </div>
  <section class="tabla">      
      <h2>Cursos</h2>
<!--       <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th>id</th>
              <th>Cursos</th>
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
                <td>{{$curso['descripcion_corta']}}</td>
                <td>{{$curso['descripcion_larga']}}</td>
                <td>{{$curso['created_at']}}</td>
                <td>
                  
                  <form action="{!! route('cursos.editar', ['id' => $curso['id']]) !!}">
                    @csrf
                    <button type="submit">
                    Editar
                    </button>
                  </form>
                  
                  <br>
                  
                  <form action="{!! route('cursos.destroy', ['id' => $curso['id']]) !!}" method="POST">
                    @csrf
                    @method('delete')
                    <button type="submit" >Eliminar </button>
                  </form>

                </td>
            </tr>
            @endforeach -->
           
            <div class="col-md-10">
    <table class="table table-bordered">
        <thead>
          <tr>
            <th>id</th>
            <th>Cursos</th>
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
                <td>{{$curso['descripcion_corta']}}</td>
                <td>{{$curso['descripcion_larga']}}</td>
                <td>{{$curso['created_at']}}</td>
                <td>
                  
                  <form action="{!! route('cursos.editar', ['id' => $curso['id']]) !!}">
                    @csrf
                    <button type="submit">
                    Editar
                    </button>
                  </form>
                  
                  <br>
                  
                  <form action="{!! route('cursos.destroy', ['id' => $curso['id']]) !!}" method="POST">
                    @csrf
                    @method('delete')
                    <button type="submit" >Eliminar </button>
                  </form>

                </td>
            </tr>
            @endforeach
        

        
        </tbody>
    </table>
</div>

    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

      <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script><script src="dashboard.js"></script>
  </body>
</section>


@endsection
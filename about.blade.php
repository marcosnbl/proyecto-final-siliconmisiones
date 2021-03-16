@extends ('layouts.main')

@section('title','About')

@section('content')
    
  <!-- Page Content -->
  <div class="container">

    <!-- Page Heading/Breadcrumbs -->
    <h1 class=" mt-5 mb-5">Sobre Nosotros
      
    </h1>

    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="{!! route('home') !!}">Home</a>
      </li>
      <li class="breadcrumb-item active">About</li>
    </ol>

    <!-- ¿Por que Elegimos el proyecto? -->
    <div class="row">
      <div class="col-lg-6">
        <img class="img-fluid rounded mb-4" src="https://images.unsplash.com/photo-1528901166007-3784c7dd3653?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=750&q=80">
      </div>
      <div class="col-lg-6">
        <h2 class="sobre-nosotros-pregunta">¿Por qué elegimos este proyecto?</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed voluptate nihil eum consectetur similique? Consectetur, quod, incidunt, harum nisi dolores delectus reprehenderit voluptatem perferendis dicta dolorem non blanditiis ex fugiat.</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe, magni, aperiam vitae illum voluptatum aut sequi impedit non velit ab ea pariatur sint quidem corporis eveniet. Odit, temporibus reprehenderit dolorum!</p>
          
      </div>
    </div>


    <!-- Equipo -->
    <!-- /Header Divisor -->
    <header class="equipo-header bg-var(--primary) text-center pb-1 pt-2 my-4">
      <div class="container">
        <h1 class="font-weight-light text-white">Nuestro Equipo</h1>
      </div>
    </header>

    <div class="row">
      <div class="col-lg-3 mb-4">
        <div class="card h-100 text-center">
          <img class="card-img-top" src="imgs/marcos.jfif" alt="">
          <div class="card-body">
            <h4 class="card-title mb-3">Marcos Benitez Lisoski</h4>
            <h6 class="card-subtitle mb-3 text-muted">QA Analyst</h6>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus aut mollitia eum ipsum fugiat odio officiis odit.</p>
          </div>
          <div class="card-footer">
            <a href="#">mblisoski@gmail.com</a>
          </div>
        </div>
      </div>
      <div class="col-lg-3 mb-4">
        <div class="card h-100 text-center">
          <img class="card-img-top" src="imgs/ale.jfif" alt="">
          <div class="card-body">
            <h4 class="card-title mb-3">Alejandra Otazu</h4>
            <h6 class="card-subtitle mb-3 text-muted">Fullstack Developer</h6>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus aut mollitia eum ipsum fugiat odio officiis odit.</p>
          </div>
          <div class="card-footer">
            <a href="#">mharale21@gmail.com</a>
          </div>
        </div>
      </div>
      <div class="col-lg-3 mb-4">
        <div class="card h-100 text-center">
          <img class="card-img-top" src="imgs/cin.jpg" alt="">
          <div class="card-body">
            <h4 class="card-title mb-3">Cintia Tai</h4>
            <h6 class="card-subtitle mb-3 text-muted">Frontend Developer</h6>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus aut mollitia eum ipsum fugiat odio officiis odit.</p>
          </div>
          <div class="card-footer">
            <a href="#">cintiasofiatai@gmail.com</a>
          </div>
        </div>
      </div>
      <div class="col-lg-3 mb-4">
        <div class="card h-100 text-center">
          <img class="card-img-top" src="imgs/matias.jfif" alt="">
          <div class="card-body">
            <h4 class="card-title mb-3">Matias Aquino</h4>
            <h6 class="card-subtitle mb-3 text-muted">Backend Developer</h6>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus aut mollitia eum ipsum fugiat odio officiis odit.</p>
          </div>
          <div class="card-footer">
            <a href="#">matias.aquino@gmail.com</a>
          </div>
        </div>
      </div>
    </div>
    </div>
    



    <!-- Nuestros Profesores-->
    <!--
    <h2 class="nuestros-profes">Nuestros Profesores</h2>
    <div class="row">
      <div class="col-lg-2 col-sm-4 mb-4">
        <img class="img-fluid" src="http://placehold.it/500x300" alt="">
      </div>
      <div class="col-lg-2 col-sm-4 mb-4">
        <img class="img-fluid" src="http://placehold.it/500x300" alt="">
      </div>
      <div class="col-lg-2 col-sm-4 mb-4">
        <img class="img-fluid" src="http://placehold.it/500x300" alt="">
      </div>
      <div class="col-lg-2 col-sm-4 mb-4">
        <img class="img-fluid" src="http://placehold.it/500x300" alt="">
      </div>
      <div class="col-lg-2 col-sm-4 mb-4">
        <img class="img-fluid" src="http://placehold.it/500x300" alt="">
      </div>
      <div class="col-lg-2 col-sm-4 mb-4">
        <img class="img-fluid" src="http://placehold.it/500x300" alt="">
      </div>
    </div>
--> 

    <!-- /.row -->

  </div>
  <!-- /.container -->
@endsection

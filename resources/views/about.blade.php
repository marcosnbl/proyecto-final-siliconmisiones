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
        <p>Esta iniciativa nació con la idea por promover el conocimiento informático, y podamos llegar a todas las personas que están iniciándose en el mundo de la programación pero no tienen los recursos para poder contratar un curso.
        <p>La falta de conocimiento del idioma inglés tambien puede dificultar el aprendizaje ya que la mayoria de los materiales disponibles están en éste idioma, por lo cual nuestros cursos estan totalmente en español </p>
        <p>Nuestro objetivo es darte todas las herramientas necesarias para que puedas conseguir empleo en eso que tanto te gusta, y puedas dar tus primeros pasos en el mundo de la informática</p>
          
      </div>
    </div>


    <!-- Equipo -->
    <!-- /Header Divisor -->
    <header class="equipo-header bg-var(--primary) text-center pb-1 pt-2 my-4">
      <div class="container">
        <h1 class="font-weight-light text-black">Nuestro Equipo</h1>
      </div>
    </header>

    <div class="row">
      <div class="col-lg-3 mb-4">
        <div class="card h-100 text-center">
          <img class="card-img-top" src="imgs/marcos.jfif" alt="">
          <div class="card-body">
            <h4 class="card-title mb-3">Marcos Benitez Lisoski</h4>
            <h5 class="card-subtitle mb-3 text-muted">QA Analyst & Frontend Developer</h5>
            <p class="card-text">Soy un apasionado por la tecnología, la calidad y la mejora de los procesos en la experiencia de los clientes. Me encanta aprender, resolver problemas y superar mis propios límites a través de la mejora gradual y continua, pensando en grande y a largo plazo.</p>
          </div>
          <div class="card-footer">
            <a href="#">mblisoski@gmail.com</a>
            <br>
            <a href="https://www.linkedin.com/in/marcosnbl/"><i class="fab fa-linkedin-in"></i></a>
            <a href="https://github.com/marcosnbl"><i class="fab fa-github"></i></a>
          </div>
        </div>
      </div>
      <div class="col-lg-3 mb-4">
        <div class="card h-100 text-center">
          <img class="card-img-top" src="imgs/ale.jfif" alt="">
          <div class="card-body">
            <h4 class="card-title mb-3">Alejandra Otazu</h4>
            <h5 class="card-subtitle mb-3 text-muted">Fullstack Developer</h5>
            <p class="card-text">Estudiante de Analista en Sistemas de Computación,siempre en constante aprendizaje.
            Mi propósito es trasladar mi pasion por las tecnologías web a todos aquellos que quieran iniciarse en este campo.</p>
            
          </div>
          <div class="card-footer">
            <a href="#">mharale21@gmail.com</a>
            <br>
            <a href="https://www.linkedin.com/in/maria-alejandra-otazu-/"><i class="fab fa-linkedin-in"></i></a>
            <a href="https://github.com/mharale"><i class="fab fa-github"></i></a>
          </div>
        </div>
      </div>
      <div class="col-lg-3 mb-4">
        <div class="card h-100 text-center">
          <img class="card-img-top" src="imgs/cin.jpg" alt="">
          <div class="card-body">
            <h4 class="card-title mb-3">Cintia Tai</h4>
            <h5 class="card-subtitle mb-3 text-muted">Frontend Developer</h5>
            <p class="card-text">Estudiante de Desarrollo Web, Profesora en Inglés, con mucho interés en desarrollar habilidades en diseño UX/UI. Me encanta programar, enseñar a los demás y sobre todo, seguir aprendiendo.</p>
          </div>
          <div class="card-footer">
            <a href="#">cintiasofiatai@gmail.com</a>
            <br>
            <a href="https://www.linkedin.com/in/cintiatai/"><i class="fab fa-linkedin-in"></i></a>
            <a href="https://github.com/cintiatai"><i class="fab fa-github"></i></a>
          </div>
        </div>
      </div>
      <div class="col-lg-3 mb-4">
        <div class="card h-100 text-center">
          <img class="card-img-top" src="imgs/matias.jpg" alt="">
          <div class="card-body">
            <h4 class="card-title mb-3">Matias Aquino Gerega</h4>
            <h5 class="card-subtitle mb-3 text-muted">Backend Developer</h5>
            <p class="card-text">Estudiante de licenciatura en sistemas, amante de la tecnología y la programación</p>
          </div>
          <div class="card-footer">
            <a href="#">matias.aquino.gerega@gmail.com</a>
            <br>
            <a href="https://www.linkedin.com/in/matias-aquino-gerega-766b16174/"><i class="fab fa-linkedin-in"></i></a>
            <a href="https://github.com/MatiasAGer"><i class="fab fa-github"></i></a>
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

@extends ('layouts.main')

@section('title','Contacto')

@section('content')
     <!-- Page Content -->
  <div class="container">

    <!-- Page Heading/Breadcrumbs -->
    <h1 class="contactanos mt-5 mb-5"> Contáctanos
     
    </h1>

    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="{!! route('home') !!}">Home</a>
      </li>
      <li class="breadcrumb-item active">Contacto</li>
    </ol>

    <!-- Columna de Contenido -->
    <div class="row">
      <!-- Columna de Mapa -->
      <div class="col-lg-8 mb-4">
        <!-- Google Map -->
        <iframe style="width: 100%; height: 400px; border: 0;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d20041.37607571562!2d-55.909678476797666!3d-27.380454819731955!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9457bff4dc4616a7%3A0xf9a242b603ca1f2b!2sSilicon%20Misiones!5e0!3m2!1ses!2sar!4v1615299151772!5m2!1ses!2sar" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
      </div>
      <!-- Columna de Detalles de Contacto -->
      <div class="col-lg-4 mb-4">
        <h3 class="contacto">Contacto</h3>
        <p>
          Silicon Misiones
          <br>Posadas Misiones
          <br>
        </p>
        <p>
          <abbr title="Telefono">P</abbr>: 3764-571058
        </p>
        <p>
          <abbr title="Email">E</abbr>:
          <a href="mailto:mblisoski@gmail.com">mblisoski@gmail.com
          </a>
        </p>
        <p>
          <abbr title="Hours">H</abbr>: 24/7
        </p>
      </div>
    </div>
    <!-- /.row -->

    <!-- Contact Form - Ver Carpeta Mail -->
    
      @include("formcontacto")
    <!-- /.row -->
  </div>
  <!-- /.container -->
@endsection

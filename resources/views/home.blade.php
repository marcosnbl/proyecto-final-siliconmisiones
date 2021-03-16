@extends ('layouts.main')

@section('title','Home')

@section('content')
<section class="hero">
    <div class="contenido-hero">

    </div>
</section>

    <!-- .contenido-hero-->

    <section class="contenedor servicios sombra animate__animated animate__backInLeft animate__delay-2s">
        <div class="servicio">
            <h2>Cursos y proyectos</h2>
            <div>
                <img class="icono" src="imgs/cursos.png" alt="Cursos y Proyectos">
            </div>
            <p>Encuentra una gran variedad de cursos y proyectos para que potencies tus conocimientos.</p>
        </div>
        <div class="servicio">
            <h2>Aprendé a tu ritmo</h2>
            <div>
                <img class="icono" src="imgs/ritmo.png" alt="Aprende a tu ritmo">
            </div>
            <p>Estudiá en tus tiempos libres y desde donde estés.</p>
        </div>
        <div class="servicio">
            <h2>Manual en español</h2>
            <div>
                <img class="icono" src="imgs/manual.png" alt="">
            </div>
            <p>Documentaciones traducidas al español, para que puedas aprender mejor.</p>
        </div>
    </section>




    <!-- Equipo -->
    <main class="contenedor ">
        <h2>Nuestro Equipo</h2>
        <div class="nuestro-equipo">
            <div class="card animate__animated animate__flipInY animate__delay-3s">
                <img class="developer" src="imgs/marcos.jfif" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Marcos Lisoski</h5>
                    <p class="card-text">QA Analyst</p>
                </div>
            </div>

            <div class="card animate__animated animate__flipInY animate__delay-3s">
                <img class="developer" src="imgs/cin.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Cintia Tai</h5>
                    <p class="card-text">Frontend Developer</p>
                </div>
            </div>

            <div class="card animate__animated animate__flipInY animate__delay-3s">
                <img class="developer" src="imgs/ale.jfif" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Alejandra Otazu</h5>
                    <p class="card-text">Fullstack Developer</p>
                </div>
            </div>

            <div class="card animate__animated animate__flipInY animate__delay-3s">
                <img class="developer" src="imgs/matias.jfif" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Matías Aquino</h5>
                    <p class="card-text">Backend Developer</p>
                </div>
            </div>
        </div>



    </main>




    <section class="cursos contenedor">
        <!--Slider cursos-->

        <h2 class="cursos">Cursos</h2>

        <section class="carousel " aria-label="Gallery">
            <ol class="carousel__viewport">
                <li id="carousel__slide1" tabindex="0" class="carousel__slide">

                    <div class="carousel__snapper">

                        <a href="#carousel__slide4" class="carousel__prev">Go to last slide</a>
                        <a href="#carousel__slide2" class="carousel__next">Go to next slide</a>

                    </div>

                </li>
                <li id="carousel__slide2" tabindex="0" class="carousel__slide">
                    <div class="carousel__snapper"></div>
                    <a href="#carousel__slide1" class="carousel__prev">Go to previous slide</a>
                    <a href="#carousel__slide3" class="carousel__next">Go to next slide</a>
                </li>
                <li id="carousel__slide3" tabindex="0" class="carousel__slide">
                    <div class="carousel__snapper"></div>
                    <a href="#carousel__slide2" class="carousel__prev">Go to previous slide</a>
                    <a href="#carousel__slide4" class="carousel__next">Go to next slide</a>
                </li>
                <li id="carousel__slide4" tabindex="0" class="carousel__slide">
                    <div class="carousel__snapper"></div>
                    <a href="#carousel__slide3" class="carousel__prev">Go to previous slide</a>
                    <a href="#carousel__slide1" class="carousel__next">Go to first slide</a>
                </li>
            </ol>
            <aside class="carousel__navigation">
                <ol class="carousel__navigation-list">
                    <li class="carousel__navigation-item">
                        <a href="#carousel__slide1" class="carousel__navigation-button">Go to slide 1</a>
                    </li>
                    <li class="carousel__navigation-item">
                        <a href="#carousel__slide2" class="carousel__navigation-button">Go to slide 2</a>
                    </li>
                    <li class="carousel__navigation-item">
                        <a href="#carousel__slide3" class="carousel__navigation-button">Go to slide 3</a>
                    </li>
                    <li class="carousel__navigation-item">
                        <a href="#carousel__slide4" class="carousel__navigation-button">Go to slide 4</a>
                    </li>
                </ol>
            </aside>
        </section>
    </section>

    <section class="contenedor">



        <form class="formulario sombra" action="{{route('contacto.store')}}" method="POST">
            @csrf
            <fieldset>
                <legend>Contáctanos
                </legend>

                <div class="contenedor-campos" >
                    <div class="campo">
<<<<<<< HEAD
                        <label class="label" for="name">Nombre</label>
=======
                        <label class="label" for="name">Nombre </label>
>>>>>>> c1ab84aa2d5124cd589ec33c3ae5885a87adff3b
                        <input class="input-text" type="text" name='name' placeholder="Nombre">
                        @error('name')
                           <h6><strong>{{$message}}</strong></h6>
                        @enderror
                    </div>

                    <div class="campo">
                        <label class="label" for="phone">Teléfono</label>
                        <input class="input-text" type="tel" name='phone' placeholder="Teléfono">
                        @error('phone')
                           <h6><strong>{{$message}}</strong></h6>
                        @enderror
                    </div>

                    <div class="campo">
                        <label class="label" for="email">E-mail</label>
                        <input class="input-text" type="email" name='email' placeholder="Tu correo electrónico">
                        @error('email')
                           <h6><strong>{{$message}}</strong></h6>
                        @enderror
                    </div>

                    <div class="campo">
                        <label class="label" for="message">Mensaje</label>
                        <textarea class="input-text" name='message'></textarea>
                        @error('message')
                           <h6><strong>{{$message}}</strong></h6>
                        @enderror
                    </div>

                    <!-- contenedor-campos-->


                    <div>

                        <input class="boton enviar" type= "submit" name=" " id=" " value="Enviar ">
                    </div>

            </fieldset>
        </form>

    </section>



@endsection

@if (session('info'))
<script>
  alert("{{session('info')}}");
</script>
  
@endif

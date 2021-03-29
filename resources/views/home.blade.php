@extends ('layouts.main')

@section('title','Home')

@section('content')



<section class="hero">
    <div class="contenido-hero">

    </div>
</section>


    <!-- .contenido-hero-->

    <section class="contenedor servicios sombra ">
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
<br>
<br>

        <h2>Nuestro Equipo</h2>
        <div class="nuestro-equipo">
            <div class="card ">
                <img class="developer" src="imgs/marcos.jfif" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Marcos Lisoski</h5>
                    <p class="card-text">QA Analyst & Frontend Developer</p>
                </div>
            </div>

            <div class="card ">
                <img class="developer" src="imgs/cin.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Cintia Tai</h5>
                    <p class="card-text">Frontend Developer</p>
                </div>
            </div>

            <div class="card ">
                <img class="developer" src="imgs/ale.jfif" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Alejandra Otazu</h5>
                    <p class="card-text">Fullstack Developer</p>
                </div>
            </div>

            <div class="card ">
                <img class="developer" src="imgs/matias.jpeg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Matías Aquino Gerega</h5>
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


     @include("formcontacto")
    </section>



@endsection

@if (session('info'))
<script>
  alert("{{session('info')}}");
</script>
  
@endif

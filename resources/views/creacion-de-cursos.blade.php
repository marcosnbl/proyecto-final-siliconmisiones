@extends ('layouts.main')

@section('title','Contacto')

@section('content')


<div class="container p-4">
    <div class="row">
        <div class="col-md-8">
            

            <div class="card card-body">
                <form action="{{route('cursos.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <input type="text" name="nombre" class="form-control" placeholder = "Curso Nuevo." autofocus>
                    </div>
                    <div class="form-group">
                        <input type="file" name="imagen" accept=".pdf,.png,.jpg,.jpeg" class="form-control" placeholder = "Imagen." autofocus>
                    </div>
                    <div class="form-group">
                        <input type="text" name="descripcion_corta" class="form-control" placeholder = "Descripcion Corta." autofocus>
                    </div>
                    <div class="form-group">
                        <input type="text" name="descripcion_larga" class="form-control" placeholder = "Descripcion Larga." autofocus>
                    </div>
                    
                    <input type="submit" name="created_at" class="btn btn-success btn-block" value="Guardar datos.">
                    <br>
                    <a href="{!! route('home') !!}" class="">
                        <input type="cancel" name="cancel" class="btn btn-danger btn-block" value="Cancelar.">
                    </a> 
                </form>
            </div>
        </div>  
    </div>
</div>
@endsection
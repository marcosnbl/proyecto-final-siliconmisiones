@extends ('layouts.main')

@section('title','Contacto')

@section('content')







<div class="container p-4">
    <div class="row">
        <div class="col-md-8">
            

            <div class="card card-body">
                <form action="{{route('cursos.actualizar',$curso)}}" method="POST" >
                    @csrf
                    @method('put')
                    <div class="form-group">
                        <input type="text" name="nombre" value="{{$curso->nombre}}" class="form-control" placeholder = "Editar Curso." autofocus>
                    </div>
                    <div class="form-group">
                        <input type="img" name="imagen" value="{{$curso->imagen}}"  class="form-control" placeholder = "Imagen." autofocus>
                    </div>
                    <div class="form-group">
                        <input type="text" name="descripcion_corta" value="{{$curso->descripcion_corta}}" class="form-control" placeholder = "Editar Descripcion Corta." autofocus>
                    </div>
                    <div class="form-group">
                        <input type="text" name="descripcion_larga" value="{{$curso->descripcion_larga}}" class="form-control" placeholder = "Editar Descripcion Larga." autofocus>
                    </div>
                    
                    <input type="submit" name="created_at" class="btn btn-success btn-block" value="Actualizar datos.">
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
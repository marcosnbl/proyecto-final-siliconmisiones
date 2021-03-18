
        <form class="formulario sombra" action="{{route('contacto.store')}}" method="POST">
            @csrf
            <fieldset>
                <legend>Contáctanos
                </legend>
                <p class="card-text">Complete el formulario y nos pondremos en contácto lo más pronto posible</p>

                <div class="contenedor-campos" >
                    <div class="campo">
                        <label class="label" for="name">Nombre </label>
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
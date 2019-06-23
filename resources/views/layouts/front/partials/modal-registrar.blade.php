<div class="modal fade bd-example-modal-lg" id="registrar" tabindex="-1" role="dialog"
     aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content" style="width: 450px; height: 500px; top: 90px;">
            <div class="modal-body">
                <div class="login-form" id="registrar">
                    <div class="avatar">
                        <img src="{{asset('img/icon-user.png')}}" alt="">
                    </div>

                    <h1 style="font-family: 'Shadows Into Light', cursive; "class="text-center">Ingrese sus Datos</h1>

                    <form action="{{route('usuario.store')}}" method="POST">
                        @csrf
                        @method('POST')
                        <div class="form-group">
                            <input type="text" class="form-control" name="nombre" placeholder="Nombre"
                                   required="required">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="apellido" placeholder="Apellido"
                                   required="required">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="usuario" placeholder="Nombre Usuario"
                                   required="required">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="identificacion"
                                   placeholder="Numero de identificación" required="required">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="email" placeholder="Email"
                                   required="required">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="contrasena" placeholder="Contraseña"
                                   required="required">
                        </div>
                        <div class="form-group">
                            <button style="background-color: #EFA3BB;" type="submit" class="btn btn-primary btn-lg btn-block">Registrar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade bd-example-modal-lg" id="login" tabindex="-1" role="dialog"
     aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="login-form" id="login">
                    <form method="POST" action="{{url('login')}}">
                        @csrf
                        @method('POST')
                        <div class="avatar">
                            <img src="{{asset('img/icon-user.png')}}" alt="">
                        </div>

                        <h1 class="text-center">Inicio de Sesión</h1>

                        <div class="form-group">
                            <input type="text" class="form-control" name="email" placeholder="Usuario"
                                   required="required">
                        </div>

                        <div class="form-group">
                            <input type="password" class="form-control" name="contrasena" placeholder="Contraseña"
                                   required="required">
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-lg btn-block">Ingresar</button>
                        </div>

                        <div class="clearfix">
                            <label class="pull-left checkbox-inline"><input type="checkbox"> Recuedame</label>
                            <br>
                            <a href="#" class="pull-right">Olvidaste tu contraseña?</a>
                        </div>
                        <label class="text-center small">No tienes cuenta? </label><a data-dismiss="modal" class="link"
                                                                                      data-toggle="modal"
                                                                                      data-target="#registrar" href="">
                            Registrate!</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
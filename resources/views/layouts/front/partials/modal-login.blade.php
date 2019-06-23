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

                        <h1 style="font-family: 'Shadows Into Light', cursive; "class="text-center">Inicio de Sesión</h1>

                        <div class="form-group">
                            <input type="text" class="form-control" name="email" placeholder="Usuario"
                                   required="required">
                        </div>

                        <div class="form-group">
                            <input type="password" class="form-control" name="contrasena" placeholder="Contraseña"
                                   required="required">
                        </div>

                        <div class="form-group">
                            <button style="background-color: #EFA3BB; font-size: 20px; color: #000000;" type="submit" class="btn btn-primary btn-lg btn-block">Ingresar</button>
                        </div>

                        <div class="clearfix">
                            <label  style="color: #000000; font-size: 20px;" class="pull-left checkbox-inline"><input type="checkbox"> Recuedame</label>
                            <br>
                            <a href="#"  style="color: #000000; font-size: 15px;" class="pull-right">Olvidaste tu contraseña?</a>
                        </div>
                        <label style="color: #000000; font-size: 15px;" class="text-center small ">No tienes cuenta? </label><a  style="color: #000000;font-size: 15px;" data-dismiss="modal" class="link"
                                                                                      data-toggle="modal"
                                                                                      data-target="#registrar" href="">
                            Registrate!</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
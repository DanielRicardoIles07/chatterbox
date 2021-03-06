<div class="modal fade" id="modal-login" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><img src="{{asset ('img/loglogin.png')}}"><l style="color:black">Bab</l><l style="color:rgb(0, 185, 254);">bler</l></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="POST" action="{{ route('login') }}">
        {{ csrf_field() }}
            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                <label for="email"  style="color:black">Correo Electronico</label>
                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>
                    @if ($errors->has('email'))
                        <span class="help-block">
                            <strong style="color: red">{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
            </div>
            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
              <label for="password" style="color:black">Contraseña</label>
                <input id="password" type="password" class="form-control" name="password" required>
                @if ($errors->has('password'))
                    <span class="help-block">
                        <strong style="color: red">{{ $errors->first('password') }}</strong>
                    </span>
                @endif
            </div>
            <div class="form-group">
            <div class="col-md-5 col-md-offset-4">
                <div class="checkbox">
                                    <label style="color:black">
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                    </label>
                </div>
            </div>
            </div>         
      </div>
      <div class="modal-footer">
        <a class=" col-md-8 btn btn-link" href="{{ route('password.request') }}">¿Olvidaste tu contraseña?</a>
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary">Iniciar</button>
        </form>
      </div>
    </div>
  </div>
</div>
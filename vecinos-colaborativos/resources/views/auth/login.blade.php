<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="/css/styles.css">
    <script src="{{ asset('js/app.js') }}" defer></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
  </head>
  <body>

    <div class="container">
      <section class="header-home">
        <a class="logo-home" href="/"><img src="/images/Logo70x70.png" alt="logo-de-vecinos-colaborativos"></a>
        <div class="login-register">
            <a href="/login">Iniciar Sesión</a>
            <a href="/register">Registrate</a>
        </div>
      </section>

      <div class="register-box">
        <section class="seccion-a">
          <div class="logo-container">
            <img class="register-logo"src="/images/Logo.png"alt="logo-de-vecinos-colaborativos">
          </div>
          <h1 class="register-vecino">Vecinos Colaborativos</h1>
        </section>
        <h3 class="login-title">Iniciar Sesión</h3>
        <div class="formulario">
          <form action="{{ route('login') }}" method="post">
            {{ csrf_field() }}
            <div class="form-element">
              <label for="email">
                <b>Correo Electrónico:</b>
              </label>
              <input class="form" type="email" name="email" id="email" value="{{ old('email') }}">
              @error('email')
              <span class="register-alert" role="alert">
                <strong>{{ $message }}</strong>
              </span>
              @enderror
            </div>
            <div class="form-element">
              <label for="password">
                <b>Contraseña:</b>
              </label>
              <input class="form" type="password" name="password" id="password">
              @error('password')
              <span class="register-alert" role="alert">
                <strong>{{ $message }}</strong>
              </span>
              @enderror
            </div>
            <div class="form-element">
              {{-- <label for="rememberUser">
                <input type="checkbox" name="rememberUser" class="rememberUser" id="rememberUser" value="">
                Recordarme
              </label> --}}
              <label class="form-check-label" for="remember">
                <input class="rememberUser" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                Recordarme
              </label>
            </div>
            {{-- <div class="form-element">
              <input class="boton" type="submit" value="Ingresar">
            </div> --}}
            <div class="form-element">
              <button type="submit" class="boton">
                Ingresar
              </button>
            </div>
            @if (Route::has('password.request'))
            <a class="" style="color:rgb(107, 55, 148);" href="{{ route('password.request') }}">
              ¿Olvidaste tu contraseña?
            </a>
            @endif
          </form>
        </div>
        <p class="p-condiciones">Al registrarte, aceptas nuestras <a class="register-condiciones" href="tyc">Condiciones</a>, la <a class="register-condiciones" href="tyc">Política de datos </a> y
        la <a class="register-condiciones" href="tyc"> Política de cookies</a>.</p>
      </div>

      </div>

      <section class="footer">
          <a href="faq">Preguntas Frecuentes</a>
          <a href="tyc">Términos y Condiciones</a>
      </section>
    </div>


  </body>
</html>

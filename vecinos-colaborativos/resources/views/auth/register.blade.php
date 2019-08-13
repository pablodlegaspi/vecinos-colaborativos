<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="/css/styles.css">
    <script src="{{ asset('js/app.js') }}" defer></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
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

      <h3 class="crea-tu-cuenta">Creá tu Cuenta</h3>

      <div class="formulario">
        <form action="/register" method="post" enctype="multipart/form-data">
          @csrf
          <div class="form-element">
            <label for="first_Name"
            @error ('first_name')
							style="color:red;">
						@enderror
              <b>Nombre:</b>
            </label>
            <input class="form" type="text" name="first_name" id="first_Name" value="{{old('first_name')}}">
            @error ('first_name')
              <div class="register-alert">
                {{ $errors->first('first_name') }}
              </div>
						@enderror
          </div>
          <div class="form-element">
            <label for="last_name"
            @error ('last_name')
							style="color:red;">
						@enderror
              <b>Apellido:</b>
            </label>
            <input class="form" type="text" name="last_name" id="last_name" value="{{old('last_name')}}">
            @error ('last_name')
              <div class="register-alert">
                {{ $errors->first('last_name') }}
              </div>
						@enderror
          </div>
          <div class="form-element">
            <label for="email"
            @error ('email')
							style="color:red;">
						@enderror
              <b>Correo Electrónico:</b>
            </label>
            <input class="form" type="email" name="email" id="email" value="{{old('email')}}">
          </div>
          <div class="form-element">
            <label for="password"
            @error ('password')
							style="color:red;">
						@enderror
              <b>Contraseña:</b>
            </label>
            <input class="form" type="password" name="password" id="password">
            @error ('password')
              <div class="register-alert">
                {{ $errors->first('password') }}
              </div>
						@enderror
          </div>
          <div class="form-element">
            <label for="password_confirmation"
            @error ('password_confirmation')
							style="color:red;">
						@enderror
              <b>Repetir contraseña:</b>
            </label>
            <input class="form" type="password" name="password_confirmation" id="password_confirmation">
            @error ('password')
              <div class="register-alert">
                {{ $errors->first('password') }}
              </div>
						@enderror
          </div>
          <div class="form-element">
            <label class="country-label" for="country"
            @error ('country')
							style="color:red;">
						@enderror
              <b>País de Nacimiento:</b>
              <select class="countries" name="country">
                <option value="">Elegí un país</option>
                <option value="ar">Argentina</option>
              </select>
            </label>
            @error ('country')
              <div class="register-alert">
                {{ $errors->first('country') }}
              </div>
						@enderror
          </div>
          <div class="form-element">
            <label class="profile-pic-label-container" for="avatar"
            @error ('avatar')
              style="color:red;">
            @enderror
              <b>Imagen de perfil:</b>
              <label class="profile-pic-label" for="avatar">
                <i class="fas fa-file-upload"></i>
                Mi Archivo
              </label>
              <input class"form" type="file" name="avatar" id="avatar" style="display: none;">
            </label>
            @error ('avatar')
              <div class="register-alert">
                {{ $errors->first('avatar') }}
              </div>
						@enderror
          </div>
          <div class="form-element">
            <input class="boton" type="submit" value="Registrarme">
          </div>
        </form>
      </div>
      <p class="p-condiciones">Al registrarte, aceptas nuestras <a class="register-condiciones" href="/tyc">Condiciones</a>, la <a class="register-condiciones" href="/tyc">Política de datos </a> y
      la <a class="register-condiciones" href="/tyc"> Política de cookies</a>.</p>
    </div>

    <section class="footer">
        <a href="/faq">Preguntas Frecuentes</a>
        <a href="/tyc">Términos y Condiciones</a>
    </section>

  </div>

  </body>
</html>

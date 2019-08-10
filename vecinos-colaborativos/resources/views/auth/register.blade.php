<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="/css/styles.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
  </head>
  <body>

  <div class="container">

    <section class="header-home">
      <a class="logo-home" href="/home"><img src="/images/Logo70x70.png" alt="logo-de-vecinos-colaborativos"></a>
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
        <form action="" method="post" enctype="multipart/form-data">
          <div class="form-element">
            <label for="first_Name">
              <b>Nombre:</b>
            </label>
            <input class="form" type="text" name="first_name" id="first_Name">
          </div>
          <div class="form-element">
            <label for="last_Name">
              <b>Apellido:</b>
            </label>
            <input class="form" type="text" name="last_name" id="last_Name">
          </div>
          <div class="form-element">
            <label for="email">
              <b>Correo Electrónico:</b>
            </label>
            <input class="form" type="email" name="email" id="email">
          </div>
          <div class="form-element">
            <label for="password">
              <b>Contraseña:</b>
            </label>
            <input class="form" type="password" name="password" id="password">
          </div>
          <div class="form-element">
            <label for="rePassword">
              <b>Repetir contraseña:</b>
            </label>
            <input class="form" type="password" name="rePassword" id="rePassword">
          </div>
          <div class="form-element">
            <label class="country-label" for="country">
              <b>País de Nacimiento:</b>
              <select class="countries" name="country">
                <option value="">Elegí un país</option>
                @foreach ($countries as $key => $country)
                  <option value="{{$keyy}}">{{$country}}</option>
                @endforeach
              </select>
            </label>
          </div>
          <div class="form-element">
            <label class="profile-pic-label-container" for="avatar">
              <b>Imagen de perfil:</b>
              <label class="profile-pic-label" for="avatar">
                <i class="fas fa-file-upload"></i>
                Mi Archivo
              </label>
              <input class"form" type="file" name="avatar" id="avatar" style="display: none;">
            </label>
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

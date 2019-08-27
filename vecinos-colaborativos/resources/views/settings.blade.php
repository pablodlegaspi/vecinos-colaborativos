@extends('layouts.template-timeline')

@section('feed')

  <section class="timeline-center">

  <div class="settings">
    <h3>Configuración</h4>
    <div class="user-information">
      <ul>
        <li>Nombre Completo: <b>{{Auth::user()->getFullName()}}</b></li>
        <li>Correo Electrónico: <b>{{Auth::user()->email}}</b> </li>
        <li>País de Nacimiento: <b id="country-in-settings"></b></li>
      </ul>
    </div>
    <h3>Cambiar datos personales:</h3>

    <form class="change-information" action="" method="post" enctype="multipart/form-data">

      <div class="form-element">
        <label for="fullName">
          <b>Nombre Completo:</b>
        </label>
        <input class="form" type="text" name="newFullName" id="fullName" placeholder="Ingresa tu nuevo nombre...">
      </div>

      <div class="form-element">
        <label for="password">
          <b>Contraseña:</b>
        </label>
        <input class="form" type="password" name="password" id="password" placeholder="Ingresa tu contraseña...">
        <input class="form" type="password" name="newPassword" id="password" placeholder="Ingresa tu contraseña nueva...">
        <input class="form" type="password" name="reNewPassword" id="password" placeholder="Repite tu contraseña nueva...">
      </div>

      <div class="form-element">
        <label for="country">
          <b>Nuevo País de Nacimiento:</b>
          <select class="countries" name="country">
            <option value="">Elegí un país</option>
          </select>
        </label>
      </div>

      <div class="form-element">
        <label for="profilePic" class="profile-pic-label-container">
          <b>Nueva Imagen de perfil:</b>
          <label class="profile-pic-label" for="profilePic">
            <i class="fas fa-file-upload"></i>
            Mi Archivo
          </label>
          <input class"form" type="file" name="profilePic" id="profilePic" value="" style="display: none;">
        </label>
      </div>

      <div class="form-element">
        <input class="boton" type="submit" value="Guardar Cambios">
      </div>

    </form>

  </div>

</section>

<script src="{{ asset('js/getCountries.js') }}"></script>

@endsection

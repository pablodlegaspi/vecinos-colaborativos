@extends('layouts.template-timeline')

@section('feed')

  <section class="timeline-center">

  <div class="settings">
    {{-- <h3>Configuración</h4>
    <div class="user-information">
      <ul>
        <li>Nombre Completo: <b>{{Auth::user()->getFullName()}}</b></li>
        <li>Correo Electrónico: <b>{{Auth::user()->email}}</b> </li>
        <li>País de Nacimiento: <b  id="country-in-settings"></b></li>
      </ul>
    </div> --}}
    <h3>Cambiar datos personales:</h3>

    <form class="change-information" action="{{route('updateUser')}}" method="post" enctype="multipart/form-data">
      {{-- {{route('updateUser')}} --}}
        @csrf
        {{ method_field('put') }}

      <div class="form-element">
        <label for="first_name"
        @error ('first_name')
          style="color:red;">
        @enderror
          <b>Nombre:</b>
        </label>
        <input class="form" type="text" name="first_name" id="first_name" placeholder="Ingresa tu nuevo nombre...">
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
        <input class="form" type="text" name="last_name" id="last_name" placeholder="Ingresa tu nuevo apellido...">
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
        <input class="form" type="email" name="email" id="email" placeholder="Ingresa tu nuevo correo electrónico...">
        @error ('email')
          <div class="register-alert">
            {{ $errors->first('email') }}
          </div>
        @enderror
      </div>

      <div class="form-element">
        <label for="password"
        @error ('password')
          style="color:red;">
        @enderror
          <b>Contraseña:</b>
        </label>
        <input class="form" type="password" name="password" id="password" placeholder="Ingresa tu contraseña nueva...">
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
        <input class="form" type="password" name="password_confirmation" id="password_confirmation" placeholder="Repite tu contraseña nueva...">
        @error ('password')
          <div class="register-alert">
            {{ $errors->first('password') }}
          </div>
        @enderror
      </div>

      <div class="form-element">
        <label for="country"
        @error ('country')
          style="color:red;">
        @enderror
          <b>Nuevo País de Nacimiento:</b>
          <select class="countries" name="country">
            <option value="">Elegí un país</option>
          </select>
        </label>
        @error ('country')
          <div class="register-alert">
            {{ $errors->first('country') }}
          </div>
        @enderror
      </div>

      <div class="form-element">
        <label for="avatar" class="profile-pic-label-container"
        @error ('avatar')
          style="color:red;">
        @enderror
          <b>Nueva Imagen de perfil:</b>
          <label class="profile-pic-label" for="avatar">
            <i class="fas fa-file-upload"></i>
            Mi Archivo
          </label>
          <input class"form" type="file" name="avatar" id="avatar" value="" style="display: none;">
        </label>
        @error ('avatar')
          <div class="register-alert">
            {{ $errors->first('avatar') }}
          </div>
        @enderror
      </div>

      <div class="form-element">
        <input class="boton" type="submit" value="Guardar Cambios">
      </div>

    </form>

  </div>

</section>

<script src="{{ asset('js/getCountries.js') }}"></script>

@endsection

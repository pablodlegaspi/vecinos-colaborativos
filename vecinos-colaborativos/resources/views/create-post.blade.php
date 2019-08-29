@extends('layouts.template-timeline')

@section('feed')

  <section class="timeline-center">

  <div class="publicacion">
    <form class="" action="/create-post" method="post" enctype="multipart/form-data">
      @csrf
      <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
      <div class="usuario-foto-publicacion">
        <a href="#">
          <div class="avatar-en-publicacion" style="
          height: 34px;
          width: 34px;
          background-image: url('{{ '/storage/avatars/' . Auth::user()->avatar }}');
          background-size: cover;
          background-position: center;
          border-radius: 100%;">
          </div>
          <span>{{ Auth::user()->first_name . ' ' . Auth::user()->last_name}}</span>
        </a>
      </div>
      <div class="fecha-hora">
        <a href="#">4 de junio de 2019</a>
      </div>
      <div class="title-input-div">
        <input class="title-input" type="text" name="title" value="" placeholder="Título de la publicación">
      </div>
      @error ('title')
        <i style="color: red;"> {{ $errors->first('title') }}</i>
      @enderror
      <div class="description-input-div">
        {{-- <input class="description-input" type="" name="description" value="" placeholder="Acá podés escribir lo que quieras, si querés..."> --}}
        <textarea class="description-input" name="description" rows="8" cols="80" placeholder="Descripción..."></textarea>
      </div>
      @error ('description')
        <i style="color: red;"> {{ $errors->first('description') }}</i>
      @enderror
      <div class="multimedia-input">
        <label class="multimedia" for="image">
          <i class="fas fa-file-upload"></i>
          Imágen
        </label>
        <input class"" type="file" name="image" id="image" style="display: none;">

        @error ('image')
          <i style="color: red;"> {{ $errors->first('image') }}</i>
        @enderror

        {{-- <label class="multimedia" for="video">
          <i class="fas fa-file-upload"></i>
          Video
        </label>
        <input class"" type="file" name="video" id="video" style="display: none;">

        @error ('video')
          <i style="color: red;"> {{ $errors->first('video') }}</i>
        @enderror --}}
      </div>
      <div class="publicar">
        <button type="submit" class="boton-publicar" name="publicar">Publicar</button>
      </div>

    </form>
  </div>

  </section>

@endsection

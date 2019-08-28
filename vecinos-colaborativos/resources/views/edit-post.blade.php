@extends('layouts.template-timeline')

@section('feed')

  <section class="timeline-center">

  <div class="publicacion">
    <form class="" action="/edit-post/{{$post->id}}" method="post" enctype="multipart/form-data">
      @csrf
      <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
      <div class="usuario-foto-publicacion">
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
            <span>{{ Auth::user()->getFullName()}}</span>
          </a>
        </div>
        <a href="/edit-post/{{$post->id}}" class="edit-post"><i class="fas fa-edit"></i></a>
      </div>
      <div class="fecha-hora">
        <a href="#">
        {{-- ESTA FUNCION DEVUELVE SOLAMENTE EL AÑO,MES Y DIA:
        @php
          $time = $post->created_at;
          $time = strstr($time, '2019-08-22'); //gets all text from needle on
          $time = strstr($time, " ", true); //gets all text before needle
          echo $time;
        @endphp --}}
        {{$post->created_at}}
      </a>
      </div>
      <div class="title-input-div">
        <input class="title-input" type="text" name="title" value="{{$post->title}}" >
      </div>
      <div class="description-input-div">
        {{-- <input class="description-input" type="" name="description" value="" placeholder="Acá podés escribir lo que quieras, si querés..."> --}}
        <textarea class="description-input" name="description" rows="8" cols="80">{{$post->description}}</textarea>
      </div>

      @if ($post->image)
        <div class="multimedia-publicacion">
          <img src="/storage/post-files/{{$post->image}}" alt="foto-de-publicación">
        </div>
      @endif
      @if ($post->video)
        <div class="multimedia-publicacion">
          <img src="{{$post->video}}" alt="foto-de-publicación">
        </div>
      @endif

      <div class="multimedia-input">
        <label class="multimedia" for="image">
          <i class="fas fa-file-upload"></i>
          Cambiar Imágen
        </label>
        <input class"" type="file" name="image" id="image" style="display: none;">

        @error ('image')
          <i style="color: red;"> {{ $errors->first('image') }}</i>
        @enderror

        <label class="multimedia" for="removeImage">
          <input type="checkbox" name="removeImage" id="removeImage" value="remove">Quitar Imágen
        </label>

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
        <a class="volver" href="/profile">Volver</a>
      </div>
      <div class="publicar">
        <button type="submit" class="boton-publicar" name="edit">Guardar</button>
      </div>

    </form>
  </div>

  </section>

@endsection

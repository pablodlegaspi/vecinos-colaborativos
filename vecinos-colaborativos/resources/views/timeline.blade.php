@extends('layouts.template-timeline')

@section('feed')

  <section class="timeline-center">

    {{-- @foreach ($posts as $post)

      <div class="publicacion">
        <div class="usuario-foto-publicacion">
          <div class="usuario-foto-publicacion">
            <a href="#">
              <div class="avatar-en-publicacion" style="
              height: 34px;
              width: 34px;
              background-image: url('{{ '/storage/avatars/' . $post->user->avatar }}');
              background-size: cover;
              background-position: center;
              border-radius: 100%;">
              </div>
              <span>{{ $post->user->getFullName()}}</span>
            </a>
          </div>

          <form class="delete-post" action="{{ route('deletePost') }}" method="post">
            @csrf
            {{ method_field('delete') }}
            <button type="submit" style="
            background:none;
            border:none;
            font-size:1em;
            color:grey;
            cursor: pointer;
            ">
            <i class="fas fa-trash-alt"></i>
            <input type="hidden" name="post_id" value="{{ $post->id }}">
            </button>
          </form>

          <a href="edit-post/{{$post->id}}" class="edit-post"><i class="fas fa-edit"></i></a>
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
          {{-- {{$post->created_at}}
        </a>
        </div>
        <div class="titulo-publicacion">
          <span>{{$post->title}}</span>
        </div>
        <div class="texto-publicacion">
          <span>{{$post->description}}</span>
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
        <div class="ver-publ-container">
          <div class="ir-a-publicacion">
            <a href="/post/{{$post->id}}">Ver publicación</a>
          </div>
        </div>
      </div>

    @endforeach --}}


    <div class="publicacion">
    <div class="usuario-foto-publicacion">
      <a href="#"> <img class="foto-perfil-en-publicacion" src="/images/user-24px.png" alt="foto-de-perfil"> <span>Nombre de Usuario</span> </a>
    </div>
    <div class="fecha-hora">
      <a href="#">4 de junio de 2019</a>
    </div>
    <div class="texto-publicacion">
      <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo ...</span>
      <div class="multimedia-publicacion">
        <img src="/images/img-02.jpg" alt="foto-de-cohousing-exterior">
      </div>
    </div>
    <div class="ver-publ-container">
      <div class="ir-a-publicacion">
        <a href="#">Ver publicación</a>
      </div>
    </div>
  </div>
  </section>
@endsection

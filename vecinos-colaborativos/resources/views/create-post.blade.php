@extends('layouts.template-timeline')

@section('feed')

  <section class="timeline-center">

  {{-- <div class="publicacion">
    <div class="usuario-foto-publicacion">
      <a href="#"> <img class="foto-perfil-en-publicacion" src="/images/user-24px.png" alt="foto-de-perfil"> <span>Nombre de Usuario</span> </a>
    </div>
    <div class="fecha-hora">
      <a href="#">4 de junio de 2019</a>
    </div>
    <div class="texto-publicacion">
      <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo ...</span>
    </div>
    <div class="ver-publ-container">
      <div class="ir-a-publicacion">
        <a href="#">Ver publicación</a>
      </div>
    </div>
  </div> --}}

  <div class="publicacion">
    <form class="" action="/create-post" method="post" enctype="multipart/form-data">
      <div class="usuario-foto-publicacion">
        <a href="#"> <img class="foto-perfil-en-publicacion" src="/images/user-24px.png" alt="foto-de-perfil"> <span>{{ Auth::user()->first_name . ' ' . Auth::user()->last_name}}</span> </a>
      </div>
      <div class="fecha-hora">
        <a href="#">4 de junio de 2019</a>
      </div>
      <div class="title-input">
        <input type="text" name="title" value="" placeholder="Título de la publicación">
      </div>
      <div class="description-input">
        <input type="text" name="description" value="" placeholder="Acá podés escribir lo que quieras, si querés...">
      </div>
      <div class="multimedia-input">
        <input type="file" name="image" value="">
        <input type="file" name="video" value="">
      </div>

    </form>
  </div>

  </section>

@endsection

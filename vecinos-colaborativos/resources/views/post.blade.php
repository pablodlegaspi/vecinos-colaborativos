@extends('layouts.template-timeline')

  @section('feed')

    <section class="timeline-center">

          <div class="publicacion">
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
              {{$post->created_at}}
              </a>
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
                <a href="/timeline">Volver</a>
              </div>
            </div>
          </div>

      </section>

  @endsection

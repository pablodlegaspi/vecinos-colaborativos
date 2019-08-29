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

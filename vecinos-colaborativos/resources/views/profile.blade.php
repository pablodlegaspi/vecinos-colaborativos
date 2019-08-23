@extends('layouts.template-timeline')

  @section('profile-section')

    <section class="perfil-container">
      <div class="perfil-contenido">
        <div class="foto-nombre-y-redes">
          <a href="/profile">
            <div class="foto-en-perfil" style="
            width: 180px;
            height: 180px;
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            align-items: center;
            border: 5px black;
            background-image: url('{{ '/storage/avatars/' . Auth::user()->avatar }}');
            background-size: cover;
            background-position: center;
            border-radius: 100%;">
          </div>
        </a>

        <div class="datos-en-perfil">
          <a href="/profile">{{ Auth::user()->first_name . ' ' . Auth::user()->last_name}}</a>
          <ul>
            <li class="fb"><a href="#"><i class="fab fa-facebook-f"></a></i></li>
            <li class="tw"><a href="#"><i class="fab fa-twitter"></i></a></li>
            <li class="ig"><a href="#"><i class="fab fa-instagram"></a></i></li>
            <li class="li"><a href="#"><i class="fab fa-linkedin-in"></a></i></li>
          </ul>
        </div>
        <div class="descripcion-perfil">
          <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt. </span>
        </div>
      </div>
      <div class="menu-perfil">
        <ul>
          <li><a href="/contacts">Contactos</a></li>
          <li><a href="#">Grupos</a></li>
          <li><a href="#">Proyectos</a></li>
          <li><a href="#">Intereses</a></li>
          <li><a href="/settings">Configuración</a></li>
        </ul>
      </div>
    </div>
  </section>

  @endsection

  @section('feed')

    <section class="timeline-center">

      @if ($posts != null)

        @foreach ($posts as $post)

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

              <form style="" action="/delete/{{ $post->id }}" method="post">
      					@csrf
      					{{ method_field('delete') }}
      					<button type="submit" style="
                background:none;
                border:none;
                font-size:1em;
                color:grey;
                cursor: pointer;
                ">
                <i class="fas fa-trash-alt">
                <input type="hidden" name="" value="{{ $post->id }}">
                </button>
      				</form>

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

        @endforeach

      @else

        <div class="publicacion">
          <span style="margin:auto;">Aún no tienes publicaciones<span>
          </div>

      @endif


      {{-- <div class="publicacion">
        <div class="usuario-foto-publicacion">
          <a href="#"> <img class="foto-perfil-en-publicacion" src="/images/user-24px.png" alt="foto-de-perfil"> <span>{{ Auth::user()->first_name . ' ' . Auth::user()->last_name}}</span> </a>
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

      <div class="publicacion">
        <div class="usuario-foto-publicacion">
          <a href="#"> <img class="foto-perfil-en-publicacion" src="/images/user-24px.png" alt="foto-de-perfil"> <span>{{ Auth::user()->first_name . ' ' . Auth::user()->last_name}}</span> </a>
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
      </div>

      <div class="publicacion">
        <div class="usuario-foto-publicacion">
          <a href="#"> <img class="foto-perfil-en-publicacion" src="/images/user-24px.png" alt="foto-de-perfil"> <span>{{ Auth::user()->first_name . ' ' . Auth::user()->last_name}}</span> </a>
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
      </div> --}}

    </section>

  @endsection

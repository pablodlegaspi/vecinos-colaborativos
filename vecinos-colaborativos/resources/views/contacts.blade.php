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
          <a href="/profile">Nombre de Usuario</a>
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
        <div class="contacto">
          <div class="contacto-izq">
            <a href="#"><img src="/images/user-120x120.png" alt="foto-de-contacto"></a>
          </div>
          <div class="contacto-der">
            <div class="nombre-contacto">
              <a href="#" class="nombre-contacto">Nombre de Usuario</a>
            </div>
            <ul>
              <li class="fb"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
              <li class="tw"><a href="#"><i class="fab fa-twitter"></i></a></li>
              <li class="ig"><a href="#"><i class="fab fa-instagram"></i></a></li>
              <li class="li"><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
            </ul>
          </div>
        </div>

        <div class="contacto">
          <div class="contacto-izq">
            <a href="#"><img src="/images/user-120x120.png" alt="foto-de-contacto"></a>
          </div>
          <div class="contacto-der">
            <div class="nombre-contacto">
              <a href="#" class="nombre-contacto">Nombre de Usuario</a>
            </div>
            <ul>
              <li class="fb"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
              <li class="tw"><a href="#"><i class="fab fa-twitter"></i></a></li>
              <li class="ig"><a href="#"><i class="fab fa-instagram"></i></a></li>
              <li class="li"><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
            </ul>
          </div>
        </div>

        <div class="contacto">
          <div class="contacto-izq">
            <a href="#"><img src="/images/user-120x120.png" alt="foto-de-contacto"></a>
          </div>
          <div class="contacto-der">
            <div class="nombre-contacto">
              <a href="#" class="nombre-contacto">Nombre de Usuario</a>
            </div>
            <ul>
              <li class="fb"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
              <li class="tw"><a href="#"><i class="fab fa-twitter"></i></a></li>
              <li class="ig"><a href="#"><i class="fab fa-instagram"></i></a></li>
              <li class="li"><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
            </ul>
          </div>
        </div>

        <div class="contacto">
          <div class="contacto-izq">
            <a href="#"><img src="/images/user-120x120.png" alt="foto-de-contacto"></a>
          </div>
          <div class="contacto-der">
            <div class="nombre-contacto">
              <a href="#" class="nombre-contacto">Nombre de Usuario</a>
            </div>
            <ul>
              <li class="fb"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
              <li class="tw"><a href="#"><i class="fab fa-twitter"></i></a></li>
              <li class="ig"><a href="#"><i class="fab fa-instagram"></i></a></li>
              <li class="li"><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
            </ul>
          </div>
        </div>

        <div class="contacto">
          <div class="contacto-izq">
            <a href="#"><img src="/images/user-120x120.png" alt="foto-de-contacto"></a>
          </div>
          <div class="contacto-der">
            <div class="nombre-contacto">
              <a href="#" class="nombre-contacto">Nombre de Usuario</a>
            </div>
            <ul>
              <li class="fb"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
              <li class="tw"><a href="#"><i class="fab fa-twitter"></i></a></li>
              <li class="ig"><a href="#"><i class="fab fa-instagram"></i></a></li>
              <li class="li"><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
            </ul>
          </div>
        </div>

        <div class="contacto">
          <div class="contacto-izq">
            <a href="#"><img src="/images/user-120x120.png" alt="foto-de-contacto"></a>
          </div>
          <div class="contacto-der">
            <div class="nombre-contacto">
              <a href="#" class="nombre-contacto">Nombre de Usuario</a>
            </div>
            <ul>
              <li class="fb"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
              <li class="tw"><a href="#"><i class="fab fa-twitter"></i></a></li>
              <li class="ig"><a href="#"><i class="fab fa-instagram"></i></a></li>
              <li class="li"><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
            </ul>
          </div>
        </div>
    </section>

  @endsection

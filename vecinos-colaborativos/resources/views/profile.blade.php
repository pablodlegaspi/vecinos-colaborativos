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
            background-image: url('/images/user-160x160.png');
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
      <div class="publicacion">
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
      </div>

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

      <div class="publicacion">
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
      </div>

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

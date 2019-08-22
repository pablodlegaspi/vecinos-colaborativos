<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/styles.css">
    <script src="{{ asset('js/app.js') }}" defer></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vecinos Colaborativos</title>
  </head>
  <body>
    <div class="container">
      <section class="header-timeline">
        <div class="sub-header-timeline">

          <a class="logo" href="/timeline"><img src="/images/Logo50x50.png" alt="logo-de-vecinos-colaborativos"></a>

          <div class="buscador-area">
            <input class="buscador" type="text" name="buscador" value="" placeholder="Buscar...">
            <a href="#"><i class="fas fa-search"></i></a>
          </div>

          <div class="buscador-lupa">
            <a href="#"><i class="fas fa-search"></i></a>
          </div>

          <div class="timeline-anchor">
            <a href="/"><i class="fas fa-home"></i></a>
          </div>

          <div class="menu-timeline">
            <a href="/"><i class="fas fa-home"></i></a>
            <div class="separador">
              <span>|</span>
            </div>
            <a href="/contactos"><i class="fas fa-user-friends"></i></a>
            <div class="separador">
              <span>|</span>
            </div>
            <a href="/create-post"><i class="fas fa-user-plus"></i></a>
            <div class="separador">
              <span>|</span>
            </div>
            <a href="/create-post"><i class="fas fa-plus"></i></a>
            <div class="separador">
              <span>|</span>
            </div>
            <a href="#"><i class="fas fa-exclamation"></i></a>
          </div>

          <div class="menu-hamburguesa">
            <a href="#"><i class="fas fa-bars"></i></a>
            <div class="dropdown-content">
              <a href="/contactos">Mis Contactos</a>
              <a href="#">Agregar Contactos</a>
              <a href="#">Crear</a>
              <a href="#">Notificaciones</a>
            </div>
          </div>

          <div class="perfil-timeline">
            <a href="/profile"> <span>{{ Auth::user()->first_name . ' ' . Auth::user()->last_name}}</span>
              <div class="profile-pic-in-navbar" style="
              height: 34px;
              width: 34px;
              background-image: url('{{ '/storage/avatars/' . Auth::user()->avatar }}');
              background-size: cover;
              background-position: center;
              border-radius: 100%;">
              </div>
            </a>
          </div>

          {{-- <div class="logout">
            <a href="/logout"><i class="fas fa-sign-out-alt"></i></a>
          </div> --}}
          <form id="logout-form" action="{{ route('logout') }}" method="POST" >
              @csrf
              <button class= "logout" type="submit" name="button"
              style="
              background: none;
            	border: none;
            	cursor: pointer;
              color: white;">
              <i class="fas fa-sign-out-alt"></i></button>
          </form>

        </div>

      </section>

      @yield('profile-section')

      <div class="timeline-container">

      <section class="timeline-left">
        <div class="contenido-usuario">
          <div class="tus-proyectos">
            <h6>Tu proyectos:</h6>
            <hr>
            <div class="proyecto">
              <div class="proyecto-izq">
                <a href="#"> <img src="/images/img-02-80x80.jpg" alt="foto-cohousing-exterior"> </a>
              </div>
              <div class="proyecto-der">
                <a href="#">Nombre del proyecto</a>
                <p>Creado el 4 de junio de 2018</p>
              </div>
            </div>
          </div>
        </div>

        <div class="contenido-usuario">
          <div class="tus-grupos">
            <h6>Tus grupos:</h6>
            <hr>
            <div class="proyecto">
              <div class="proyecto-izq">
                <a href="#"> <img src="/images/img-02-80x80.jpg" alt="foto-cohousing-exterior"> </a>
              </div>
              <div class="proyecto-der">
                <a href="#">Nombre del grupo</a>
                <p>Creado el 4 de junio de 2018</p>
              </div>
            </div>
            <hr>
            <div class="proyecto">
              <div class="proyecto-izq">
                <a href="#"> <img src="/images/img-02-80x80.jpg" alt="foto-cohousing-exterior"> </a>
              </div>
              <div class="proyecto-der">
                <a href="#">Nombre del grupo</a>
                <p>Creado el 4 de junio de 2018</p>
              </div>
            </div>
            <hr>
            <div class="proyecto">
              <div class="proyecto-izq">
                <a href="#"> <img src="/images/img-02-80x80.jpg" alt="foto-cohousing-exterior"> </a>
              </div>
              <div class="proyecto-der">
                <a href="#">Nombre del grupo</a>
              <p>Creado el 4 de junio de 2018</p>
              </div>
            </div>
            <hr>
            <div class="proyecto">
              <div class="proyecto-izq">
                <a href="#"> <img src="/images/img-02-80x80.jpg" alt="foto-cohousing-exterior"> </a>
              </div>
              <div class="proyecto-der">
                <a href="#">Nombre del grupo</a>
                <p>Creado el 4 de junio de 2018</p>
              </div>
            </div>
          </div>
        </div>
      </section>


        @yield('feed')


      <section class="timeline-right">
        <div class="sugerencias">
          <div class="crear-nuevo">
            <a href="#"><i class="fas fa-plus"></i></a>
            <a href="#">Crear un nuevo proyecto</a>
          </div>
        </div>
        <div class="sugerencias">
          <div class="crear-nuevo">
            <a href="#"><i class="fas fa-plus"></i></a>
            <a href="#">Crear un nuevo grupo</a>
          </div>
        </div>

        <div class="sugerencias">
          <h6>Proyectos que podrían interesarte:</h6>
          <hr>
          <div class="proyecto">
            <div class="proyecto-izq">
              <a href="#"> <img src="/images/img-02-80x80.jpg" alt="foto-cohousing-exterior"> </a>
            </div>
            <div class="proyecto-der">
              <a href="#">Nombre del proyecto</a>
              <p>Creado el 4 de junio de 2018</p>
            </div>
          </div>
          <hr>
          <div class="proyecto">
            <div class="proyecto-izq">
              <a href="#"> <img src="/images/img-02-80x80.jpg" alt="foto-cohousing-exterior"> </a>
            </div>
            <div class="proyecto-der">
              <a href="#">Nombre del proyecto</a>
              <p>Creado el 4 de junio de 2018</p>
            </div>
          </div>
        </div>

        <div class="sugerencias">
          <h6>Grupos que podrían interesarte:</h6>
          <hr>
          <div class="proyecto">
            <div class="proyecto-izq">
              <a href="#"> <img src="/images/img-02-80x80.jpg" alt="foto-cohousing-exterior"> </a>
            </div>
            <div class="proyecto-der">
              <a href="#">Nombre del grupo</a>
              <p>Creado el 4 de junio de 2018</p>
            </div>
          </div>
          <hr>
          <div class="proyecto">
            <div class="proyecto-izq">
              <a href="#"> <img src="/images/img-02-80x80.jpg" alt="foto-cohousing-exterior"> </a>
            </div>
            <div class="proyecto-der">
              <a href="#">Nombre del grupo</a>
              <p>Creado el 4 de junio de 2018</p>
            </div>
          </div>
        </div>

        <div class="sugerencias">
          <h6>Sugerencias de contactos:</h6>
          <hr>
          <div class="sugerencia-contacto">
            <div class="foto-contacto-sugerido">
              <a href="#"> <img src="/images/user-50x50.png" alt="foto-de-contacto-sugerido"> </a>
            </div>
            <div class="nombre-contacto-sugerido">
              <a href="#">Nombre del contacto</a>
            </div>
          </div>
          <hr>
          <div class="sugerencia-contacto">
            <div class="foto-contacto-sugerido">
              <a href="#"> <img src="/images/user-50x50.png" alt="foto-de-contacto-sugerido"> </a>
            </div>
            <div class="nombre-contacto-sugerido">
              <a href="#">Nombre del contacto</a>
            </div>
          </div>
          <hr>
          <div class="sugerencia-contacto">
            <div class="foto-contacto-sugerido">
              <a href="#"> <img src="/images/user-50x50.png" alt="foto-de-contacto-sugerido"> </a>
            </div>
            <div class="nombre-contacto-sugerido">
              <a href="#">Nombre del contacto</a>
            </div>
          </div>
          <hr>
          <div class="sugerencia-contacto">
            <div class="foto-contacto-sugerido">
              <a href="#"> <img src="/images/user-50x50.png" alt="foto-de-contacto-sugerido"> </a>
            </div>
            <div class="nombre-contacto-sugerido">
              <a href="#">Nombre del contacto</a>
            </div>
          </div>
        </div>



      </section>

      </div>

    </div>
  </body>
</html>

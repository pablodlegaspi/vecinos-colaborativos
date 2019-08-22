<header>
  <section class="header-home">
    <a class="logo-home" href="/"><img src="/images/Logo70x70.png" alt="logo-de-vecinos-colaborativos"></a>
    <div class="login-register">
      @auth
        <a href="/timeline">Timeline</a>
        <a href="/profile">Mi Perfil</a>
      @endauth
      @guest
        <a href="/login">Iniciar Sesión</a>
        <a href="/register">Registrate</a>
      @endguest
    </div>
  </section>
</header>

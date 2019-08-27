@extends('layouts.template-timeline')

@section('feed')

<section class="timeline-center">


  @if ($users == null)

    <div class="publicacion">
      <span style="margin:auto;">No se encontraron usuarios con esos datos<span>
    </div>

  @else

  @foreach ($users as $user)

    <div class="contacto">
      <div class="contacto-izq">
        <a href="#"><img src="/images/user-120x120.png" alt="foto-de-contacto"></a>
      </div>
      <div class="contacto-der">
        <div class="nombre-contacto">
          <a href="#" class="nombre-contacto">{{$user->getFullName()}}</a>
        </div>
        <ul>
          <li class="fb"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
          <li class="tw"><a href="#"><i class="fab fa-twitter"></i></a></li>
          <li class="ig"><a href="#"><i class="fab fa-instagram"></i></a></li>
          <li class="li"><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
        </ul>
      </div>
    </div>

  @endforeach

  @endif

</section>


@endsection

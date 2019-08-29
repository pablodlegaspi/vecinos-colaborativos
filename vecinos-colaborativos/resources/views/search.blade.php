@extends('layouts.template-timeline')

@section('feed')

<section class="timeline-center">


  @if ($users->count() == 0)

    <div class="publicacion">
      <span style="margin:auto;">No se encontraron usuarios con esos datos<span>
    </div>

  @else

  @foreach ($users as $user)

    <div class="contacto">
      <a href="otherProfile/{{$user->id}}">
      <div class="contacto-izq" style="
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      align-items: center;
      background-image: url('{{ '/storage/avatars/' . $user->avatar }}');
      background-size: cover;
      background-position: center;
      border-radius: 100%;">
      </div>
    </a>
      <div class="contacto-der">
        <div class="nombre-contacto">
          <a href="otherProfile/{{$user->id}}" class="nombre-contacto">{{$user->getFullName()}}</a>
        </div>
        <ul>
          <li class="fb"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
          <li class="tw"><a href="#"><i class="fab fa-twitter"></i></a></li>
          <li class="ig"><a href="#"><i class="fab fa-instagram"></i></a></li>
          <li class="li"><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
        </ul>
        <form class="" action="{{route('follow')}}" method="post">
          @csrf
          <input type="hidden" name="followed" value="{{$user->id}}">
          <input type="hidden" name="follower" value="{{Auth::user()->id}}">
          <button type="submit" name="button">Seguir</button>
        </form>
      </div>
    </div>

  @endforeach

  @endif

</section>


@endsection

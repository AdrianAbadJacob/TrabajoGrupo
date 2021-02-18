@include('header')

@foreach ($mostrar as $muestra)
<main class="flex-shrink-0">
  <div class="container">
    <h1 class="mt-5">{{$muestra->nombre}}</h1>
    <h3>{{$muestra->residencia}}</h3>
    <p>{{$muestra->descipcion}}</p>
  </div>
</main>
@endforeach

@include('footer')
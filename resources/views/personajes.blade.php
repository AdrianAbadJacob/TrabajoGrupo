@include('header')

@foreach ($mostrar as $muestra)
<main class="flex-shrink-0">
  <div style="margin-top: 70px;" class="container border-bottom border-info border-2">
    <h1 class="mt-5">{{$muestra->nombre}}</h1>
    <h3>{{$muestra->residencia}}</h3>
    <p>{{$muestra->descipcion}}</p>
  </div>
</main>
@endforeach

@include('footer')
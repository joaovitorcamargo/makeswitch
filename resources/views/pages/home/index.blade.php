@extends('layout.page')

@section('title','Home - Make Switch')

@section('content')
<div class="container">
  <div class="slide-banner">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="d-block w-100" src="img/1.png" alt="First slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="img/2.png" alt="Second slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="img/3.png" alt="Third slide">
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>
  <div class="roupas_acessorios d-flex align-items-center justify-content-center flex-column">
    <h2 class="title_acessorios">Últimos Adicionados</h2>
    <div class="owl-carousel owl-theme">

      @foreach ($produtos as $produto)
      <div class="col-sm d-flex justify-content-center">
        <a href="/produto/{{$produto->id}}">
          <div class="card card-switch" style="width: 18rem;">
            <i class="far fa-heart fa-2x iconCard"></i>

            <img src="{{url("/img/{$produto->image}")}}" alt="">

            <div class="card-body">
              <h5 class="card-title">{{$produto->name}}</h5>
              <hr>
              <p>{{$produto->descricao}}</p>
              <!-- Button trigger modal -->
              {{-- <a class="btn btn-outline-secondary d-flex justify-content-center" data-toggle="modal"
                data-target="#exampleModal">
                Trocar
              </a> --}}
            </div>
          </div>
        </a>
      </div>
      @endforeach
    </div>
  </div>

  {{-- CATEGORIAS --}}
  <div class="categorias d-flex justify-content-center align-items-center flex-column">
    <h2 class="title_categoria">Categorias</h2>
    <div class="row">

      @foreach($tags as $tag)
      <div class="col-sm-3">
        <a href="/home?tag={{$tag->nome}}">
          <div class="card_category">
            <img src="{{$tag->image}}" alt="{{$tag->name}}" srcset="{{$tag->image}}">
            <p>{{$tag->nome}}</p>
          </div>
        </a>
      </div>
      @endforeach
    </div>
  </div>
</div>
@endsection
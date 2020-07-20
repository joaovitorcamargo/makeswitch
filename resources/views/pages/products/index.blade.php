@extends('layout.page')

@section('title','Produtos - Make Switch')

@section('content')
<!-- CARD PRINCIPAL -->
<div class="bg">
  <div class="container">
    <!-- STOCK / ORDER BY-->
    <div class="row d-flex justify-content-between align-items-center" style="padding: 1% 0px">
      <div class="col-sm-4 d-flex align-items-center">
        <p>Encontramos {{$tags->count()}} produtos</p>
      </div>

      <div class="col-sm-4 d-flex justify-content-center">
        <ul class="pagination">
          <li class="page-item"><a class="page-link" href="#">Previous</a></li>
          <li class="page-item"><a class="page-link" href="#">1</a></li>
          <li class="page-item"><a class="page-link" href="#">2</a></li>
          <li class="page-item"><a class="page-link" href="#">3</a></li>
          <li class="page-item"><a class="page-link" href="#">Next</a></li>
        </ul>
      </div>

      <div class="col-sm-4 d-flex justify-content-end align-items-center">
        <p style="padding-right: 2%">Ordernar por</p>
        <div class="dropdown d-flex">
          <button class="btn btn-outline-secondary dropdown-toggle" type="button" id="dropdownMenuButton"
            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Relevancia
          </button>
          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <a class="dropdown-item" href="#">Relevancia</a>
            <a class="dropdown-item" href="#">Maior acesso</a>
            <a class="dropdown-item" href="#">Maior proximidade</a>
          </div>
        </div>
      </div>
    </div>

    <!-- CARD -->
    <div class="row">
      @foreach ($tags as $produto)
      <div class="col-sm d-flex justify-content-center">
        <a href="/produto/{{$produto->id}}">
          <div class="card card-switch" style="width: 18rem;">
            <i class="far fa-heart fa-2x iconCard"></i>

            <img class="tileImg" src="{{url("/img/{$produto->image}")}}">

            <div class="card-body">
              <h5 class="card-title">{{$produto->name}}</h5>
              <hr>
              <p>{{$produto->descricao}}</p>
            </div>
          </div>
        </a>
      </div>
      @endforeach
    </div>
  </div>
</div>
@endsection
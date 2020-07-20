@extends('layout.page')

@section('title','Produto - Make Switch')

@section('content')
<div class="container">

  <h3>{{$produto->name}}</h3>

  <p>Publicado em {{$produto->created_at->format('d/m/Y')}} às {{$produto->created_at->format('H:i')}} - cód. {{$produto->id}}</p>

  <div class="row">

    <div class="col-md-9 d-flex justify-content-center cardDetalheImg">
      <img class="detalhesProdutoImg" src="{{url("/img/{$produto->image}")}}" alt="">
    </div>

    <div class="col-md-2 cardDetalhe">
      <div>
        <p>{{$produto->users->name}}</p>
        <a class="btn btn-outline-secondary d-flex justify-content-center" data-toggle="modal" data-target="#exampleModal">Trocar</a>
      </div>
    </div>

    <div class="col-md-12">
      <p>Descrição do Produto</p>
      <h5>{{$produto->descricao}}</h5>
      <div class="d-flex">
        <button class="btn btn-outline-secondary d-flex justify-content-center margin">Favoritar</button>
        <button class="btn btn-outline-secondary d-flex justify-content-center margin">Compartilhar</button>
      </div>
    <hr>
    </div>
  </div>
</div>
{{-- FIM DO CODIGO --}}

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Como deseja entrar em contato?</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-footer">
        <button class="btn btn-secondary" data-dismiss="modal">Close</button>
        <a href="mailto:{{$produto->users->email}}" class="btn btn-primary">Email</a>
        <a href="https://api.whatsapp.com/send?phone=55{{$produto->users->phone}}&text=Ol%C3%A1%2C%20vi%20seu%20anuncio%20no%20MakeSwitch%2C%20ser%C3%A1%20que%20poderiamos%20conversar%20a%20respeito%20do%20seu%20produto%3F" class="btn btn-primary">WhatsAPP</a>
      </div>
    </div>
  </div>
</div>
@endsection
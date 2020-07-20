@extends('layout.page')

@section('title','Editar Perfil')

@section('content')
<div class="container">
  <form method="post" action="{{route('editproductupdate',$produto->id)}}" class="form-style-9">
    @csrf
    @method('put')
    <div class="form-group">
      <label>Nome</label>
      <input name="name" type="text" class="form-control" id="name" aria-describedby="emailHelp"
        value="{{$produto->name}}">
      <small id="emailHelp" class="form-text text-muted">Informe um nome de exibição do seu produto.</small>
    </div>
    <div class="form-group">
      <label>Descrição</label>
      <input name="descricao" type="text" class="form-control" id="descricao" aria-describedby="descricao"
        value="{{$produto->descricao}}">
      <small id="descricao" class="form-text text-muted">Informe a descrição do produto</small>
    </div>


    <select name="tags[]">
      @foreach ($tags as $tag)
      <option value="{{$tag->id}}">{{$tag->nome}}</option>
      @endforeach
    </select>
    <input type="submit" class="btn btn-primary" value="Atualizar">
  </form>
</div>
@endsection
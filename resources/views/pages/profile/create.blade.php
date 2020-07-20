@extends('layout.page')

@section('title','Make Switch - Registrar produto')

@section('content')
<div class="container">
  <form method="post" action="/profile/registrar_produto" enctype="multipart/form-data">
    @csrf
    <h1>Cadastro de Produtos</h1>

    <form>
      <div class="form-group">
        <label>Nome</label>
        <input name="name" type="text" class="form-control" id="name" aria-describedby="emailHelp">
        <small id="emailHelp" class="form-text text-muted">Informe um nome de exibição do seu produto.</small>
      </div>
      <div class="form-group">
        <label>Descrição</label>
        <input name="descricao" type="text" class="form-control" id="descricao" aria-describedby="descricao">
        <small id="descricao" class="form-text text-muted">Informe a descrição do produto</small>
      </div>

      <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
      <input type="file" name="image" required>
      <small id="emailHelp" class="form-text text-muted">Insira uma imagem do seu produto.</small>


      <select name="tags[]">
        @foreach ($tags as $tag)
        <option value="{{$tag->id}}">{{$tag->nome}}</option>
        @endforeach
      </select>
      <button type="submit" class="btn btn-primary">Enviar</button>

    </form>
    {{-- MEUS PRODUTOS --}}
    <h1>Meus produtos cadastrados</h1>

    <table class="table table-striped">
      <thead>
        <tr>
          <th scope="col">Image</th>
          <th scope="col">Nome</th>
          <th scope="col">Descricao</th>
          <th scope="col">Status</th>
        </tr>
      </thead>
      <tbody>
        @foreach($produtos as $produto)
        <tr>
          @if ($produto->image)
          <td><img src="{{url("/img/{$produto->image}")}}" alt="{{$produto->image}}" style="max-width:100px;"></td>
          @endif
          <td>{{$produto->name}}</td>
          <td>{{$produto->descricao}}</td>
          <td>Ativo</td>
        </tr>
        @endforeach
      </tbody>
    </table>
</div>
@endsection
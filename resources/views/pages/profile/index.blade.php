@extends('layout.page')

@section('title','Make Switch - Profile')

@section('content')


<div class="container">
  <div class="row">
    {{-- MENU --}}
    <div class="col-md-3 menu">
      <h2>Olá, {{Auth::user()->name}}</h2>
      <p>{{Auth::user()->email}}</p>
      <hr>
      <a href="{{route('edituser',Auth::user()->id)}}" class="btn btn-outline-secondary buttonMenu">Editar Perfil</a>
      <br>
      <a href="{{route('user.product')}}" class="btn btn-outline-secondary buttonMenu">Cadastrar Produto</a>
      <br>
      <a href="{{route('sair')}}" class="btn btn-outline-secondary buttonMenu">Sair</a>
    </div>

    {{-- CONTENT --}}
    {{-- FAVORITOS --}}
    <div class="col-md-9 favoritos">
      <div class="card">
        <h5 class="card-header">Favoritos</h5>
        <table class="table table-striped">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Produto</th>
              <th scope="col">Pessoa</th>
              <th scope="col">Status</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">1</th>
              <td>Camiseta Hering</td>
              <td>Josimar</td>
              <td>Ativo</td>
            </tr>
            <tr>
              <th scope="row">2</th>
              <td>Carro Ferrari</td>
              <td>Jilmar</td>
              <td>Trocado</td>
            </tr>
            <tr>
              <th scope="row">3</th>
              <td>Relogio Hugo Boss</td>
              <td>Joana</td>
              <td>Ativo</td>
            </tr>
          </tbody>
        </table>
      </div>

      <br>

      {{-- HISTORICO --}}
      <div class="card historico">
        <h5 class="card-header">Historico dos meus produtos</h5>
        <table class="table table-striped">
          <thead>
            <tr>
              <th scope="col">Image</th>
              <th scope="col">Nome</th>
              <th scope="col">Descrição</th>
              <th scope="col">Status</th>
              <th scope="col">Ações</th>
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
              <td>
                <form action="{{route('deletarproduto',$produto->id)}}" method="post">
                  @csrf
                  <div class="btn-group-vertical">
                    <a href="{{route('editproduct',$produto->id)}}"
                      class="btn btn-outline-secondary d-flex justify-content-center">Editar</a>
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-outline-secondary d-flex justify-content-center"
                      data-toggle="modal" data-target="#exampleModal">Excluir</button>
                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                      aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Deseja realmente excluir este produto?</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Voltar</button>
                            <input type="submit" class="btn btn-primary" value="Excluir">
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </form>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
</div>

@endsection
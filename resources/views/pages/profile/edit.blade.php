@extends('layout.page')

@section('title','Editar Perfil')

@section('content')
<div class="container">
  <form method="post" action="{{route('edituserupdate',Auth::user()->id)}}" class="form-style-9">
    @csrf
    @method('put')
    <div class="form-row">
      <div class="form-group col-md-6">

        <input type="text" name="name" class="form-control" id="inputName" placeholder="Primeiro Nome"
          value="{{Auth::user()->name}}">
        <p>{{$errors->first('name')}}</p>
      </div>
      <div class="form-group col-md-6">
        <input type="text" name="secondName" class="form-control" id="inputName2" placeholder="Segundo Nome"
          value="{{Auth::user()->secondName}}">
      </div>
    </div>
    <div class="form-row">
      <div class="form-group col-md-6">
        <input type="email" name="email" class="form-control" id="inputEmail" placeholder="Email"
          value="{{Auth::user()->email}}">
        <p>{{$errors->first('email')}}</p>
      </div>
      <div class="form-group col-md-6">
        <input type="tel" name="phone" class="form-control" id="inputPhone" placeholder="Celular com ddd"
          value="{{Auth::user()->phone}}">
        <p>{{$errors->first('phone')}}</p>
      </div>
    </div>
    <input type="submit" class="btn btn-primary" value="Criar Conta">
  </form>
</div>
@endsection
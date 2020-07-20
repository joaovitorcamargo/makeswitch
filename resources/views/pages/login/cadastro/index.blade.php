@extends('layout.login')
@section('title', 'Make Switch - Login')

@section('content')
<div class="register">
    <div class="register__content">
        <img class="register__content--logo" src="/img/Capture.png" alt="">
        <br>
        <div class="register__content--form">
            <form method="post" action="/login/register" class="form-style-9">
                @csrf
                <div class="form-row">
                    <div class="form-group col-md-6">

                        <input type="text" name="name" class="form-control" id="inputName" placeholder="Primeiro Nome">
                        <p>{{$errors->first('name')}}</p>
                    </div>
                    <div class="form-group col-md-6">
                        <input type="text" name="secondName" class="form-control" id="inputName2"
                            placeholder="Segundo Nome">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <input type="email" name="email" class="form-control" id="inputEmail" placeholder="Email">
                        <p>{{$errors->first('email')}}</p>
                    </div>
                    <div class="form-group col-md-6">
                        <input type="password" name="password" class="form-control" id="inputPassword"
                            placeholder="Senha">
                        <p>{{$errors->first('password')}}</p>
                    </div>
                </div>
                <div class="form-group">
                    <input type="tel" name="phone" class="form-control" id="inputPhone" placeholder="Celular com ddd">
                    <p>{{$errors->first('phone')}}</p>
                </div>
                <span>Already have an account? <a class="login-link" href="{{route('login.login')}}">Login</a></span>
                <br>
                <br>
                <input type="submit" class="btn btn-primary" value="Criar Conta">
            </form>

        </div>
    </div>

</div>

@endsection
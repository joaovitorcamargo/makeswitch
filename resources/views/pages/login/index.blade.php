@extends('layout.login')
@section('title', 'Make Switch - Login')
@section('content')
<div class="main d-flex align-items-center justify-content-center">
  <div class="content">
    <div class="row">
      <div class="col-md-8 img-content d-flex align-items-center justify-content-center">
        <div class="border-title">
          <h2>Find the essential</h2>
        </div>
      </div>
      <div class="col-md-4 d-flex flex-column align-items-center justify-content-center">
        <div class="logo">
          <img src="img/Capture.png" alt="" srcset="">
        </div>
        <br>
        <form method="post" action="/login" class="form-style-login">
          @csrf
          <div class="form-group form-login">
            <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
              placeholder="Enter email">
          </div>
          <div class="form-group form-login">
            <input type="password" name="password" class="form-control" id="exampleInputPassword1"
              placeholder="Password">
            <small><a href="#">FORGOT PASSWORD</a></small>
          </div>
          <button type="submit" class="btn btn-login">SUBMIT</button>
          <div class="row d-flex align-items-center">
            <div class="col-md-5 line">
              <hr>
            </div>
            <div class="col-md-2 or-login">
              <span>or</span>
            </div>
            <div class="col-md-5 line">
              <hr>
            </div>
          </div>
          <a href="{{route('login.cadastro')}}" class="btn btn-login">CREATE ACOUNT</a>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>@yield('title')</title>
  <link rel="stylesheet" href="{{mix('css/app.css')}}">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css2?family=Bungee&display=swap" rel="stylesheet">
  <script src="https://kit.fontawesome.com/580f5c26d1.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="owlCarousel/dist/assets/owl.carousel.min.css">
  <link rel="stylesheet" href="owlCarousel/dist/assets/owl.theme.default.min.css">
</head>

<body>
  <nav id="nav">
    <div class="container">
      <div class="row d-flex align-items-center top-bar">
        <div class="col-md-3 d-flex justify-content-center">
          <img src="/img/Capture.png" alt="">
        </div>
        <div class="col-md-6">
          <form class="form-inline">
            <input class="form-control mr-sm-2" type="search" placeholder="Pesquisar Produto" aria-label="Search">
            <button class="btn btn-light" type="submit">Pesquisar</button>
          </form>
        </div>
        <div class="col-md-3">
          <div class="row d-flex align-items-center">
            <div class="d-flex col-md-6 login">
              @if(auth()->user())
              <a href="{{route('user.profile')}}" class="login-text">
                Olá, {{Auth::user()->name}}
              </a>
              @else
              <a href="{{route('login.login')}}" class="login-text">
                Faça seu login
                <br>
                <span>
                  Acesse Sua conta
                </span>
              </a>
              @endif

            </div>
            <div class="col-md-6">
              <button class="btn faqButton">FAQ</button>
            </div>
          </div>
        </div>
      </div>
      <hr class="line-nav">
      <div class="nav-items d-flex flex-column">
        <ul class="d-flex align-items-center justify-content-around flex-row">
          <li><a class="link" href="/">Home</a></li>
          <li><a class="link" href="/home?tag=Calçados">Calçados</a></li>
          <li><a class="link" href="/home?tag=Roupas">Roupas</a></li>
          <li><a class="link" href="/home?tag=Acessórios">Acessórios</a></li>
          <li><a class="link" href="/home?tag=Construção">Construção</a></li>

          <li><a class="link" href="/home?tag=Livros">Livros</a></li>
          <li><a class="link" href="/home?tag=Ferramentas">Ferramentas</a></li>
          <li><a class="link" href="/home?tag=Computador">Computador</a></li>
          <li><a class="link" href="/home?tag=Games%20e%20Consoles">Games e Consoles</a></li>
          <li class="li-icon d-flex justify-content-end"><img class="icons" src="/img/bell.svg" alt=""></li>
          <li class="li-icon d-flex justify-content-start"><img class="icons" src="/img/heart.svg" alt=""></li>
        </ul>
      </div>
    </div>
  </nav>
  @yield('content')
  <footer class="black-part">
    <div class="container">
      <div class="row">
        <div class="col-sm-4">
          <h2>Categorias</h2>
          <p><a href="/">Home</a></p>
          <p><a href="/home?tag=Calçados">Calçados</a></p>
          <p><a href="/home?tag=Roupas">Roupas</a></p>
          <p><a href="/home?tag=Acessórios">Acessórios</a></p>
          <p><a href="/home?tag=Construção">Construção</a></p>
          <p><a href="/home?tag=Livros">Livros</a></p>
          <p><a href="/home?tag=Ferramentas">Ferramentas</a></p>
          <p><a href="/home?tag=Computador">Computador</a></p>
          <p><a href="/home?tag=Games%20e%20Consoles">Games e Consoles</a></p>
        </div>
        <div class="col-sm-4">
          <h2>Redes Sociais</h2>
          <div class="social_media d-flex  align-items-center">
            <img src="/img/social-media.png" alt="Instagram" srcset="/img/social-media.png">
            <a href="#">instagram</a>
          </div>
          <div class="social_media d-flex  align-items-center">
            <img src="/img/facebook.png" alt="Facebook" srcset="/img/facebook.png">
            <a href="#">facebook</a>
          </div>
          <div class="social_media d-flex  align-items-center">
            <img src="/img/twitter.png" alt="" srcset="/img/twitter.png">
            <a href="#">twitter</a>
          </div>
        </div>
        <div class="col-sm-4 d-flex align-items-center justify-content-center">
          <img class="logo_footer" src="/img/Capture.png" alt="" srcset="/img/Capture.png">
        </div>
      </div>
    </div>
  </footer>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
  </script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
  </script>
  <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
  <script src="js/owlHomeCarousel.js"></script>
</body>

</html>
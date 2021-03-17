<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Huy</title>






  <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="{{asset('css/main.css')}}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>
  <header>
    <section class="top-bar">
      <div class="container">
        <div class="row">
          <div class="col">

          </div>
          <div class="col">
            <div class="top-bar__link ">
              <ul>
                <li><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#register">Đăng ký</button></li>
                <li><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#login">Đăng nhập</button></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="bottom-bar">
      <div class="container">
        <div class="row">
          <div class="col-2">
            <img src="{{asset('img/logo.png')}}" alt="" class="top-nav__logo">
          </div>
          <div class="col-10">
            <nav class="navbar navbar-expand-sm justify-content-center">
              <ul class="navbar-nav">
                <li class="nav-item active">
                  <a class="nav-link" href="{{route('home')}}">Trang chủ</a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle " id="navbarDropdown" role="button" data-toggle="dropdown">Điện Thoại</a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  
                    @foreach($Phone as $phone)
                      <a class="dropdown-item" href="#">{{$phone->name}}</a>
                    @endforeach
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Xem tất cả</a>
                  </div>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle " id="navbarDropdown" role="button" data-toggle="dropdown">Tablet</a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  @foreach($Tablet as $tablet)
                      <a class="dropdown-item" href="#">{{$tablet->name}}</a>
                    @endforeach
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Xem tất cả</a>
                  </div>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle " id="navbarDropdown" role="button" data-toggle="dropdown">Watch</a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  @foreach($Watch as $watch)
                      <a class="dropdown-item" href="#">{{$watch->name}}</a>
                    @endforeach
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Xem tất cả</a>
                  </div>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Liên Hệ</a>
                </li>
              </ul>
            </nav>
          </div>
        </div>
      </div>
    </section>
  </header>
  <main>
    @yield('content')
  </main>
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="inner-content">
            <p>Copyright &copy; <a rel="nofollow noopener" href="https://templatemo.com" target="_blank">TemplateMo</a></p>
          </div>
        </div>
      </div>
    </div>
  </footer>

  @extends('users.user_reg')

  @extends('users.user_login')
</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
<<<<<<< HEAD
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Huy</title>


  <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{asset('css/main.css')}}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>
  <div id="header">
    <nav class="navbar navbar-expand-lg">
      <div class="container">
        <a class="navbar-brand" href="index.html">
          <h2>Sixteen <em>Clothing</em></h2>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="index.html">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Our Products</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{URL::to('/about')}}">About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.html">Contact Us</a>
            </li>
          </ul>
=======
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
              <a href="#">Register</a>
              <span>/</span>
              <a href="#">Login</a>
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
                  <a class="nav-link" href="#">Trang chủ</a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle "  id="navbarDropdown" role="button" data-toggle="dropdown">Điện Thoại</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item" href="#">Apple</a>
                      <a class="dropdown-item" href="#">SamSung</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="#">Xem tất cả</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle "  id="navbarDropdown" role="button" data-toggle="dropdown">Tablet</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item" href="#">Apple</a>
                      <a class="dropdown-item" href="#">SamSung</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="#">Xem tất cả</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle "  id="navbarDropdown" role="button" data-toggle="dropdown">Watch</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item" href="#">Apple</a>
                      <a class="dropdown-item" href="#">SamSung</a>
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
<!-- <div id="header">
      <nav class="navbar navbar-expand-lg">
        <div class="container">
          <a class="navbar-brand" href="index.html"><h2>Sixteen <em>Clothing</em></h2></a>
          
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item active">
                <a class="nav-link" href="index.html">Trang chủ
                  <span class="sr-only">(current)</span>
                </a>
              </li> 
              <li class="nav-item">
                <a class="nav-link" href="products.html">Điện Thoại</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="about.html">Tablet</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contact.html">Watch</a>
              </li>
            </ul>
          </div>
>>>>>>> 948e848bef97812653e81d9cbc3aa03aa8f8107e
        </div>
      </div>
    </nav>
  </div>

  @yield('content')



  <footer>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="inner-content">
            <p>Copyright &copy; 2020 Sixteen Clothing Co., Ltd.

              - Design: <a rel="nofollow noopener" href="https://templatemo.com" target="_blank">TemplateMo</a></p>
          </div>
        </div>
      </div>
<<<<<<< HEAD
    </div>
  </footer>
=======
    </footer> -->
>>>>>>> 948e848bef97812653e81d9cbc3aa03aa8f8107e
</body>

</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Login</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" />
    <!-- Google Fonts Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" />
    <!-- MDB -->
    <link rel="stylesheet" href="{{asset('css/css/mdb.min.css')}}" />
    <!-- Custom styles -->
    <link rel="stylesheet" href="{{asset('css/css/style.css')}}" />
    <!-- login wrapper  -->
    <link rel="stylesheet" href="{{asset('css/login_wrapper.css')}}" />

</head>
<body>
      <!--Main Navigation-->
  <header>
    <style>
      #intro {
        background-image: url(https://mdbootstrap.com/img/new/fluid/city/008.jpg);
        height: 100vh;
      }

      /* Height for devices larger than 576px */
      @media (min-width: 992px) {
        #intro {
          margin-top: -58.59px;
        }
      }

      .navbar .nav-link {
        color: #fff !important;
      }

    </style>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark d-none d-lg-block" style="z-index: 2000;">
      <div class="container-fluid">
        <!-- Navbar brand -->
        <!-- <a class="navbar-brand nav-link" target="_blank" href="https://mdbootstrap.com/docs/standard/">
          <strong>MDB</strong>
        </a> -->
        @if(count($errors)>0)
            @foreach($errors->all() as $error)
            <!-- <div class="alert alert-danger" role="alert">
                  <strong>{{$errors}} </strong>
            </div> -->
            @endforeach
        @endif
        <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarExample01"
          aria-controls="navbarExample01" aria-expanded="false" aria-label="Toggle navigation">
          <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarExample01">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item active">
              <a class="nav-link" aria-current="page" href="#intro">Trang chủ</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="#" target="_blank"></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#" target="_blank">Liên hệ</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#" target="_blank">Giới thiệu</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#" target="_blank">Giỏ hàng</a>
            </li>
          </ul>

          <ul class="navbar-nav d-flex flex-row">
            <!-- Icons -->
            <li class="nav-item me-3 me-lg-0">
              <a class="nav-link" href="#" rel="nofollow"
                target="_blank">
                <i class="fab fa-youtube"></i>
              </a>
            </li>
            <li class="nav-item me-3 me-lg-0">
              <a class="nav-link" href="#" rel="nofollow" target="_blank">
                <i class="fab fa-facebook-f"></i>
              </a>
            </li>
            <li class="nav-item me-3 me-lg-0">
              <a class="nav-link" href="#" rel="nofollow" target="_blank">
                <i class="fab fa-twitter"></i>
              </a>
            </li>
            <li class="nav-item me-3 me-lg-0">
              <a class="nav-link" href="#" rel="nofollow" target="_blank">
                <i class="fab fa-github"></i>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Navbar -->

    <!-- Background image -->
    <div id="intro" class="bg-image shadow-2-strong">
      <div class="mask d-flex align-items-center h-100" style="background-color: rgba(0, 0, 0, 0.8);">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-xl-5 col-md-8">
              <form actions="#" method="post" class="bg-white rounded shadow-5-strong p-5" >
              <!-- name -->
                <div class="form-outline mb-4">
                    <input type="text" id="form1Example1" name="email" class="form-control" >
                            @if($errors->has('name'))
                            <div class="alert alert-danger" role="alert">
                            <strong>{{$errors->first('name')}} </strong>
                            </div>
                            @endif
                    <label class="form-label" for="form1Example1">Name</label>
                </div>

                <!-- Email input -->
                @csrf
                <div class="form-outline mb-4">
                  <input type="email" id="form1Example1" name="email" class="form-control" >
                        @if($errors->has('email'))
                        <div class="alert alert-danger" role="alert">
                        <strong>{{$errors->first('email')}} </strong>
                        </div>
                        @endif
                  <label class="form-label" for="form1Example1">Email address</label>
                </div>


                <!-- Password input -->
                <div class="form-outline mb-4">
                  <input type="password" id="form1Example2" name="password" class="form-control" >
                    @if($errors->has('password'))
                    <div class="alert alert-danger" role="alert">
                    <strong>{{$errors->first('password')}} </strong>
                    </div>
                    @endif
                  <label class="form-label" for="form1Example2">Password</label>
                </div>
                <!-- phone -->
                <div class="form-outline mb-4">
                  <input type="text" id="form1Example3" name="phone" class="form-control"  >
                    @if($errors->has('phone'))
                    <div class="alert alert-danger" role="alert">
                    <strong>{{$errors->first('phone')}} </strong>
                    </div>
                    @endif
                  <label class="form-label" for="form1Example3" >Số điện thoại</label>
                </div>

                    <!-- dia chi -->
                <div class="form-outline mb-4">
                  <input type="text" id="form1Example4" name="address" class="form-control">
                    @if($errors->has('address'))
                    <div class="alert alert-danger" role="alert">
                    <strong>{{$errors->first('address')}} </strong>
                    </div>
                    @endif
                  <label class="form-label" for="form1Example4">Địa chỉ</label>
                </div>

                <!-- 2 column grid layout for inline styling -->
                <div class="row mb-4">
                  <div class="col-5 d-flex justify-content-center">
                    <!-- Checkbox -->
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="form1Example3" checked />
                      <label class="form-check-label" for="form1Example3">
                        Remember me
                      </label>
                    </div>
                  </div>

                  <div class="col text-center">
                    <!-- Simple link -->
                    <a href="#!">Forgot password?</a>
                  </div>
                  <div class="col ">
                    <p class="bg-drank">Bạn chưa có tài khoản? <a href="{{asset('singin')}}">Đăng kí</a></p>
                  </div>

                </div>

                <!-- Submit button -->
                <button type="submit" class="btn btn-primary btn-block">Sign in</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Background image -->
  </header>
  <!--Main Navigation-->

<!--  -->
  <!--Footer-->
    <!-- MDB -->
    <script type="text/javascript" src="js/mdb.min.js"></script>
    <!-- Custom scripts -->
    <script type="text/javascript" src="js/script.js"></script>
</body>
</html>

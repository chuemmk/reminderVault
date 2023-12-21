
{{-- <!DOCTYPE html>
<html dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/images/favicon.png')}}">
    <title>Forgot Password</title>
    <link href="{{ asset('dist/css/style.min.css')}}" rel="stylesheet">
</head>

<body>

    <div class="main-wrapper">
        <div class="auth-wrapper d-flex no-block justify-content-center align-items-center bg-dark">
            <div class="auth-box bg-dark border-top border-secondary">
                <div id="loginform">
                    <div class="text-center p-t-20 p-b-20">
                        <span class="db"><img src="{{asset('assets/images/logo.png')}}" alt="logo" /></span>
                    </div>

                    <form class="form-horizontal m-t-20" id="loginform" action="{{route('password.forgotpassword.post')}}" method="POST">
                        @if (Session::get('fail'))
                            <div class="alert alert-danger">
                                {{Session::get('fail')}}
                            </div>
                        @endif
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        @csrf
                        <div class="row p-b-30">
                            <div class="col-12">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                    </div>
                                    <input type="text" name="email"  value="{{old('email')}}" class="form-control form-control-lg" placeholder="Email Address" aria-label="Email" aria-describedby="basic-addon1" required="">
                                </div>

                            </div>
                        </div>
                        <div class="row border-top border-secondary">
                            <div class="col-12">
                                <div class="form-group">
                                    <div class="p-t-20">
                                        <button class="btn btn-success btn-lg btn-block" type="submit">Send Reset Link</button><br>
                                        <a href="{{route('user.login')}}" style="color: aliceblue">Back to login?</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                
            </div>
        </div>
       
    </div>
    <script src="{{ asset('assets/libs/jquery/dist/jquery.min.js')}}"></script>
    <script src="{{ asset('assets/libs/popper.js/dist/umd/popper.min.js')}}"></script>
    <script src="{{ asset('assets/libs/bootstrap/dist/js/bootstrap.min.js')}}"></script>

</body>

</html> --}}


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Forgot Password</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <link href="{{asset('import/assets/img/favicon.png')}}" rel="icon">
  <link href="{{asset('import/assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <link href="{{asset('import/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('import/assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset('import/assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{asset('import/assets/vendor/quill/quill.snow.css')}}" rel="stylesheet">
  <link href="{{asset('import/assets/vendor/quill/quill.bubble.css')}}" rel="stylesheet">
  <link href="{{asset('import/assets/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
  <link href="{{asset('import/assets/vendor/simple-datatables/style.css')}}" rel="stylesheet">

  <link href="{{ asset('import/assets/css/style.css')}}" rel="stylesheet">  
</head>

<body>

  <main>
    <div class="container">

      <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

              <div class="d-flex justify-content-center py-4">
                <a href="#" class="logo d-flex align-items-center w-auto">
                  <span class="d-none d-lg-block">Forgot Password</span>
                </a>
              </div>

              <div class="card mb-3">

                <div class="card-body">

                  <div class="pt-4 pb-2">
                    {{-- <h5 class="card-title text-center pb-0 fs-4">Forgot Password</h5> --}}
                    <p class="text-center small" style="color: #07187B">Enter your email address and we'll send you a link to reset your password</p>
                  </div>
                  @if(session('success'))
                  <div class="alert alert-success">
                      {{ session('success') }}
                  </div>
              @endif
              
                  <form class="row g-3 needs-validation" id="loginform" action="{{route('password.forgotpassword.post')}}" method="POST" novalidate>
                    @if (Session::get('fail'))
                    <div class="alert alert-danger">
                        {{Session::get('fail')}}
                    </div>
                @endif
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                    
                    @csrf
                    <div class="col-12">
                      <label for="email" class="form-label">Email</label>
                      <div class="input-group has-validation">
                        <input type="text" name="email" value="{{old('email')}}" class="form-control" required>
                        <div class="invalid-feedback">Please enter your email!</div>
                      </div>
                    </div>  

                    <div class="col-12">
                      <button class="btn btn-primary w-100" type="submit">Send Reset Link</button>
                    </div>
                    <div class="col-12">
                      <p class="small mb-0"><a href="{{route('user.login')}}">Back to login?</a></p>
                    </div>
                  </form>

                </div>
              </div>

          </div>
        </div>

      </section>

    </div>
  </main>

<script src="{{ asset('import/assets/vendor/apexcharts/apexcharts.min.js')}}"></script>
<script src="{{ asset('import/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{ asset('import/assets/vendor/chart.js/chart.umd.js')}}"></script>
<script src="{{ asset('import/assets/vendor/echarts/echarts.min.js')}}"></script>
<script src="{{ asset('import/assets/vendor/quill/quill.min.js')}}"></script>
<script src="{{ asset('import/assets/vendor/simple-datatables/simple-datatables.js')}}"></script>
<script src="{{ asset('import/assets/vendor/tinymce/tinymce.min.js')}}"></script>
<script src="{{ asset('import/assets/vendor/php-email-form/validate.js')}}"></script>

<script src="{{ asset('import/assets/js/main.js')}}"></script>
</body>

</html>

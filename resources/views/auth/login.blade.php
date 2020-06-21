<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Login On Designer Country</title>
  <!--==** Logo **==-->
  <link rel="icon" href="{{asset('assets/frontEnd/images/home_page/Dc_Logo.png')}}" type="image/x-icon">
  <!--==** Bootstrap CDN Link **==-->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <!--==** Ajax CDN Link **==-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <!--==** Jquery Link **==-->
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"
    integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
  <!--==** Font Awesome Link **==-->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
  <!--==** Css Link **==-->
  <link rel="stylesheet" href="{{asset('assets/frontEnd/css/style.css')}}">
  <link rel="stylesheet" href="{{asset('assets/frontEnd/css/responsive.css')}}">
  <link rel="stylesheet" href="{{asset('assets/backEnd/css/main.css')}}">

  
</head>
  
<body>
  <section class="login-content">
    <div class="logo">
    <a href="{{route('index')}}"><img src="{{asset('assets/frontEnd/images/home_page/logo.png')}}" alt="Designer_country" class="img-fluid"></a>
    </div>
    <div class="login-box">
      <form class="login-form" method="POST" action="{{ route('login') }}">
        @csrf
        <h5 class="login-head"><i class="fa fa-lg fa-fw fa-user"></i>LOGIN</h5>
        <div class="form-group">
          <label for="email" class="control-label">E-Mail</label>
          <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email"
          value="{{ old('email') }}" placeholder="@example.com" autofocus>
          @error('email')
          <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
          </span>
          @enderror
        </div>
        <div class="form-group">
          <label for="password" class="control-label">Password</label>
          <input class="form-control" id="password" type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" name="password" >
          @error('password')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
        </div>
        <div class="form-group">
          <div class="form-check">
            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
            <label class="form-check-label" for="remember">Remember Me</label>
          </div>
        </div>
        <div class="form-group">
          <div class="utility">
            <div class="create-account">
              <a href="{{ route('register') }}">Create Account?</a>
            </div>
            <div class="forgot-password">
              @if (Route::has('password.request'))
                <p class="btn btn-link semibold-text mb-2 mt-2" style="font-size:15px;"><a href="#" data-toggle="flip">Forgot Password ?</a></p>
              @endif
            </div>
          </div>
        </div>
        <div class="form-group btn-container">
          <button type="submit" class="btn btn-primary btn-block"><i class="fas fa-sign-in-alt"></i>
            Login
          </button>
        </div>
      </form>

      <form class="forget-form" method="POST" action="{{ route('password.email') }}">
        @csrf
        <h5 class="login-head"><i class="fa fa-lg fa-fw fa-lock"></i>Forgot Password ?</h5>
        @if (session('status'))
        <div class="alert alert-success" role="alert">
          {{ session('status') }}
        </div>
        @endif
        <div class="form-group">
          <label for="email" class="control-label">E-Mail</label>
          <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="@example.com" value="{{ old('email') }}" required autocomplete="email" autofocus>
          @error('email')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
          @enderror
        </div>
        <div class="form-group btn-container">
          <button type="submit" class="btn btn-primary btn-block"><i class="fa fa-unlock fa-lg fa-fw"></i>
            Send Password Reset Link
          </button>
        </div>
        <div class="form-group mt-3">
          <p class="semibold-text mb-0"><a href="#" data-toggle="flip"><i class="fa fa-angle-left fa-fw"></i> Back to Login</a></p>
        </div>
      </form>
    </div>
  </section>
  {!! Toastr::message() !!}
  <!--==*** Script  Link **==-->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
  </script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
  </script>
    <!-- The javascript plugin to display page loading on top-->
    <script src="{{asset('assets/frontEnd/js/pace.min.js')}}"></script>
    <script type="text/javascript">
      // Login Page Flipbox control
      $('.login-content [data-toggle="flip"]').click(function() {
      	$('.login-box').toggleClass('flipped');
      	return false;
      });
    </script>

</body>

</html>


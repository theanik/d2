<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>Create An Account ON Designer Country</title>
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

   {!! htmlScriptTagJsApi([
            'action' => 'homepage',
      ]) !!}
      {{-- <script src="https://www.google.com/recaptcha/api.js"></script> --}}
      
  <style>
    .login-content .login-box {
    min-width: 350px;
    min-height: 530px;
  }
  </style>
  
</head>

<body>  
  <section class="login-content">
    <div class="logo">
    <a href="{{route('index')}}"><img src="{{asset('assets/frontEnd/images/home_page/logo.png')}}" alt="Designer_country" class="img-fluid"></a>
    </div>
    <div class="login-box">
      <form class="login-form" method="POST" action="{{ route('register') }}">
      @csrf
        <h5 class="login-head"><i class="fa fa-lg fa-fw fa-user"></i>CREATE ACCOUNT</h5>
        <div class="form-group">
          <label for="name" class="control-label">Name</label>
          <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" placeholder="Name" name="name" value="{{ old('name') }}"  autofocus>
            @error('name')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
            @enderror
        </div>
        <div class="form-group">
          <label for="email" class="control-label">E-Mail</label>
          <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" placeholder="@example.com" name="email" value="{{ old('email') }}">
          @error('email')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
          @enderror
        </div>
        <div class="form-group">
          <label for="password" class="control-label">Password</label>
          <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Password" >
          @error('password')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
          @enderror
        </div>
        <div class="form-group">
          <label for="password-confirm" class="control-label">Confirm Password</label>
          <input id="password-confirm" type="password" class="form-control" placeholder="Confirm Password" name="password_confirmation" >
        </div>
        <div class="g-recaptcha" 
           data-sitekey="{{env('GOOGLE_RECAPTCHA_KEY')}}">
        </div>
        <div class="form-group btn-container">
          <button type="submit" class="btn btn-primary btn-block"><i class="fas fa-sign-in-alt"></i>
            CREATE ACCOUNT
          </button>
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
</body>
</html>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">
  
    <title>რეგისტრაცია</title>
    <link rel="stylesheet" type="text/css" href="/register.css">
    <link rel="stylesheet" type="text/css" href="/css/app.css">
</head>
<body>

<div class="middle">
  @if ($errors->any())
      <div class="alert">
          <ul class="no-bullets">
              @foreach ($errors->all() as $error)
                  <li class="li-error">{{ $error }}</li>
              @endforeach
          </ul>
      </div>
  @endif
  <div class="center">
    <div class="ear ear--left"></div>
    <div class="ear ear--right"></div>
    <div class="face">
      <div class="eyes">
        <div class="eye eye--left">
          <div class="glow"></div>
        </div>
        <div class="eye eye--right">
          <div class="glow"></div>
        </div>
      </div>
      <div class="nose">
        <svg width="38.161" height="22.03">
          <path d="M2.017 10.987Q-.563 7.513.157 4.754C.877 1.994 2.976.135 6.164.093 16.4-.04 22.293-.022 32.048.093c3.501.042 5.48 2.081 6.02 4.661q.54 2.579-2.051 6.233-8.612 10.979-16.664 11.043-8.053.063-17.336-11.043z" fill="#243946"></path>
        </svg>
        <div class="glow"></div>
      </div>
      <div class="mouth">
        <svg class="smile" viewBox="-2 -2 84 23" width="84" height="23">
          <path d="M0 0c3.76 9.279 9.69 18.98 26.712 19.238 17.022.258 10.72.258 28 0S75.959 9.182 79.987.161" fill="none" stroke-width="3" stroke-linecap="square" stroke-miterlimit="3"></path>
        </svg>
        <div class="mouth-hole"></div>
        <div class="tongue breath">
          <div class="tongue-top"></div>
          <div class="line"></div>
          <div class="median"></div>
        </div>
      </div>
    </div>
    <div class="hands">
      <div class="hand hand--left">
        <div class="finger">
          <div class="bone"></div>
          <div class="nail"></div>
        </div>
        <div class="finger">
          <div class="bone"></div>
          <div class="nail"></div>
        </div>
        <div class="finger">
          <div class="bone"></div>
          <div class="nail"></div>
        </div>
      </div>
      <div class="hand hand--right">
        <div class="finger">
          <div class="bone"></div>
          <div class="nail"></div>
        </div>
        <div class="finger">
          <div class="bone"></div>
          <div class="nail"></div>
        </div>
        <div class="finger">
          <div class="bone"></div>
          <div class="nail"></div>
        </div>
      </div>
    </div>
    <form method="POST" action="{{ route('register') }}" class="login">
      @csrf
      <label>
        <div class="fa fa-phone"></div>
        <input class="form-control name" type="text" autocomplete="on" placeholder="სახელი" name="name" value="{{ old('name') }}" />
      </label>
      <label>
        <div class="fa fa-phone"></div>
        <input class="username @error('email') is-invalid @enderror" type="email" autocomplete="on" placeholder="ელფოსტა" name="email" value="{{ old('email') }}" />
      </label>

      <label>
        <div class="fa fa-commenting"></div>
        <input id="passwordText" class="password @error('password') is-invalid @enderror" type="password" autocomplete="off" placeholder="პაროლი" name="password" />
        <button type="button" id="showpassword" class="password-button">ჩვენება</button>
      </label>
      <button type="submit" class="login-button">რეგისტრაცია</button>
    </form>
    
  </div>
</div>
<script type="text/javascript" src="/register.js"></script>
</body>
</html>
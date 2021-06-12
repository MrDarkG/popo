<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/login.css') }}">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="csrf-token" content="{{ csrf_token() }}">
   
</head>
<body >
    <div id="app"></div>
        <div class="panda">
        <div class="ear"></div>
        <div class="face">
            <div class="eye-shade"></div>
            <div class="eye-white">
              <div class="eye-ball"></div>
            </div>
            <div class="eye-shade rgt"></div>
            <div class="eye-white rgt">
                <div class="eye-ball"></div>
            </div>
            <div class="nose"></div>
            <div class="mouth"></div>
        </div>
        <div class="body"> </div>
            <div class="foot">
            <div class="finger"></div>
        </div>
        <div class="foot rgt">
            <div class="finger"></div>
        </div>
    </div>
<form method="POST" action="{{ route('login') }}">
    @csrf
    <div class="hand"></div>
    <div class="hand rgt"></div>
    <h1>Popo</h1>
    <div class="form-group">
        <input required="required" type="email" class="form-control" name="email"/>
        <label class="form-label">ელფოსტა    </label>
    </div>
    <div class="form-group">
        <input id="password" type="password" required="required" class="form-control" name="password" />
        <label class="form-label">პაროლი</label>
        <button class="btn">შესვლა </button>
    </div>
    
</form>
    
    <div class="socialite-container">
        <a class="socialite-icon fb" href="/sign-in/facebook">
            <div class="img-div">
                <img src="{{ asset('/icons/facebook.png') }}">
            </div>
            <div class="text-div">
                Facebook-ით შესვლა
            </div>
        </a>
        <a  href="/sign-in/google" class="socialite-icon google text-de">
            <div class="img-div">
                <img src="{{ asset('/icons/search.png') }}">
            </div>
            <div class="text-div">
                Google-ით შესვლა
            </div>
        </a>
    </div>
 <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/js/login.js') }}"></script>
</body>
</html>

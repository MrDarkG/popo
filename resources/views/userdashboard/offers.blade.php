@extends('layouts.userdashboard')

@section("css")
<link rel="stylesheet" type="text/css" href="{{ asset('/start/offers.css') }}">

@endsection
@section('content')

<div class="d-flex justify-content-between flex-nowrap " style="padding: 0 16px;">
  <div class="col-md-5" style="position: relative;">
    <div class="underlined w-100">
      
      <h1><b>რეკომენდირებული კურსები</b></h1>
    </div>

  </div>
  
</div>
<main class="page-content">
  <div class="offer-card" style="background: url('https://images.assetsdelivery.com/compings_v2/belchonoksun/belchonoksun1603/belchonoksun160300011.jpg');">
    <div class="content" >
      <h2 class="title">მათემატიკა (5-6 კლასი)</h2>
      <p class="copy">კურსის განმავლობაში თქვენ ისწავლით მათემატკურ ოპერაციებს, წილადებზე მუშაობას. კურსის ხანგრძლივობა 5 საათი</p>
      <button class="offer-btn">ყიდვა</button>
    </div>
  </div>
  <div class="offer-card" style="background: url('https://wallpapercave.com/wp/wp3779747.jpg');">
    <div class="content" >
      <h2 class="title">ისტორია (5-6 კლასი)</h2>
      <p class="copy">Check out all of these gorgeous mountain trips with beautiful views of, you guessed it, the mountains</p>
      <button class="offer-btn">ყიდვა</button>
    </div>
  </div>
  <div class="offer-card" style="background: url('https://img.wallpapersafari.com/desktop/1280/1024/41/34/uwtCzW.jpg');">
    <div class="content" >
      <h2 class="title">ბიოლოგია (5-6 კლასი)</h2>
      <p class="copy">Check out all of these gorgeous mountain trips with beautiful views of, you guessed it, the mountains</p>
      <button class="offer-btn">ყიდვა</button>
    </div>
  </div>
  <div class="offer-card" style="background: url('https://wallpapercave.com/wp/wp2659175.jpg');">
    <div class="content" >
      <h2 class="title">ხელოვნება (5-6 კლასი)</h2>
      <p class="copy">Check out all of these gorgeous mountain trips with beautiful views of, you guessed it, the mountains</p>
      <button class="offer-btn">ყიდვა</button>
    </div>
  </div>
  <div class="offer-card" style="background: url('https://lh3.googleusercontent.com/proxy/lYf-srpykGZJBG2xU4RHYAvppzyWoR5WHuUOTkz0aT64KzCHCZhavOmSwtnvglVZ1iAaoudZAGLf5p40HjRb6XWp0e-3fwvCK1QT-ZIECJl9ShxT97N5tcVCzCCfMNBxPwi1nolvasmejA');">
    <div class="content" >
      <h2 class="title">ქართული (1-2 კლასი)</h2>
      <p class="copy">Check out all of these gorgeous mountain trips with beautiful views of, you guessed it, the mountains</p>
      <button class="offer-btn">ყიდვა</button>
    </div>
  </div>
  <div class="offer-card" style="background: url('https://wallpaperaccess.com/full/3179404.jpg');">
    <div class="content" >
      <h2 class="title">გეოგრაფია (5-6 კლასი)</h2>
      <p class="copy">Check out all of these gorgeous mountain trips with beautiful views of, you guessed it, the mountains</p>
      <button class="offer-btn">ყიდვა</button>
    </div>
  </div>
  
</main>

@endsection

@section("js")


@endsection
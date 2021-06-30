@extends('layouts.userdashboard',["active"=>"courses"])

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
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<main class="page-content">
  @foreach ($offers as $offer)
    <div class="offer-card" style="background: url('{{ $offer->wallpaper }}');">
      <div class="content" >
        <h2 class="title">{{ $offer->title }}</h2>
        <p class="copy">{{ $offer->description }} <br>
          <b>ფასი: </b> {{ $offer->price }} ₾</p>
        <form method="POST" action="{{ route('buycourse') }}">
          @csrf
          {{--  --}}
          <input type="hidden" name="course_id" value="{{ $offer->id }}">
          <button class="offer-btn">ყიდვა</button>
        </form>
      </div>
    </div>

  @endforeach
    
  
</main>

@endsection

@section("js")


@endsection
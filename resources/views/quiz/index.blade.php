@extends('layouts.userdashboard')

@section('content')
    <play-quiz
    :tasks="{{ json_encode($tasks) }}"
    ></play-quiz>
@endsection

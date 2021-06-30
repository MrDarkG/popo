@extends('layouts.userdashboard')

@section('content')
    <play-quiz
        :tasks="{{ json_encode($tasks->tasks[0]->tasks) }}"
    ></play-quiz>
@endsection

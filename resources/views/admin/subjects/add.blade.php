@extends('layouts.master')
@section('content')
	<add-subject
		:categories="{{ json_encode($categories) }}"
	></add-subject>
@endsection
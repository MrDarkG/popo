@extends('layouts.app')

@section('content')
	<character-edit
		:parts="{{ json_encode($char_parts) }}"
	>
	</character-edit>
@endsection
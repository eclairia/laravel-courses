@extends('layouts.master')

@section('content')
	<a href="{{ env('APP_URL') }}/{{ $shortened }}">{{ env('APP_URL') }}/{{ $shortened }}</a>
@endsection
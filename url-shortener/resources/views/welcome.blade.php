@extends('layouts.master')

@section('content')
    <h1>URL shortener</h1>

    <form method="POST" action="">
        {{ csrf_field() }}
        <input type="text" name="url">
        <input type="submit" value="Shorten url">
    </form>
@endsection

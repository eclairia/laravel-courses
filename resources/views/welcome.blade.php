@extends('layouts.master')

@section('content')
    <h1>The best url shortener</h1>

    <form method="POST" action="/">
        {{ csrf_field() }}

        {!! $errors->first('url', '<p class="errors-msg">:message</p>') !!}
        <input type="text" name="url" value="{{ old('url') }}">
        <input type="submit">
    </form>
@endsection
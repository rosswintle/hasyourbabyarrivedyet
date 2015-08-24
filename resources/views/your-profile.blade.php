@extends('layouts.master')

@section('display_name', $profile->display_name . ' (yours)');

@section('content')
    <h1 class="display-name">{{ $profile->display_name }} (yours)</h1>
    <h2>Has your baby arrived yet?</h2>
    <div class="answer">{{ $profile->statusAsString() }}</div>
    <p>It's here!</p>
@endsection
@extends('layouts.master')

@section('display_name', $profile->display_name)

@section('content')
    <div class="row">
        <div class="col-xs-12 text-center">
            <h1 class="display-name">{{ $profile->display_name }}</h1>
            <h2>Has your baby arrived yet?</h2>
            <div class="answer">{{ $profile->statusAsString() }}</div>
        </div>
    </div>
@endsection
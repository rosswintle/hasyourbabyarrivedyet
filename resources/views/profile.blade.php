@extends('layouts.master')

@section('title', $profile->display_name . ' - has your baby arrived yet? - hasyourbabyarrivedyet.com')

@section('description', $profile->display_name . ' - has your baby arrived yet? Find out on their simple birth announcement page at hasyourbabyarrivedyet.com')

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
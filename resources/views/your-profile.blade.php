@extends('layouts.master')

@section('display_name', $profile->display_name . ' (yours)')

@section('content')
    <div class="row">
        <div class="col-xs-12 text-center">
            <h1 class="display-name">{{ $profile->display_name }} (yours)</h1>
            <h2>Current status:</h2>
            <div class="small-answer">{{ $profile->statusAsString() }}</div>
            <h2>Change status:</h2>
            <button class="big-red-button">Change<br>Status</button>

        </div>
    </div>
@endsection
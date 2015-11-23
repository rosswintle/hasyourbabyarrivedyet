@extends('layouts.master')

@section('display_name', $profile->display_name . ' (yours)')
@section('title', $profile->display_name . ' - has your baby arrived yet? - hasyourbabyarrivedyet.com')

@section('description', $profile->display_name . ' - has your baby arrived yet? Find out on their simple birth announcement page at hasyourbabyarrivedyet.com')


@section('content')
    <div class="row">
        <div class="col-xs-12 text-center">
            <h1 class="display-name">{{ $profile->display_name }} (yours)</h1>
            <h2>Current status:</h2>
            <div class="small-answer">{{ $profile->statusAsString() }}</div>
            <h2>Change status:</h2>
            {!! Form::open(['method' => 'POST', 'action' => ['UserController@toggleState']]) !!}
                <button class="big-red-button">Change<br>Status</button>
            {!! Form::close() !!}

        </div>
    </div>
@endsection
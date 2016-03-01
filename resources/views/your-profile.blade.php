@extends('layouts.master')

@section('title', $profile->display_name . ' - has your baby arrived yet? - hasyourbabyarrivedyet.com')

@section('description', $profile->display_name . ' - has your baby arrived yet? Find out on their simple birth announcement page at hasyourbabyarrivedyet.com')

@section('display_name', $profile->display_name)

@section('content')
    <div class="row">
        <div class="col-xs-12 text-center">
            @include('flash::message')
            <h1 class="display-name">{{ $profile->display_name }}</h1>
            <h2>Current status:</h2>
            <div class="small-answer">{{ $profile->statusAsString() }}</div>
            <h2>Change status:</h2>
            {!! Form::open(['method' => 'POST', 'action' => ['UserController@toggleState']]) !!}
                <button class="big-red-button">Change<br>Status</button>
            {!! Form::close() !!}
            <h2>Current note:</h2>
            <p>
                {!! $profile->note !!}
                <br><a class="btn btn-default" href="{{ URL::route('user.profile.note', [ Auth::user()->domain ]) }}">Edit note</a>
            </p>

        </div>
    </div>
@endsection
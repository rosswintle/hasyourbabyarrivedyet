@extends('layouts.master')

@section('title', $user->display_name . ' - has your baby arrived yet? - hasyourbabyarrivedyet.com')

@section('description', $user->display_name . ' - has your baby arrived yet? Find out on their simple birth announcement page at hasyourbabyarrivedyet.com')

@section('display_name', $user->display_name)

@section('content')
    <div class="row">
        <div class="col-xs-6 col-xs-push-3 text-center">
            @include('flash::message')
            <h1 class="display-name">{{ $user->display_name }}</h1>
            <h2>Edit note:</h2>
            <form method="POST" action="{{ route('user.update-note') }}">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <p>
                    <input type="text" name="note" value="{{ $user->note }}">
                </p>
                <p>
                    <input type="submit" value="Change it!" class="btn btn-default">
                </p>
            </form>

        </div>
    </div>
@endsection

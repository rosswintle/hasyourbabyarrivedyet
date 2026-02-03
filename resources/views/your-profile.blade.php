@extends('layouts.master')

@section('title', $profile->display_name . ' - has your baby arrived yet? - hasyourbabyarrivedyet.com')

@section('description', $profile->display_name . ' - has your baby arrived yet? Find out on their simple birth announcement page at hasyourbabyarrivedyet.com')

@section('display_name', $profile->display_name)

@section('content')
    <div class="row">
        <div class="col-xs-12 text-center">
            @include('flash::message')
            <x-main-heading>{{ $profile->display_name }}</x-main-heading>
            <h2 class="text-4xl font-cursive font-bold text-center mb-24">
                Has your baby arrived yet?
            </h2>

            <h2>Current status:</h2>
            <div class="text-8xl mb-8 font-display text-center">
                {{ $profile->statusAsString() }}
            </div>

            <form method="POST" action="{{ route('user.toggle-state') }}" class="mb-8">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <x-button>Change Status</x-button>
            </form>

            <h2 class="mb-2">Current note:</h2>
            <p>
                {!! $profile->note !!}
            </p>

            <p>
                <x-link-button href="{{ route('user.profile.note', [ Auth::user()->domain ]) }}">Edit note</x-link-button>
            </p>

        </div>
    </div>
@endsection

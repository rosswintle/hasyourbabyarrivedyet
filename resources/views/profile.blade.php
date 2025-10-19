@extends('layouts.master')

@section('title', $profile->display_name . ' - has your baby arrived yet? - hasyourbabyarrivedyet.com')

@section('description', $profile->display_name . ' - has your baby arrived yet? Find out on their simple birth announcement page at hasyourbabyarrivedyet.com')

@section('display_name', $profile->display_name)

@section('content')
    @include('flash::message')
    <x-main-heading>{{ $profile->display_name }}</x-main-heading>
    <h2 class="text-4xl font-cursive font-bold text-center mb-24">Has your baby arrived yet?</h2>
    <div class="text-8xl font-display text-center">{{ $profile->statusAsString() }}</div>
    <p>
        {!! $profile->note !!}
    </p>
@endsection

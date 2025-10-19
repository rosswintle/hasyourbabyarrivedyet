@extends('layouts.master')

@section('title', 'hasyourbabyarrivedyet.com - Simple sites for sharing baby news')

@section('description', 'Simple baby arrival announcement sites for sharing baby news and answering the question: Has your baby arrived yet?')

@section('content')
    <x-main-heading>hasyourbabyarrivedyet.com</x-main-heading>
    <h2 class="font-bold text-lg w-full max-w-2xl mx-auto text-center mb-10">A free and simple service for sharing news of your new arrival and stopping people asking you the obvious question: Has your baby arrived yet?!</h2>
    <p class="flex justify-center gap-4">
        <x-button href="{{ url('how-it-works') }}">Find out more</x-button>
        @if (! Auth::user())
            <x-button href="{{ route('register') }}">Sign Up</x-button>
        @else
            <x-button href="{{ URL::route('user.profile.index', [ Auth::user()->domain ]) }}">Your Page</x-button>
        @endif
    </p>
    <div class="mt-10 md:mt-20 md:flex md:gap-6">
        <div class="mb-10 md:w-1/3 md:order-2">
            <img class="block mx-auto max-w-64" src="/images/mobile-mockup.jpg">
        </div>
        <div class="md:w-2/3 md:order-1 text-lg">
            <h2 class="text-4xl text-hybay-pink mb-6 font-bold">What is this?</h2>

            <p class="mb-4">It&apos;s a fun side project of mine!</p>

            <p class="mb-4">When we were waiting for our first child to be born we had a simple one-page website like this that said &ldquo;NO/YES&rdquo;. I bought the domain name with the aim of running this as a really simple service for parents-to-be. Possibly with some fun added extras.</p>

            <p class="mb-4">Here&apos;s an example: </p>

            <p class="mb-4"><x-button href="http://kateandwilliam.{{ config('hasyourbabyarrivedyet.domain') }}">Kate and William's Page</x-button></p>

            <p>You can find out <a class="underline text-hybay-primary" href="{{ url('how-it-works') }}">how it works</a>, or go ahead and <a class="underline text-hybay-primary" href="{{ route('register') }}">sign up</a>.</p>
        </div>
    </div>
@endsection

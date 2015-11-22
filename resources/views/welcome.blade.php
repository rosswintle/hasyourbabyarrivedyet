@extends('layouts.master')

@section('content')
    <div class="container-fluid">
        <div class="row hero-row">
            <div class="col-xs-12 col-sm-8 col-sm-offset-2 text-center">
                <h1 class="welcome-title small-on-mobile">hasyourbabyarrivedyet.com</h1>
                <p><strong>A free and simple service for sharing news of your new arrival and stopping people asking you the obvious question: Has your baby arrived yet?!</strong></p>
                <p>
                    <a class="btn btn-default" role="button">Find out more</a>
                    <a class="btn btn-default" href="{{ action('Auth\AuthController@getRegister') }}" role="button">Sign Up</a>
                </p>
            </div>
        </div>
        <div class="hero-row">
            <div class="col-sm-3 col-sm-push-8">
                <img class="img-responsive center-block" src="/images/mobile-mockup.jpg">
            </div>
            <div class="col-sm-7 col-sm-pull-2">
                <h2>What is this?</h2>

                <p>It’s a fun side project of mine!</p>

                <p>When we were waiting for our first child to be born we had a simple one-page website like this that said “NO/YES”. I bought the domain name with the aim of running this as a really simple service for parents-to-be. Possibly with some fun added extras.</p>

                <p>It is live and open to sign-ups, but it’s currently under development so consider it a work in progress.</p>

                <p>Here’s an example: </p>

                <a class="btn btn-default" href="http://kateandwilliam.hasyourbabyarrivedyet.com">Kate and William's Page</a></p>

                <p>You can find out <a href="">how it works</a>, or go ahead and <a href="{{ action('Auth\AuthController@getRegister') }}">sign up</a>.</p>
            </div>
        </div>
        <div class="hero-row">
            <div class="col-sm-5">

            </div>
            <div class="col-sm-5">

            </div>
        </div>
    </div>

@endsection
@extends('layouts.master')

@section('title', 'How it works - hasyourbabyarrivedyet.com - Simple sites for sharing baby news')

@section('description', 'Simple baby arrival announcement sites for sharing baby news and answering the question: Has your baby arrived yet?')

@section('content')
    <div class="container-fluid">
        <div class="row hero-row">
            <div class="col-xs-12 col-sm-8 col-sm-offset-2 text-center">
                <h1 class="welcome-title small-on-mobile">hasyourbabyarrivedyet.com</h1>
            </div>
        </div>
        <div class="hero-row">
            <div class="col-sm-3 col-sm-push-8">
                <img class="img-responsive center-block" src="/images/mobile-mockup.jpg">
            </div>
            <div class="col-sm-7 col-sm-pull-2">
                <h2>What it is</h2>

                <p><strong>hasyourbabyarrivedyet.com</strong> is a simple service that stops your friends and family having to
                    repeatedly ask you “Has your baby arrived yet?”. It gives you a personalised web page that clearly
                    and boldly states “NO” or “YES”.</p>

                <h2>How it works</h2>

                <p>Start by <a href="{{ url('/register') }}">signing up</a>, and then
                <a href="{{ url('/login') }}">log in</a> from your mobile up to 90
                days beforehand – it will remember who you are!</p>

                <p>Then just return to the page, hit the
                button, and get on with your feeding / changing / cuddling / sleeping duties, safe in the knowledge
                that no one will have to bother you to find out your news.</p>

                <p>Don't forget to tell all your friends!!!</p>

                <h2>Keeping it simple</h2>

                <p>The last thing you want in the first hours of being a parent is to have to log in somewhere
                and do something complicated.</p>

                <p>So <strong>hasyourbabyarrivedyet.com is designed with ease and
                simplicity in mind</strong>.</p>

                <p>Our R&D department developed the “<strong>IT’S HERE BUTTON</strong>“: your one, simple action
                to change the status on your page.</p>

                <h2>Notes and details</h2>

                <p>[coming soon!] You can optionally add a note to record the name, sex, weight, time, date, etc. And more sophisticated,
                but equally simple, options are on the way.</p>

                <h2>Sharing</h2>

                <p>[coming soon!] There are simple sharing options letting you post your status to popular social networks.  We’ll
                    try to make this even easier in future updates.</p>

                <h2>What's with the pink?</h2>

                <p>I spent a long time choosing the pink to be a bright, fun, happy colour that represented babies
                    in general rather than girls specifically.</p>
                <p>But because for many pink is associated with girls,
                    I’ve created colour schemes for your page. From an equally-bright-and-fun shade of blue,
                    through to a selection of colours that could be considered gender-neutral.</p>
                <p>The choice is yours!</p>

                <h2>Who are you?</h2>

                <p>I’m Ross, and I run a little web development and technology consultancy called
                    <a href="http://oikos.org.uk">Oikos</a> that focusses on the charity sector.
                    I tweet as <a href="https://twitter.com/magicroundabout">@magicroundabout</a>.
                    If you like hasyourbabyarrivedyet, why not pop over and say “Hi”?</p>
            </div>
        </div>
    </div>

@endsection

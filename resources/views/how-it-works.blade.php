@extends('layouts.master')

@section('title', 'How it works - hasyourbabyarrivedyet.com - Simple sites for sharing baby news')

@section('description', 'Simple baby arrival announcement sites for sharing baby news and answering the question: Has your baby arrived yet?')

@section('content')
        <x-main-heading>hasyourbabyarrivedyet.com</x-main-heading>
        <div class="mt-20 md:flex md:gap-6">
            <div class="w-1/3 md:order-2">
                <img class="img-responsive center-block" src="/images/mobile-mockup.jpg">
            </div>

            <div class="w-2/3 md:order-1 text-lg">
                <x-sub-heading>What it is</x-sub-heading>

                <p class="mb-4"><strong>hasyourbabyarrivedyet.com</strong> is a simple service that stops your friends and family having to
                    repeatedly ask you &ldquo;Has your baby arrived yet?&rdquo;. It gives you a personalised web page that clearly
                    and boldly states &ldquo;NO&rdquo; or &ldquo;YES&rdquo;.</p>

                <x-sub-heading>How it works</x-sub-heading>

                <p class="mb-4">Start by <a href="{{ url('/register') }}">signing up</a>, and then
                <a href="{{ url('/login') }}">log in</a> from your mobile up to 90
                days beforehand &mdash; it will remember who you are!</p>

                <p class="mb-4">Then just return to the page, hit the
                button, and get on with your feeding / changing / cuddling / sleeping duties, safe in the knowledge
                that no one will have to bother you to find out your news.</p>

                <p class="mb-4">Don't forget to tell all your friends!!!</p>

                <x-sub-heading>Keeping it simple</x-sub-heading>

                <p class="mb-4">The last thing you want in the first hours of being a parent is to have to log in somewhere
                and do something complicated.</p>

                <p class="mb-4">So <strong>hasyourbabyarrivedyet.com is designed with ease and
                simplicity in mind</strong>.</p>

                <p class="mb-4">Our R&D department developed the &ldquo;<strong>IT&apos;S HERE BUTTON</strong>&ldquo;: your one, simple action
                to change the status on your page.</p>

                <x-sub-heading>Notes and details</x-sub-heading>

                <p class="mb-4">[coming soon!] You can optionally add a note to record the name, sex, weight, time, date, etc. And more sophisticated,
                but equally simple, options are on the way.</p>

                <x-sub-heading>Sharing</x-sub-heading>

                <p class="mb-4">[coming soon!] There are simple sharing options letting you post your status to popular social networks.  We&apos;ll
                    try to make this even easier in future updates.</p>

                <x-sub-heading>What's with the pink?</x-sub-heading>

                <p class="mb-4">I spent a long time choosing the pink to be a bright, fun, happy colour that represented babies
                    in general rather than girls specifically.</p>
                <p class="mb-4">But because for many pink is associated with girls,
                    I&apos;ve created colour schemes for your page. From an equally-bright-and-fun shade of blue,
                    through to a selection of colours that could be considered gender-neutral.</p>
                <p class="mb-4">The choice is yours!</p>

                <x-sub-heading>Who are you?</x-sub-heading>

                <p class="mb-4">I&apos;m Ross, and I run a little web development and technology consultancy called
                    <a href="http://oikos.org.uk">Oikos</a> that focusses on the charity sector.
                    I tweet as <a href="https://twitter.com/magicroundabout">@magicroundabout</a>.
                    If you like hasyourbabyarrivedyet, why not pop over and say &ldquo;Hi&rdquo;?</p>

            </div>
        </div>

@endsection

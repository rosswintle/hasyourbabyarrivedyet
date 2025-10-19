<html>
    <head>
        <title>
            @yield('title')
        </title>
        <meta name="description" content="@yield('description')">
        <meta property="og:locale" content="en_GB">
        <meta property="og:title" content="@yield('title')">
        <meta property="og:description" content="@yield('description')">
        <meta property="og:site_name" content="hasyourbabyarrivedyet.com">
        <meta property="og:image" content="https://{{ config('hasyourbabyarrivedyet.domain') }}/images/favicons/apple-touch-icon-180x180.png">


        <meta name="HandheldFriendly" content="True">
        <meta name="MobileOptimized" content="320">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

        <link rel="apple-touch-icon" sizes="57x57" href="https://{{ config('hasyourbabyarrivedyet.domain') }}/images/favicons/apple-touch-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="114x114" href="https://{{ config('hasyourbabyarrivedyet.domain') }}/images/favicons/apple-touch-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="72x72" href="https://{{ config('hasyourbabyarrivedyet.domain') }}/images/favicons/apple-touch-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="144x144" href="https://{{ config('hasyourbabyarrivedyet.domain') }}/images/favicons/apple-touch-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="60x60" href="https://{{ config('hasyourbabyarrivedyet.domain') }}/images/favicons/apple-touch-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="120x120" href="https://{{ config('hasyourbabyarrivedyet.domain') }}/images/favicons/apple-touch-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="76x76" href="https://{{ config('hasyourbabyarrivedyet.domain') }}/images/favicons/apple-touch-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="152x152" href="https://{{ config('hasyourbabyarrivedyet.domain') }}/images/favicons/apple-touch-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="https://{{ config('hasyourbabyarrivedyet.domain') }}/images/favicons/apple-touch-icon-180x180.png">
        <link rel="icon" type="image/png" href="https://{{ config('hasyourbabyarrivedyet.domain') }}/images/favicons/favicon-192x192.png" sizes="192x192">
        <link rel="icon" type="image/png" href="https://{{ config('hasyourbabyarrivedyet.domain') }}/images/favicons/favicon-160x160.png" sizes="160x160">
        <link rel="icon" type="image/png" href="https://{{ config('hasyourbabyarrivedyet.domain') }}/images/favicons/favicon-96x96.png" sizes="96x96">
        <link rel="icon" type="image/png" href="https://{{ config('hasyourbabyarrivedyet.domain') }}/images/favicons/favicon-16x16.png" sizes="16x16">
        <link rel="icon" type="image/png" href="https://{{ config('hasyourbabyarrivedyet.domain') }}/images/favicons/favicon-32x32.png" sizes="32x32">
        <meta name="msapplication-TileColor" content="#da532c">
        <meta name="msapplication-TileImage" content="https://{{ config('hasyourbabyarrivedyet.domain') }}/images/faviconsmstile-144x144.png">

        <link rel='stylesheet' id='googleFonts-css'  href='https://fonts.googleapis.com/css?family=Lato%3A400%2C700%2C400italic%2C700italic%7CLife+Savers%7CRanchers%7CVarela+Round' type='text/css' media='all' />

        {!! RecaptchaV3::initJs() !!}

        @vite('resources/css/app.css')
    </head>

    <body
    class="relative min-h-screen pb-32"
    style="
     --color-hybay-primary: var(--color-hybay-{{ $color_scheme ?? 'pink' }});
     --color-hybay-dark: var(--color-hybay-dark-{{ $color_scheme ?? 'pink' }});
     --color-hybay-light: var(--color-hybay-light-{{ $color_scheme ?? 'pink' }});
     }">
        <header>

            <nav class="w-full bg-gray-200 px-6 py-4">
                <div class="container mx-auto flex justify-between align-center">
                    <div class="navbar-header">
                        {{-- <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-1" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button> --}}
                        <a class="font-display text-primary text-xl md:text-2xl" href="{{ config('app.url') }}/">
                            hasyourbabyarrivedyet.com
                        </a>
                    </div>
                    <ul class="flex gap-4 items-center">
                        <li class="">
                            <a href="{{ config('app.url') }}">Home</a>
                        </li>
                        @if (Auth::user() && Auth::user()->isAdmin())
                            <li>
                                <a href="{{ action([App\Http\Controllers\UserController::class, 'index']) }}">User Management</a>
                            </li>
                        @endif
                        <li>
                            <a href="{{ url('how-it-works') }}">How it works</a>
                        </li>
                        <li>
                            <a href="{{ url('help-others') }}">Help other children</a>
                        </li>
                        <li>
                            @if (Auth::user())
                                <a href="{{ URL::route('user.profile.index', [ Auth::user()->domain ]) }}">Your Page</a>
                            @else
                                <a href="{{ route('register') }}">Sign Up</a>
                            @endif
                        </li>
                        <li>
                            @if (Auth::user())
                                <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                            @else
                                <a href="{{ route('login') }}">Log in</a>
                            @endif
                        </li>
                    </ul>
                </div>
            </nav>
            <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
            </form>

        </header>

        <div id="main-container" class="container max-w-4xl mx-auto px-6">
            @yield('content')
        </div>

        <footer class="absolute bottom-0 left-0 w-full bg-gray-200">
            <div class="flex justify-between align-center px-6 py-4">
                <div id="footer-left">
                    <a href="{{ url('terms') }}">Terms, Conditions and Privacy</a>
                </div>
                <div id="footer-right">
                    An <a href="https://oikos.digital/">Oikos</a> project
                </div>
            </div>
        </footer>

        @env('production')
            <!-- Fathom - beautiful, simple website analytics -->
                <script src="https://cdn.usefathom.com/script.js" data-site="UGKIIZAY" defer></script>
            <!-- / Fathom -->
        @endenv
    </body>
</html>

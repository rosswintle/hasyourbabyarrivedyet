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
        <meta property="og:image" content="https://{{ env('DOMAIN') }}/images/favicons/apple-touch-icon-180x180.png">


        <meta name="HandheldFriendly" content="True">
        <meta name="MobileOptimized" content="320">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

        <link rel="apple-touch-icon" sizes="57x57" href="https://{{ env('DOMAIN') }}/images/favicons/apple-touch-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="114x114" href="https://{{ env('DOMAIN') }}/images/favicons/apple-touch-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="72x72" href="https://{{ env('DOMAIN') }}/images/favicons/apple-touch-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="144x144" href="https://{{ env('DOMAIN') }}/images/favicons/apple-touch-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="60x60" href="https://{{ env('DOMAIN') }}/images/favicons/apple-touch-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="120x120" href="https://{{ env('DOMAIN') }}/images/favicons/apple-touch-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="76x76" href="https://{{ env('DOMAIN') }}/images/favicons/apple-touch-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="152x152" href="https://{{ env('DOMAIN') }}/images/favicons/apple-touch-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="https://{{ env('DOMAIN') }}/images/favicons/apple-touch-icon-180x180.png">
        <link rel="icon" type="image/png" href="https://{{ env('DOMAIN') }}/images/favicons/favicon-192x192.png" sizes="192x192">
        <link rel="icon" type="image/png" href="https://{{ env('DOMAIN') }}/images/favicons/favicon-160x160.png" sizes="160x160">
        <link rel="icon" type="image/png" href="https://{{ env('DOMAIN') }}/images/favicons/favicon-96x96.png" sizes="96x96">
        <link rel="icon" type="image/png" href="https://{{ env('DOMAIN') }}/images/favicons/favicon-16x16.png" sizes="16x16">
        <link rel="icon" type="image/png" href="https://{{ env('DOMAIN') }}/images/favicons/favicon-32x32.png" sizes="32x32">
        <meta name="msapplication-TileColor" content="#da532c">
        <meta name="msapplication-TileImage" content="https://{{ env('DOMAIN') }}/images/faviconsmstile-144x144.png">

        <link rel='stylesheet' id='googleFonts-css'  href='https://fonts.googleapis.com/css?family=Lato%3A400%2C700%2C400italic%2C700italic%7CLife+Savers%7CRanchers%7CVarela+Round' type='text/css' media='all' />
        <script src="{{ mix('js/app.js') }}" type="text/javascript"></script>
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    </head>

    <body class="{{ $color_scheme_class ?? 'hybay-color-scheme-hybay-pink' }}">
<?php /*
        <div id="fb-root"></div>
        <script>(function(d, s, id) {
                var js, fjs = d.getElementsByTagName(s)[0];
                if (d.getElementById(id)) return;
                js = d.createElement(s); js.id = id;
                js.src = "http://connect.facebook.net/en_GB/all.js#xfbml=1";
                fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));</script>
 */ ?>
        <header>

            <nav class="navbar navbar-default">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-1" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="https://{{ env('DOMAIN') }}/">hasyourbabyarrivedyet.com</a>
                    </div>
                    <div class="collapse navbar-collapse" id="navbar-collapse-1">
                        <ul class="nav navbar-nav">
                        </ul>
                        <ul class="nav navbar-nav navbar-right">
                            <li>
                                <a href="https://{{ env('DOMAIN') }}/">Home</a>
                            </li>
                            @if (Auth::user() && Auth::user()->isAdmin())
                                <li>
                                    <a href="{{ action('UserController@index') }}">User Management</a>
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
                    </div><!-- /.navbar-collapse -->
                </div>
            </nav>
            <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
            </form>

        </header>

        <div id="main-container" class="container">
            @yield('content')
        </div>

        <footer class="container-fluid">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <a href="{{ url('terms') }}">Terms, Conditions and Privacy</a>
                    </div>
                    <div class="col-sm-6 text-right">
                        An <a href="https://oikos.digital/">Oikos</a> project
                    </div>
                </div>
            </div>
        </footer>

        @if (env('GOOGLE_ANALYTICS_ID'))
            <!-- Google Analytics -->
            <script>
                (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
                })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

                ga('create', '{{ env('GOOGLE_ANALYTICS_ID') }}', 'auto');
                ga('send', 'pageview');

                @if (isset($send_ga_event))
                    ga('send', {
                        hitType: 'event',
                        eventCategory: '{{ $send_ga_event['category'] }}',
                        eventAction: '{{ $send_ga_event['action'] }}',
                        eventLabel: '{{ $send_ga_event['label'] }}',
                        eventValue: '{{ $send_ga_event['value'] }}'
                    });
                @endif

            </script>
        @endif
        <!-- Twitter API -->
        <?php /*
            <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="http://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
        */ ?>

    </body>
</html>

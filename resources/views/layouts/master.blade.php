<html>
    <head>
        <title>
            hasyourbabyarrivedyet.com - Simple sites for sharing baby news
        </title>

        <meta name="HandheldFriendly" content="True">
        <meta name="MobileOptimized" content="320">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

<!--        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet" integrity="sha256-MfvZlkHCEqatNoGiOXveE8FIwMzZg4W85qfrfIFBfYc= sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js" integrity="sha256-Sk3nkD6mLTMOF0EOpNtsIry+s1CsaqQC1rVLTAy+0yc= sha512-K1qjQ+NcF2TYO/eI3M6v8EiNYZfA95pQumfvcVrTHtwQVDG+aHRqLi/ETn2uB+1JqwYqVG3LIvdm9lj6imS/pQ==" crossorigin="anonymous"></script>
-->
        <link rel="apple-touch-icon" sizes="57x57" href="http://hasyourbabyarrivedyet.com/wp-content/themes/hasyourbabyarrivedyet/favicons/apple-touch-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="114x114" href="http://hasyourbabyarrivedyet.com/wp-content/themes/hasyourbabyarrivedyet/favicons/apple-touch-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="72x72" href="http://hasyourbabyarrivedyet.com/wp-content/themes/hasyourbabyarrivedyet/favicons/apple-touch-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="144x144" href="http://hasyourbabyarrivedyet.com/wp-content/themes/hasyourbabyarrivedyet/favicons/apple-touch-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="60x60" href="http://hasyourbabyarrivedyet.com/wp-content/themes/hasyourbabyarrivedyet/favicons/apple-touch-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="120x120" href="http://hasyourbabyarrivedyet.com/wp-content/themes/hasyourbabyarrivedyet/favicons/apple-touch-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="76x76" href="http://hasyourbabyarrivedyet.com/wp-content/themes/hasyourbabyarrivedyet/favicons/apple-touch-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="152x152" href="http://hasyourbabyarrivedyet.com/wp-content/themes/hasyourbabyarrivedyet/favicons/apple-touch-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="http://hasyourbabyarrivedyet.com/wp-content/themes/hasyourbabyarrivedyet/favicons/apple-touch-icon-180x180.png">
        <link rel="icon" type="image/png" href="http://hasyourbabyarrivedyet.com/wp-content/themes/hasyourbabyarrivedyet/favicons/favicon-192x192.png" sizes="192x192">
        <link rel="icon" type="image/png" href="http://hasyourbabyarrivedyet.com/wp-content/themes/hasyourbabyarrivedyet/favicons/favicon-160x160.png" sizes="160x160">
        <link rel="icon" type="image/png" href="http://hasyourbabyarrivedyet.com/wp-content/themes/hasyourbabyarrivedyet/favicons/favicon-96x96.png" sizes="96x96">
        <link rel="icon" type="image/png" href="http://hasyourbabyarrivedyet.com/wp-content/themes/hasyourbabyarrivedyet/favicons/favicon-16x16.png" sizes="16x16">
        <link rel="icon" type="image/png" href="http://hasyourbabyarrivedyet.com/wp-content/themes/hasyourbabyarrivedyet/favicons/favicon-32x32.png" sizes="32x32">
        <meta name="msapplication-TileColor" content="#da532c">
        <meta name="msapplication-TileImage" content="http://hasyourbabyarrivedyet.com/wp-content/themes/hasyourbabyarrivedyet/favicons/mstile-144x144.png">

        <link rel='stylesheet' id='googleFonts-css'  href='http://fonts.googleapis.com/css?family=Lato%3A400%2C700%2C400italic%2C700italic%7CLife+Savers%7CRanchers' type='text/css' media='all' />
        <script src="{{ elixir('js/all.js') }}" type="text/javascript"></script>
        <link rel="stylesheet" href="{{ elixir('css/app.css') }}">
    </head>

    <body>
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
                        <a class="navbar-brand" href="/">hasyourbabyarrivedyet.com</a>
                    </div>
                    <div class="collapse navbar-collapse" id="navbar-collapse-1">
                        <ul class="nav navbar-nav">
                        </ul>
                        <ul class="nav navbar-nav navbar-right">
                            @if (Auth::user() && Auth::user()->isAdmin())
                                <li>
                                    <a href="{{ action('UserController@index') }}">User Management</a>
                                </li>
                            @endif
                            <li>
                                @if (Auth::user())
                                    <a href="{{ URL::route('user.profile.index', [ Auth::user()->domain ]) }}">Your Page</a>
                                @else
                                    <a href="{{ action('Auth\AuthController@getRegister') }}">Register</a>
                                @endif
                            </li>
                            <li>
                                @if (Auth::user())
                                    <a href="{{ action('Auth\AuthController@getLogout') }}">Logout</a>
                                @else
                                    <a href="{{ action('Auth\AuthController@getLogin') }}">Login</a>
                                @endif
                            </li>
                        </ul>
                    </div><!-- /.navbar-collapse -->
                </div>
            </nav>

            <div class="container text-center">
                <p><a class="brand-link" href="http://hasyourbabyarrivedyet.com">hasyourbabyarrivedyet.com</a></p>
            </div>

        </header>

        <div class="container">
            @yield('content')
        </div>

        <!-- Twitter API -->
        <?php /*
            <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="http://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
        */ ?>

    </body>
</html>
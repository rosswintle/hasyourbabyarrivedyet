@extends('layouts.master')

@section('title', 'Help other children - hasyourbabyarrivedyet.com - Simple sites for sharing baby news')

@section('description', 'Simple baby arrival announcement sites for sharing baby news and answering the question: Has your baby arrived yet?')

@section('content')
    <div class="container-fluid">
        <div class="row hero-row">
            <div class="col-xs-12 col-sm-8 col-sm-offset-2 text-center">
                <h1 class="welcome-title small-on-mobile">hasyourbabyarrivedyet.com</h1>
            </div>
        </div>
        <div class="hero-row">
            <div class="col-sm-7 col-sm-offset-2">
                <h2>Terms, Conditions and Privacy</h2>

                <p>Now, this is all lots of fun, but I probably need to make a few things clear.
                    This is a side project so I do not really support it.  I reserve the right to refuse
                    access, and my terms and conditions, which you accept by using the service/website,
                    are basically that:</p>

                <ol>
                    <li>This is a fun side project that I provide access to because other people expressed an
                        interest in using it. Turns out it was actually useful!</li>
                    <li>This is a totally unsupported, warranty-free service for which I can accept no liability
                        for anything bad that happens, to anyone, ever, even if related to the use of this service.</li>
                    <li>I will collect a small amount of data from you to run the service. This is stored and
                        processed by me and is held on a "cloud server" where I have taken reasonable precautions
                        to protect your data.</li>
                    <li>I use Google Analytics to work out how many visitors this site gets and what they do.
                        It is not personally identifiable, but it does put a "cookie" in your browser. If
                        you don't wish that to happen please disable cookies in your browser.</li>
                    <li>This service may stop working temporarily or permanently, your account may be denied
                        or deleted, and I may change how the service looks or works.
                        These terms and conditions may also change at any point. This is all highly unlikely,
                        but I need to keep my options open. You’re not entitled to any notice
                        of these things, but they will probably be announced on
                        <a href="https://twitter.com/babyarrivedyet">Twitter</a></li>.
                </ol>

                <p>Finally, most of the people using this service will probably take their child back to their home
                    and family and the child will have a safe, happy, healthy, comfortable life in a loving home.
                    Not all. But most. For other children, the story is very different. If you think this silly
                    little side project is useful then please consider making a donation to the
                    <a href="http://www.childsifoundation.org">Child’s i Foundation</a> who place orphaned Ugandan
                    children into loving family homes. <a href="http://www.childsifoundation.org/give">DONATE HERE</a>.
                    Thanks.</p>
            </div>
        </div>
    </div>

@endsection
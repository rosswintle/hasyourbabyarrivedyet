<!-- resources/views/auth/register.blade.php -->
@extends('layouts.master')

@section('title', 'Sign up - hasyourbabyarrivedyet.com - Simple sites for sharing baby news')

@section('description', 'Simple baby arrival announcement sites for sharing baby news and answering the question: Has your baby arrived yet?')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Register</div>
                    <div class="panel-body">
                        <p class="text-center">
                            To get your page you'll just need to give us a few details and make
                            some simple choices.
                        </p>
                        @if (count($errors) > 0)
                            <div class="alert alert-danger">
                                <strong>Whoops!</strong> There were some problems with your details.<br><br>
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">

                            <div class="form-group">
                                <label class="col-md-4 control-label">Name</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="name" value="{{ old('name') }}">
                                    <p class="field-description">Please tell us your name</p>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">E-Mail Address</label>
                                <div class="col-md-6">
                                    <input type="email" class="form-control" name="email" value="{{ old('email') }}">
                                    <p class="field-description">Please tell us your email address - you will use this to log in</p>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">Display name</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="display_name" value="{{ old('display_name') }}">
                                    <p class="field-description">The display name will be the name(s) shown on your profile page.
                                    This will usually be something like "Kate and William"</p>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">Domain</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="domain" value="{{ old('domain') }}">
                                    <p class="field-description">The domain is the bit of the website address that goes
                                        before "hasyourbabyarrivedyet.com". It must be letters, numbers and hyphens with
                                    no spaces allowed. e.g. "kateandwilliam"</p>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">Password</label>
                                <div class="col-md-6">
                                    <input type="password" class="form-control" name="password">
                                    <p class="field-description">Please enter a password</p>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">Confirm Password</label>
                                <div class="col-md-6">
                                    <input type="password" class="form-control" name="password_confirmation">
                                    <p class="field-description">Please enter your password again</p>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">Colour scheme</label>
                                <div class="col-md-6">
                                    <select type="password" class="form-control" name="color_scheme">
                                        <option value="pink">Pink</option>
                                        <option value="blue">Blue</option>
                                        <option value="purple">Purple</option>
                                        <option value="violet">Violet</option>
                                        <option value="red">Red</option>
                                        <option value="deep-orange">Deep Orange</option>
                                        <option value="dark-green">Dark Green</option>
                                        <option value="mint-green">Mint Green</option>
                                    </select>
                                    <p class="field-description">Choose a colour-scheme for your page</p>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label"></label>
                                <div class="col-md-6">
                                    {!! Recaptcha::render() !!}
                                    <p class="field-description">Unfortunately we need you to do this for security and to
                                        prevent spam registrations.</p>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        Register
                                    </button>
                                    <p class="field-description">Please note that there are some simple
                                        <a href="{{ url('terms') }}">terms and conditions</a> that apply to all
                                    users of this website.</p>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
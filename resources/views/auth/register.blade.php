<!-- resources/views/auth/register.blade.php -->
@extends('layouts.master')

@section('title', 'Sign up - hasyourbabyarrivedyet.com - Simple sites for sharing baby news')

@section('description', 'Simple baby arrival announcement sites for sharing baby news and answering the question: Has your baby arrived yet?')

@section('content')
    <div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
        <div class="sm:mx-auto sm:w-full sm:max-w-sm">
            <h2 class="mt-10 mb-6 text-center text-2xl/9 font-bold tracking-tight text-gray-900 dark:text-white">Register</h2>
        </div>

        <p class="text-center">
            To get your page you'll just need to give us a few details and make
            some simple choices.
        </p>

        <div class="mt-6 sm:mx-auto sm:w-full sm:max-w-sm">
            @if (count($errors) > 0)
                <div class="px-4 py-2 mb-6 bg-red-100 text-red-600 rounded-md">
                    <strong>Whoops!</strong> There were some problems with your details.
                </div>
            @endif


            <form action="{{ url('/register') }}" method="POST" class="space-y-6">
                @csrf

                <!-- Name field -->
                <div>
                    <x-auth.label for="email">
                        Your Name
                    </x-auth.label>
                    <div class="mt-2">
                        <x-auth.input id="name" type="text" name="name" value="{{ old('name') }}" required />
                    </div>
                    @error('name')
                        <x-auth.input-error>{{ $message }}</x-auth.input-error>
                    @enderror
                    <x-auth.description>Please tell us your name</x-auth.description>
                </div>


                <!-- Email field -->
                <div>
                    <x-auth.label for="email">
                        Email address
                    </x-auth.label>
                    <div class="mt-2">
                        <x-auth.input id="email" type="email" name="email" value="{{ old('email') }}" required autocomplete="email" />
                    </div>
                    @error('email')
                        <x-auth.input-error>{{ $message }}</x-auth.input-error>
                    @enderror

                    <x-auth.description>Your email address - you will use this to log in</x-auth.description>
                </div>

                <!-- Display name field -->
                <div>
                    <x-auth.label for="display_name">
                        Display name
                    </x-auth.label>
                    <div class="mt-2">
                        <x-auth.input id="display_name" type="text" name="display_name" value="{{ old('display_name') }}" required />
                    </div>
                    @error('display_name')
                        <x-auth.input-error>{{ $message }}</x-auth.input-error>
                    @enderror

                    <x-auth.description>
                        The display name will be the name(s) shown on your profile page.
                        This will usually be something like "Kate and William"
                    </x-auth.description>
                </div>

                <div>
                    <x-auth.label for="domain">Domain</x-auth.label>
                    <div class="mt-2">
                        <x-auth.input id="domain" type="text" name="domain" value="{{ old('domain') }}" />
                    </div>
                    @error('domain')
                        <x-auth.input-error>{{ $message }}</x-auth.input-error>
                    @enderror

                    <x-auth.description>
                        The domain is the bit of the website address that goes
                        before "hasyourbabyarrivedyet.com". It must be letters, numbers and hyphens with
                        no spaces allowed. e.g. "kateandwilliam"
                    </x-auth.description>
                </div>

                <div>
                    <x-auth.label for="password">
                        Password
                    </x-auth.label>
                    <div class="mt-2">
                        <x-auth.input id="password" type="password" name="password" required autocomplete="current-password" />
                    </div>
                    @error('password')
                        <x-auth.input-error>{{ $message }}</x-auth.input-error>
                    @enderror

                    <x-auth.description>Please enter a password</x-auth.destription>
                </div>

                <div>
                    <x-auth.label for="password_confirmation">Confirm Password</x-auth.label>
                    <div class="mt-2">
                        <x-auth.input id="password_confirmation" type="password" name="password_confirmation" required autocomplete="current-password" />
                    </div>
                    @error('password_confirmation')
                        <x-auth.input-error>{{ $message }}</x-auth.input-error>
                    @enderror
                    <x-auth.description>Please enter your password again</x-auth.description>
                </div>

                <div>
                    <x-auth.label for="color_scheme">
                        Color scheme
                    </x-auth.label>

                    <div class="mt-2">
                        <select name="color_scheme" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                            <option value="pink">Pink</option>
                            <option value="blue">Blue</option>
                            <option value="purple">Purple</option>
                            <option value="violet">Violet</option>
                            <option value="red">Red</option>
                            <option value="deep-orange">Deep Orange</option>
                            <option value="dark-green">Dark Green</option>
                            <option value="mint-green">Mint Green</option>
                        </select>
                        @error('color_scheme')
                            <x-auth.input-error>{{ $message }}</x-auth.input-error>
                        @enderror

                        <x-auth.description>Choose a colour-scheme for your page</x-auth.description>
                    </div>
                </div>

                {!! RecaptchaV3::field('register', $name='g-recaptcha-response') !!}

                <div>
                    <button type="submit" class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm/6 font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 dark:bg-indigo-500 dark:shadow-none dark:hover:bg-indigo-400 dark:focus-visible:outline-indigo-500">
                        Register
                    </button>
                    <x-auth.description>
                        Please note that there are some simple
                        <a href="{{ url('terms') }}" class="underline hover:no-underline">terms and conditions</a> that apply to all
                        users of this website.
                    </x-auth.description>
                </div>

            </form>
        </div>

@endsection

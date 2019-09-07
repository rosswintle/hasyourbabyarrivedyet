<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Mail;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|confirmed|min:6',
            'domain' => 'required|unique:users|alpha_num|not_in:expecting,findoutmore,fedupofbeingasked,fedupwithbeingasked',
            'display_name' => 'required|max:255',
            'g-recaptcha-response' => 'required|recaptcha',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    protected function create(array $data)
    {
        Mail::send('emails.signup-admin-notify', ['data' => $data], function ($m) use ($data) {
            $m->from('admin@hasyourbabyarrivedyet.com', 'hasyourbabyarrivedyet.com');

            $m->to('ross@oikos.org.uk', 'Ross Wintle')->subject('New signup on hasyourbabyarrivedyet.com!');
        });

        flash('Thank you for signing up - here is your profile page.')->success();

        session()->flash('send_ga_event', [
            'category' => 'userEvents',
            'action' => 'signUp',
            'label' => '',
            'value' => 1
        ]);

        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'display_name' => $data['display_name'],
            'domain' => $data['domain'],
            'color_scheme' => $data['color_scheme'],
        ]);

    }

    /**
     * Set the redirect path after login based on the domain
     *
     * @return string
     */
    public function redirectPath()
    {
        $url = config('app.url');
        $subDomain = Auth::user()->domain;
        $scheme = parse_url($url, PHP_URL_SCHEME);
        $host = parse_url($url, PHP_URL_HOST);
        return $scheme.'://'.$subDomain.'.'.$host;
    }

}

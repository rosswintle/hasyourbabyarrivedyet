<?php

namespace App\Http\Controllers\Auth;

use Mail;
use App\User;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Flash;

class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

    use AuthenticatesAndRegistersUsers, ThrottlesLogins;

    protected $redirectPath = '/';
    protected $loginPath = '/login';

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'getLogout']);
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
            'domain' => 'required|unique:users|alpha_num',
            'display_name' => 'required|max:255',
            'g-recaptcha-response' => 'required|recaptcha',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(Request $request, array $data)
    {
        Mail::send('emails.signup-admin-notify', ['data' => $data], function ($m) use ($data) {
            $m->from('admin@hasyourbabyarrivedyet.com', 'hasyourbabyarrivedyet.com');

            $m->to('ross@oikos.org.uk', 'Ross Wintle')->subject('New signup on hasyourbabyarrivedyet.com!');
        });

        Flash::success('Thank you for signing up - here is your profile page.');

        $request->session()->flash('send_ga_event', [
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
    public function redirectPath() {
        $url = config('app.url');
        $subDomain = Auth::user()->domain;
        $scheme = parse_url($url, PHP_URL_SCHEME);
        $host = parse_url($url, PHP_URL_HOST);
        return $scheme.'://'.$subDomain.'.'.$host;
    }
}

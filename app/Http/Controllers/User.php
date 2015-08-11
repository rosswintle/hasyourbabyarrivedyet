<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App;

class User extends Controller
{
    public function profile($subdomain) {

        $profile = App\User::where('domain', $subdomain)->first();
        $domain = $profile->domain;
        return view('profile', compact('profile', 'domain'));

    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Flash;

class UserController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        return view('user/index', ['users' => User::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        return view('user/show', [ 'user' => User::find($id)] );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        return view('user/edit', ['user' => User::find($id)]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        User::find($id)->update($request->all());
        return view('user/edit', ['user' => User::find($id)]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        User::destroy($id);
        return view('user/index', ['users' => User::all()]);
    }

    /**
     * @param null $subdomain
     * @return \Illuminate\View\View
     */
    public function profile(Request $request, $subdomain) {

        $profile = User::where('domain', $subdomain)->first();
        $notice = null;
        if($profile) {
            $domain = $profile->domain;
            $color_scheme_class = 'hybay-color-scheme-hybay-' . $profile->color_scheme;

            if (Auth::check()) {
                $user = Auth::user();
                if ($user->id == $profile->id) {
                    return view('your-profile', compact('profile', 'domain', 'color_scheme_class', 'notice'));
                }
            }
            return view('profile', compact('profile', 'domain', 'color_scheme_class', 'notice'));
        } else {
            return response('Profile not found', 404);
        }
    }

    public function toggleState() {
        $user = Auth::user();
        $current_status = $user->status;
        $new_status = ! $current_status;
        $user->update(array('status' => $new_status));
        return redirect()->action('UserController@profile', Auth::user()->domain);
    }
}

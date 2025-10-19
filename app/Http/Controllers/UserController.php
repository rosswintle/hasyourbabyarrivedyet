<?php

namespace App\Http\Controllers;

use App\Models\User;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\URL;
use Illuminate\Validation\Rule;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class UserController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        if (!Gate::allows('manage-users')) {
            abort(401);
        }

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
     * @param  Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function show($id)
    {
        return view('user/show', [ 'user' => User::find($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function edit($id)
    {
        if (!Gate::allows('manage-users')) {
            abort(401);
        }

        return view('user/edit', ['user' => User::find($id)]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request $request
     * @param  int     $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        if (!Gate::allows('manage-users')) {
            abort(401);
        }

        $validated = $request->validate(
            [
                'name' => 'required|string|max:191',
                'email' => 'required|string|email|max:191|unique:users,email,' . $id,
                'status' => 'required|boolean',
                'display_name' => 'required|string|max:191',
                'domain' => 'required|string|max:191|unique:users,domain,' . $id,
                'color_scheme' => 'required|string|max:191',
                'note' => 'nullable|string|max:2048',
            ]
        );

        $validated['note'] ??= '';

        User::find($id)->update(
            $validated
        );

        return view('user/edit', ['user' => User::find($id)]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return Response
     */
    public function destroy($id)
    {
        if (!Gate::allows('manage-users')) {
            abort(401);
        }

        User::destroy($id);
        return view('user/index', ['users' => User::all()]);
    }

    /**
     * @param  null $subdomain
     * @return \Illuminate\View\View
     */
    public function profile(Request $request, $subdomain)
    {

        $profile = User::where('domain', $subdomain)->first();
        $notice = null;
        if ($profile) {
            $domain = $profile->domain;

            if (Auth::check()) {
                $user = Auth::user();
                if ($user->id === $profile->id) {
                    return view(
                        'your-profile', [
                        'profile' => $profile,
                        'domain' => $domain,
                        'color_scheme' => $profile->color_scheme,
                        'notice' => $notice]
                    );
                }
            }
            return view(
                'profile', [
                'profile' => $profile,
                'domain' => $domain,
                'color_scheme' => $profile->color_scheme,
                'notice' => $notice]
            );
        } else {
            return response('Profile not found', 404);
        }
    }

    public function toggleState(Request $request)
    {
        $user = Auth::user();
        $current_status = $user->status;
        $new_status = ! $current_status;
        $user->update(array('status' => $new_status));

        if ($new_status) {
            flash('Status updated - congratulations! Do you want to <a href="' . route('user.profile.note', [ $user->domain ]) . '">set a note</a>?')->success();
        } else {
            flash('Status updated - what happened?! Do you want to <a href="' . route('user.profile.note', [ $user->domain ]) . '">change your note</a> too?')->success();
        }
        return redirect()->action([UserController::class, 'profile'], Auth::user()->domain);
    }

    public function editNote($subdomain)
    {
        $profile = User::where('domain', $subdomain)->first();
        if($profile) {
            if (Auth::check()) {
                $user = Auth::user();
                if ($user->id == $profile->id) {
                    return view('edit-note', ['user' => $user]);
                }
            }
        }
        return response('You can\'t do that!', 501);
    }

    public function updateNote(Request $request)
    {
        $user = Auth::user();
        $user->update(['note' => $request->input('note')]);
        flash('Note updated')->success();
        return redirect()->action([UserController::class, 'profile'], Auth::user()->domain);
    }

}

@extends('layouts.master')

@section('content')

    @if (isset($user))

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th colspan="2">

                        <h2>{{ $user->name }}</h2>
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Email: {{ $user->email }}</td>
                    <td><a href="{{ action('UserController@edit', ['id' => $user->id]) }}">Edit user</a></td>
                </tr>
            </tbody>
        </table>

        <a href="{{ action('UserController@index') }}">
            Back to list
        </a>
    @endif
@endsection

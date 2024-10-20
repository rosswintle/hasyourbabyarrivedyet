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
                    <td><a href="{{ route('user.edit', ['user' => $user]) }}">Edit user</a></td>
                </tr>
            </tbody>
        </table>

        <a href="{{ route('user.index') }}">
            Back to list
        </a>
    @endif
@endsection

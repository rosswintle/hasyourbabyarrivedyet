@extends('layouts.master')

@section('content')
<table class="table table-bordered">
    <thead>
        <tr>
            <td>Name</td>
            <td>Email</td>
            <td>Display name</td>
            <td>Status</td>
        </tr>
    </thead>
    <tbody>
    @foreach ($users as $user)
        <tr>
            <td>
                <a href="{{ action('UserController@show', ['id' => $user->id]) }}">
                    {{ $user->name }}
                </a>
            </td>
            <td>{{ $user->email }}</td>
            <td>{{ $user->display_name }}</td>
            <td>{{ $user->statusAsString() }}</td>
        </tr>
    @endforeach
    </tbody>
</table>
@endsection


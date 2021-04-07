@extends('layouts.master')

@section('content')
<table class="table table-bordered">
    <thead>
        <tr>
            <td>Name</td>
            <td>Email</td>
            <td>Domain</td>
            <td>Display name</td>
            <td>Status</td>
            <td>Note</td>
            <td>Colour scheme</td>
            <td>Actions</td>
        </tr>
    </thead>
    <tbody>
    @foreach ($users as $user)
        <tr>
            <td>
                <a href="{{ action('UserController@show', ['user' => $user]) }}">
                    {{ $user->name }}
                </a>
            </td>
            <td>{{ $user->email }}</td>
            <td><a href="{{ action('UserController@profile', ['subdomain' => $user->domain]) }}">{{ $user->domain }}</a></td>
            <td>{{ $user->display_name }}</td>
            <td>{{ $user->statusAsString() }}</td>
            <td>{{ $user->note }}</td>
            <td>{{ $user->color_scheme }}</td>
            <td>
                <form action="{{ action('UserController@destroy', ['user' => $user]) }}" method="POST">
                    {{ method_field('DELETE') }}
                    {{ csrf_field() }}
                    <input type="submit" value="DELETE">
                </form>
        </tr>
    @endforeach
    </tbody>
</table>
@endsection


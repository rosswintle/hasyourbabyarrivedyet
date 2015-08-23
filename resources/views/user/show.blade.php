@if (isset($user))

    <h2>{{ $user->name }}</h2>
    <ul>
        <li>Email: {{ $user->email }}</li>
        <li><a href="{{ action('UserController@edit', ['id' => $user->id]) }}">Edit user</a></li>
    </ul>

    <a href="{{ action('UserController@index') }}">
        Back to list
    </a>
@endif
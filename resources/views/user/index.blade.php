<ul>

    @foreach ($users as $user)

        <li>
            <a href="{{ action('UserController@show', ['id' => $user->id]) }}">
                {{ $user->name }}
            </a>
        </li>


@endforeach
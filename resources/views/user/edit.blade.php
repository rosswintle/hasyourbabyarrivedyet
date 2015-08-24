<h2>Editing {{ $user->name }}</h2>
{!! Form::open(['method' => 'PUT', 'action' => ['UserController@update', $user->id]]) !!}
<p>
    {!! Form::label('name', "Name: ") !!}{!! Form::text('name', $user->name) !!}
</p>
<p>
    {!! Form::label('email', "Email: ") !!}{!! Form::email('email', $user->email) !!}
</p>
<p>
    {!! Form::label('display_name', "Display Name: ") !!}{!! Form::text('display_name', $user->display_name) !!}
</p>
<p>
    {!! Form::label('domain', "Domain: ") !!}{!! Form::text('domain', $user->domain) !!}
</p>
<p>
    {!! Form::label('status', "Status: ") !!}{!! Form::select('status', [0 => 'No', 1 => 'Yes'], $user->status) !!}
</p>
<p>
    {!! Form::submit('Done') !!}
</p>
{!! Form::close() !!}
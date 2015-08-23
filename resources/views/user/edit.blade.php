<h2>Editing {{ $user->name }}</h2>
{!! Form::open() !!}
{!! Form::label('name', "Name: ") !!}{!! Form::text('name', $user->name) !!}
{!! Form::label('email', "Email: ") !!}{!! Form::email('email', $user->email) !!}
{!! Form::label('display_name', "Display Name: ") !!}{!! Form::text('display_name', $user->display_name) !!}
{!! Form::label('domain', "Domain: ") !!}{!! Form::email('domain', $user->domain) !!}
{!! Form::close() !!}
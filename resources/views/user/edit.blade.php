@extends('layouts.master')

@section('content')

{!! Form::open(['method' => 'PUT', 'action' => ['UserController@update', $user->id]]) !!}

<table class="table table-bordered">
    <thead>
        <tr>
            <th colspan="2">
                <h2>Editing {{ $user->name }}</h2>
            </th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>{!! Form::label('name', "Name: ") !!}</td>
            <td>{!! Form::text('name', $user->name) !!}</td>
        </tr>
        <tr>
            <td>{!! Form::label('email', "Email: ") !!}</td>
            <td>{!! Form::email('email', $user->email) !!}</td>
        </tr>
        <tr>
            <td>{!! Form::label('display_name', "Display Name: ") !!}</td>
            <td>{!! Form::text('display_name', $user->display_name) !!}</td>
        </tr>
        <tr>
            <td>{!! Form::label('domain', "Domain: ") !!}</td>
            <td>{!! Form::text('domain', $user->domain) !!}</td>
        </tr>
        <tr>
            <td>{!! Form::label('status', "Status: ") !!}</td>
            <td>{!! Form::select('status', [0 => 'No', 1 => 'Yes'], $user->status) !!}</td>
        </tr>
        <tr>
            <td colspan="2">
                {!! Form::submit('Done') !!}
            </td>
        </tr>
    </tbody>
</table>

{!! Form::close() !!}

@endsection
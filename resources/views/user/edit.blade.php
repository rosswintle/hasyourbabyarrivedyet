@extends('layouts.master')

@section('content')

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form method="POST" action="{{ route('user.update', $user->id) }}">
    <input type="hidden" name="_method" value="PUT">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <!-- Add your form fields here -->

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
                <td><label for="name">Name: </label></td>
                <td><input type="text" name="name" id="name" value="{{ $user->name }}"></td>
            </tr>
            <tr>
                <td><label for="email">Email: </label></td>
                <td><input type="email" name="email" id="email" value="{{ $user->email }}"></td>            </tr>
            <tr>
                <td><label for="display_name">Display Name: </label></td>
                <td><input type="text" name="display_name" id="display_name" value="{{ $user->display_name }}"></td>            </tr>
            <tr>
                <td><label for="domain">Domain: </label></td>
                <td><input type="text" name="domain" id="domain" value="{{ $user->domain }}"></td>            </tr>
            <tr>
                <td><label for="status">Status: </label></td>
                <td>
                    <select name="status" id="status">
                        <option value="0" {{ $user->status == 0 ? 'selected' : '' }}>No</option>
                        <option value="1" {{ $user->status == 1 ? 'selected' : '' }}>Yes</option>
                    </select>
                </td>            </tr>
            <tr>
                <td><label for="note">Note: </label></td>
                <td><input type="text" name="note" id="note" value="{{ $user->note }}"></td>            </tr>
            <tr>
                <td><label for="color_scheme">Colour Scheme: </label></td>
                <td>
                    <select name="color_scheme" id="color_scheme">
                        <option value="pink" {{ $user->color_scheme == 'pink' ? 'selected' : '' }}>Pink</option>
                        <option value="blue" {{ $user->color_scheme == 'blue' ? 'selected' : '' }}>Blue</option>
                        <option value="purple" {{ $user->color_scheme == 'purple' ? 'selected' : '' }}>Purple</option>
                        <option value="violet" {{ $user->color_scheme == 'violet' ? 'selected' : '' }}>Violet</option>
                        <option value="red" {{ $user->color_scheme == 'red' ? 'selected' : '' }}>Red</option>
                        <option value="deep-orange" {{ $user->color_scheme == 'deep-orange' ? 'selected' : '' }}>Deep Orange</option>
                        <option value="dark-green" {{ $user->color_scheme == 'dark-green' ? 'selected' : '' }}>Dark Green</option>
                        <option value="mint-green" {{ $user->color_scheme == 'mint-green' ? 'selected' : '' }}>Mint Green</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <input type="submit" value="Done" />
                </td>
            </tr>
        </tbody>
    </table>
</form>

@endsection

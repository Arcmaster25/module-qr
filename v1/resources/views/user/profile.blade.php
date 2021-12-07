@extends('layout.index')

@section('title', 'Module Qr')

@section('user_id', '{{$user->id}}')

@section('main')
    <h3>Profile</h3>
    <form action="user/store" method="POST">
        @csrf
        <fieldset>
            <label for="name">User</label>
            <input type="text" name="name" id="name" value="{{$user->name}}" readonly>
        </fieldset>
        <fieldset>
            <label for="password">Password</label>
            <input type="password" name="password" id="password" value="{{$user->password}}" readonly>
        </fieldset>
        <button type="submit">update</button>
    </form>
@endsection
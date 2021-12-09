@extends('layout.index')

@section('title', 'Module Qr')

@section('main')
    <h1>Edit Client</h1>
    <form action="/client/update/{{$client->id}}" method="POST">
        @csrf
        @method('PUT')
        <fieldset>
            <label for="name">Name</label>
            <input type="text" name="name" required value="{{$client->name}}">
        </fieldset>
        <fieldset>
            <label for="last_name">Last Name</label>
            <input type="text" name="last_name" required value="{{$client->last_name}}">
        </fieldset>
        <fieldset>
            <label for="age">Age</label>
            <input type="number" name="age" min="18" max="100" required value="{{$client->age}}">
        </fieldset>
        <fieldset>
            <label for="email">Email</label>
            <input type="email" name="email" required value="{{$client->email}}">
        </fieldset>
        <fieldset>
            <label for="mobile">Mobile</label>
            <input type="tel" name="mobile" required value="{{$client->mobile}}">
        </fieldset>
        <button type="submit">Edit</button>
    </form>
@endsection
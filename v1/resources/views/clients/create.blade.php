@extends('layout.index')

@section('title', 'Module Qr')

@section('main')
    <h1>Register Client</h1>
    <form action="/client/store" method="POST">
        @csrf
        <fieldset>
            <label for="name">Name</label>
            <input type="text" name="name" required>
        </fieldset>
        <fieldset>
            <label for="last_name">Last Name</label>
            <input type="text" name="last_name" required>
        </fieldset>
        <fieldset>
            <label for="age">Age</label>
            <input type="number" name="age" min="18" max="100" required>
        </fieldset>
        <fieldset>
            <label for="email">Email</label>
            <input type="email" name="email" required>
        </fieldset>
        <fieldset>
            <label for="mobile">Mobile</label>
            <input type="tel" name="mobile" required>
        </fieldset>
        <button type="submit">Registry</button>
    </form>
@endsection
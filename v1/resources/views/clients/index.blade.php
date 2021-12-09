@extends('layout.index')

@section('title', 'Module Qr')

@section('main')
    <h1>Clients</h1>
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Last name</th>
                <th>Age</th>
                <th>Email</th>
                <th>Mobile</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @if(!empty($clients))
                @foreach($clients as $client)
                    <tr>
                        <td>{{$client->name}}</td>
                        <td>{{$client->last_name}}</td>
                        <td>{{$client->age}}</td>
                        <td>{{$client->email}}</td>
                        <td>{{$client->mobile}}</td>
                        <td>
                            <a href="/client/show/{{$client->id}}">Show</a>
                            <a href="/client/edit/{{$client->id}}">Edit</a>
                            <form action="/client/delete/{{$client->id}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <p>You don't register clients</p>
                </tr>
            @endif
        </tbody>
    </table>
    <a href="/client/create">Create</a>
@endsection
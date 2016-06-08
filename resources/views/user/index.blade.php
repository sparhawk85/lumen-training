@extends('layouts.master')

@section('title', 'Hello')

@section('sidebar')
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="#">
                    Studia
                </a>
            </div>
        </div>
    </nav>
@endsection

@section('content')
    <h3>Lista uzytkownikow</h3>
    <table class="table">
        <tr>
            <th>#</th>
            <th>Imie</th>
            <th>Nazwisko</th>
            <th>Email</th>
        </tr>
        @forelse ($users as $user)
            <tr>
                <td>{{$user->id}}</td>
                <td>{{$user->name}}</td>
                <td>{{$user->surname}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->api_token}}</td>
            </tr>
        @empty
            <tr>
                <td colspan="3">No users</td>
            </tr>
        @endforelse
    </table>
@endsection
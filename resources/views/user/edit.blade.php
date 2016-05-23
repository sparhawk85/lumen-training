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
    {!! $form->model($user, ['route' => ['user.update', $user->id]]) !!}
        {!! $form->label('email', 'E-mail') !!}
        {!! $form->text('email') !!}
        <br>
        {!! $form->label('name', 'Imię') !!}
        {!! $form->text('name') !!}
        <br>
        {!! $form->label('surname', 'Nazwisko') !!}
        {!! $form->text('surname') !!}
        <br>
        {!! $form->submit('Zapisz') !!}
    {!! $form->close() !!}
@endsection

@extends('layouts.master')

@section('title', 'Hello')

@section('sidebar')
    @parent

    <p>Menu.</p>
@endsection

@section('content')
    <p>{{$fullname}}</p>
@endsection
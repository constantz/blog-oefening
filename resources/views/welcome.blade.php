@extends('layout')

@section('title')


@section('content')

<h1>Welcome {{ $foo }}</h1>

<ul>
    @foreach ($tasks as $task)
        <li>{{ $task }}</li>    
    @endforeach
</ul>

@endsection

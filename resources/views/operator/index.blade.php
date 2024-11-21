@extends('layouts.app')

@section('content')
    <h1>Lista degli operatori:</h1>
    <ul>

        @foreach ($operators as $operator)
            <li>{{ $operator->name }}</li>
        @endforeach
    </ul>
@endsection

@extends('layouts.app')

@section('content')
    <h1>Lista dei ticket:</h1>
    <ul>

        @foreach ($tickets as $ticket)
            <li>{{ $ticket->name }}</li>
        @endforeach
    </ul>
@endsection

@extends('layouts.app')

@section('content')
    <h1>Lista dei ticket:</h1>
    <pre>
  

    </pre>

    @foreach ($tickets as $ticket)
    <pre>
        @php
            var_dump($ticket->category_id);
        @endphp
    </pre>
        <ul>
            <li>{{ $ticket->title }}</li>
            <li>{{ $ticket->description }}</li>
            <li>{{ $ticket->category_id }}</li>
        </ul>
    @endforeach
@endsection

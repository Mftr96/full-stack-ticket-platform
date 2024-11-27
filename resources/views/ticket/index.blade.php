@extends('layouts.app')

@section('content')
<div class="d-flex flex-column align-items-center center-text">
    <h1>Lista dei ticket</h1>
    <a class="btn btn-success w-25" href="{{ route('ticket.create') }}">Crea ticket</a>
</div>

{{-- INDEX TABLE --}}
    <table class="table  mx-auto">
        <thead>
            <tr>
                <th scope="col">numero ticket</th>
                <th scope="col">titolo ticket</th>
                <th scope="col">status ticket</th>
                <th scope="col">vai al ticket</th>
                <th scope="col">aggiorna ticket</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($tickets as $ticket)
                <tr>
                    <th scope="row">{{ $ticket->id }}</th>
                    <td>{{ $ticket->title }}</td>
                    <td>{{ $ticket->status }}</td>
                    <td>
                        <a href="{{ route('ticket.show', $ticket->id) }}">
                            <i class="fa-solid fa-ticket"></i>
                        </a>
                    </td>
                    <td>
                        <a href="{{ route('ticket.edit', $ticket->id) }}">
                            <i class="fa-solid fa-pen"></i>
                        </a>
                    </td>

                </tr>
            @endforeach
        </tbody>
    </table>
 
@endsection

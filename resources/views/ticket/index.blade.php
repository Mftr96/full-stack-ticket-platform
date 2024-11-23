@extends('layouts.app')

@section('content')
    <h1 class="text-center">Lista dei ticket:</h1>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">titolo ticket</th>
                <th scope="col">descrizione </th>
                <th scope="col">gestito da </th>
                <th scope="col">status ticket</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($tickets as $ticket)
                <tr>
                    <th scope="row">{{$ticket->id}}</th>
                    <td>{{ $ticket->title }}</td>
                    <td>{{ $ticket->description }}</td>
                    <td>{{ $ticket->category->name }}</td>
                    <td>{{$ticket->status}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection

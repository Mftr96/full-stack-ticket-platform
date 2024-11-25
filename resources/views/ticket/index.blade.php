@extends('layouts.app')

@section('content')
    <h1 class="text-center">Lista dei ticket:</h1>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">titolo ticket</th>
                <th scope="col">status ticket</th>
                <th scope="col">vai al ticket</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($tickets as $ticket)
                <tr>
                    <th scope="row">{{$ticket->id}}</th>
                    <td>{{ $ticket->title }}</td>
                    <td>{{$ticket->status}}</td>
                    <td>
                        {{-- vedere modo per usare fontawesome  --}}
                        <a href="{{route('ticket.show',$ticket->id)}}"> 
                            <i class="fa-solid fa-ticket"></i>
                        </a>
                    </td>
                    
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection

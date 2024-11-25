@extends('layouts.app')

@section('content')
    <div class="card " style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title">Ecco il dettaglio del ticket n.{{ $ticket->id }}</h5>
            <h6 class="card-subtitle mb-2 text-body-secondary">{{ $ticket->title }}</h6>
            <p class="card-text">{{ $ticket->description }}</p>
            <p class="card-text">gestito da {{ $ticket->operator->name }}</p>
            <a  class="dropdown-item " href="{{ url('ticket') }}">torna a {{ __('Ticket') }}</a>
        </div>
    </div>

    <style scoped>
   
    </style>
@endsection

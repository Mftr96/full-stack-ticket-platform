@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Modifica al Ticket n.{{$ticket->id}}</h1>
    
    <!-- Display validation errors -->
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <!-- Edit Ticket Form (only status can be updated)-->
    <form action="{{ route('ticket.update', $ticket->id) }}" method="POST">
        @csrf
        @method('PATCH')

        <!-- Title -->
        <div class="form-group">
            <label for="title">Title</label>
            <p>{{  $ticket->title }}</p>
        </div>

        <!-- Description -->
        <div class="form-group">
            <label for="description">Description</label>
            <p>{{ $ticket->description}}</p>
        </div>

        <!-- Status -->
        <div class="form-group mb-4">
            <label for="status">Status</label>
            <select name="status" id="status" class="form-control" required>
                <option value="ASSEGNATO" {{ old('status', $ticket->status) === 'ASSEGNATO' ? 'selected' : '' }}>ASSEGNATO</option>
                <option value="IN LAVORAZIONE" {{ old('status', $ticket->status) === 'IN LAVORAZIONE' ? 'selected' : '' }}>IN LAVORAZIONE</option>
                <option value="CHIUSO" {{ old('status', $ticket->status) === 'CHIUSO' ? 'selected' : '' }}>CHIUSO</option>
            </select>
        </div>

       

        <!-- Submit Button -->
        <button type="submit" class="btn btn-primary">Aggiorna Ticket</button>
        <a href="{{ route('ticket.index') }}" class="btn btn-secondary">torna ai tickets</a>
    </form>
</div>
@endsection
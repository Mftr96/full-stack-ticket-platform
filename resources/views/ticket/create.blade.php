@extends('layouts.app')

@section('content')
    <h1>creazione Ticket</h1>
    {{-- creare form che vada verso rotta store --}}
    <form id="ticketForm" method="POST" action="{{ route('ticket.store') }}">
        @csrf
        {{-- ticket title --}}
        <div class="mb-3">
            <label for="ticket" class="form-label">Titolo Ticket </label>
            <input type="text" class="form-control" name="title" id="title" aria-describedby="helpId" placeholder="" value="{{ old('title') }}" required autocomplete="off" />
            <small id="helpId" class="form-text text-muted">Help text</small>
            @error('title')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        {{-- ticket description --}}
        <div class="mb-3">
            <label for="description" class="form-label"></label>
            <textarea class="form-control" name="description" id="description" rows="2" required autocomplete="off">{{ old('description') }}</textarea>
            @error('description')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        {{-- category bind --}}
        <div class="mb-3">
            <label for="category_id" class="form-label">Categorie</label>
            <select class="form-select form-select-lg" name="category_id" id="category_id">
                <option value="" disabled selected>seleziona categoria</option>
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
            @error('category_id')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        {{-- operator bind --}}
        <div class="mb-3">
            <label for="operator_id" class="form-label">Assegna operatore </label>
            <select class="form-select form-select-lg" name="operator_id" id="operator_id">
                <option value="" disabled selected>assegna operatore</option>
                @foreach ($operators as $operator)
                    <option value="{{ $operator->id }}">{{ $operator->name }}</option>
                @endforeach
            </select>
            @error('operator_id')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        {{-- submit button --}}
        <button type="submit" class="btn btn-primary">
            crea ticket
        </button>

    </form>
@endsection
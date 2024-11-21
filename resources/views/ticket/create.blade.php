@extends('layouts.app')

@section('content')
    <h1>creazione Ticket</h1>
    {{-- creare form che vada verso rotta store --}}
    <form id="ticketForm" method="POST" action="{{route('ticket.store')}}">
        @csrf
        {{-- ticket title --}}
        <div class="mb-3">
            <label for="ticket" class="form-label">Titolo Ticket </label>
            <input type="text" class="form-control" name="title" id="title" aria-describedby="helpId" placeholder="" />
            <small id="helpId" class="form-text text-muted">Help text</small>
        </div>
        {{-- ticket description --}}
        <div class="mb-3">
            <label for="description" class="form-label"></label>
            <textarea class="form-control" name="description" id="description" rows="2"></textarea>
        </div>
        {{-- category bind --}}
        <div class="mb-3">
            <label for="" class="form-label">Categorie</label>
            <select class="form-select form-select-lg" name="categories" id="">
                <option selected>Select one</option>
                @foreach ($categories as $category)
                    <option value="">{{ $category->name }}</option>
                @endforeach
            </select>
        </div>
        {{-- operator bind --}}
        <div class="mb-3">
            <label for="" class="form-label">Assegna operatore </label>
            <select class="form-select form-select-lg" name="categories" id="">
                <option selected>Select one</option>
                @foreach ($operators as $operator)
                    <option value="">{{ $operator->name }}</option>
                @endforeach
            </select>
        </div>
        {{-- submit button --}}
        <button type="submit" class="btn btn-primary">
            crea ticket
        </button>

    </form>
@endsection

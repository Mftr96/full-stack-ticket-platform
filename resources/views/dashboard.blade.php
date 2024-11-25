@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="fs-4 text-secondary my-4">
        {{ __('Dashboard') }}
    </h2>
    <div class="row justify-content-center">
        <div class="col">
            <div class="card">
                <div class="card-header">{{ __('Dashboard utente') }}</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    {{ __('Autenticazione effettuata con successo!') }}
                    <a href="{{ route('ticket.index') }}">
                        <button type="button">vai a ticket</button>
                    </a>
                </div>
                {{-- creare link per index di operator, category e ticket --}}
            </div>
        </div>
    </div>
</div>
@endsection

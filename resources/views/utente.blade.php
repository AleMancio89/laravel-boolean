@extends('layouts.main')

@section('title', 'Utente')

@section('description')
<div class="users-container container">
    <div class="row users">
        <div class="user">
            <img src="{{ $utente->image }}" alt="User photo">
            <h3>{{ $utente->first_name . ' ' . $utente->last_name }}</h3>
            <span class="gender">{{ $utente->gender }}</span>
            <a href="/utenti">Indietro</a>
        </div>
    </div>
</div>     
@endsection
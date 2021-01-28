@extends('layouts.main')

@section('title', 'Utenti')

@section('description')
<div id="root" class="users-container container">
    <div class="row users">                
        @foreach ($data as $user)

        <div class="user">
           <img src="{{ $user->image }}" alt="User photo">
           <h3>{{ $user->first_name . ' ' . $user->last_name }}</h3>
           <span class="gender">{{ $user->gender }}</span>
           <a href="/utenti/{{ $user->id  }}">Dettagli</a>
        </div>     

        @endforeach
    </div>          
   
</div>
@endsection
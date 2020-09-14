@extends('layout')

@section('header')
Atualizar contato
@endsection

@section('content')
<form method="post">
    @csrf
    <div class="col col-8 mb-4 mt-5">
        
        <input type="text" class="form-control" name="name" id="name" value="{{ $contact->name }}"
            placeholder="Nome contato" 
            required="true"
        >
    </div>
    <div class="col col-3 mb-4">
        
        <input type="tel" class="form-control" name="phone" id="phone" value="{{ $contact->phone }}"
            placeholder="Telefone" 
            pattern="[0-9]{2} [0-9]{4}-[0-9]{4}" 
        >
        <small>Formato: 11 5236-1234</small>
    </div>
    <div class="col col-3 mb-4">
        
        <input type="text" class="form-control" name="mail" id="mail" value="{{ $contact->mail }}">
    </div>
    <div class="col col-3 mb-4">
        
        <input type="text" class="form-control" name="whats" id="whats"value="{{ $contact->whats }}"
            placeholder="Whatsapp"
            pattern="[0-9]{2} [0-9]{5}-[0-9]{4}" 
        >
        <small>Formato: 11 99999-1234</small>
    </div>
        <button class="btn btn-primary m-3">Atualizar</button>
</form>
@endsection    

@extends('layout')

@section('header')
Novo Contato
@endsection

@section('content')
<form method="post">
    @csrf
    <div class="col col-8 mb-4 mt-5">
        <input type="text" class="form-control" name="name" id="name" placeholder="Nome contato" required="true">
    </div>
    <div class="col col-3">
        <input type="tel" class="form-control" name="phone" id="phone" 
            placeholder="Telefone" 
            pattern="[0-9]{2} [0-9]{4}-[0-9]{4}" 
        >
        <small>Formato: 11 5236-1234</small><br><br>
    </div>
    <div class="col col-3 mb-4">
        <input type="email" class="form-control" name="mail" id="mail" placeholder="E-mail">
    </div>
    <div class="col col-3 mb-4">
        <input type="text" class="form-control" name="whats" id="whats" 
            placeholder="Whatsapp"
            pattern="[0-9]{2} [0-9]{5}-[0-9]{4}" 
        >
        <small>Formato: 11 99999-1234</small><br><br>
    </div>
    <button class="btn btn-primary m-3">Adicionar</button>
</form>
@endsection    

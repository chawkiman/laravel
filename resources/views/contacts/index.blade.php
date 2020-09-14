@extends('layout')

@section('header')
Contatos
@endsection

@section('content')

@include('notification', ['message' => $message])

<form method="post">   
 @csrf              
 <div class="row mt-5">  
     <div class="col col-18">         
         <input type="text" placeholder="Pesquisar" class="form-control" 
            name="search" 
            id="search"
         >
     </div>      
</div>
</form>

<ul class="list-group mt-5" >

@foreach($contacts as $contact)



        <div class="row">
            <div class="col-sm-11"  style="background-color:#eeeeec;">{{ $contact->name }}</div>
            <div class="col-sm-1 d-flex text-right"  style="background-color:#eeeeec;">

                <a class="btn btn-outline-dark btn-sm mr-1" href="{{ url('list/edit/') }}/{{ $contact->id }}" role="button">
                    <i class="fas fa-edit"></i>
                </a>
                <form method="post" action="/list/{{ $contact->id }}"
                      onsubmit="return confirm('Tem certeza que deseja remover {{ addslashes($contact->name) }}?')">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-outline-dark btn-sm">
                        <i class="far fa-trash-alt"></i>
                    </button>
                </form>
            </div>
        </div>

    <li class="list-group-item mb-5">

        <div class="row">
            <div class="col-sm-4 d-flex text-right" >
                <i class="fa fa-envelope fa-2x mr-1"></i>
                {{ $contact->mail  }}   
            
            </div>
            <div class="col-sm-4 d-flex">
                <i class="fas fa-phone fa-2x mr-1"></i>
                {{ $contact->phone }}
            </div>
            <div class="col-sm-4 d-flex">
                <i class="fab fa-whatsapp fa-2x mr-1"></i>
                {{ $contact->whats  }}   
            </div>
        </div>
    </li>
@endforeach</ul>
@endsection

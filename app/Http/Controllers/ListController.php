<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\ApiConsumer;
use App\Models\Contact;

class ListController extends Controller
{
    public function index(Request $request, apiConsumer $apiConsumer)
    {
        $apiConsumer->config('contacts');
        $contacts = $apiConsumer->get();

        $message = $request->session()->get('message');
        $request->session()->remove('message');

        return view('contacts.index', compact('contacts', 'message')); 
    }

    
    public function filter(Request $request, ApiConsumer $apiConsumer)
    {
        $apiConsumer->config('contacts');
        $contacts = $apiConsumer->get($request->get('search'));
        $countRows = count($contacts);


        $message =  "{$countRows} encontrado(s).";
        return view('contacts.index', compact('contacts', 'message')); 
    }


    public function store(Request $request, apiConsumer $apiConsumer)
    {
        $apiConsumer->config('contacts');
        $contacts = $apiConsumer->post($request->all());

        $request->session()
        ->flash(
           'message',
           "Contato incluido"
        );


        return redirect()->route('list');
    }


    public function create()
    {
        return view('contacts.create'); 
    }


    public function destroy(Request $request, ApiConsumer $apiConsumer)
    {
        $id = $request->id;
        $apiConsumer->config("contacts/$id");
        $apiConsumer->delete();

         $request->session()
         ->flash(
            'message',
            "Contato removido"
         );

        return redirect()->route('list');
        
    }
    
    public function edit(int $id)
    {
        $contact = Contact::find($id);
        return view('contacts.edit', compact('contact')); 
    }

    public function saveEdit(Request $request, apiConsumer $apiConsumer)
    {
        $apiConsumer->config("contacts/$request->id");
        $contacts = $apiConsumer->put($request->all());

         $request->session()
         ->flash(
            'message',
            "Contato atualizado"
         );

        return redirect()->route('list');
    }
    
}

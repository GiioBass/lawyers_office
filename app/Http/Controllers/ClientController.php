<?php

namespace App\Http\Controllers;

use App\Client;
use App\Document_type;
use App\Http\Requests\ClientValidation;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $clients = Client::all();
        return view('Clients/index', compact('clients'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $docTypes = Document_type::all();
        return view('Clients/create', compact('docTypes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ClientValidation $request)
    {
        $client = new Client();
        $client->id = $request['id'];
        $client->names = $request['names'];
        $client->last_name = $request['last_name'];
        $client->document_type_id = $request['document_type_id'];
        $client->save();

        return redirect()->route('client.create')->with( 'El cliente fue creado');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function show(Client $client)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $docTypes = Document_type::all();
        $client = Client::findOrFail($id);
        return view('Clients/edit', compact('client', 'docTypes'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $client = Client::findOrFail($id);
        $client->names = $request['names'];
        $client->last_name = $request['last_name'];
        $client->document_type_id = $request['document_type_id'];
        $client->save();
        return redirect()->route('client.index')->with('Cliente Actualizado');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $client = Client::findOrFail($id);
        $client->delete();
        return redirect()->route('client.index')->with('Cliente Eliminado');

    }
}

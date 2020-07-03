<?php

namespace App\Http\Controllers;

use App\Affair;
use App\Document_type;
use App\Lawyer;
use App\Client;
use App\Status;
use Illuminate\Http\Request;
use function GuzzleHttp\Promise\all;

class AffairController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $affairs = Affair::all();
        return view('Affairs/index', compact('affairs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $client = Client::all();
        $status = Status::all();
        $affair = Affair::all();
        return view('Affairs.create', compact('affair', 'client','status'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $affair = new Affair();
        $affair->id = $request['id'];
        $affair->name = $request['name'];
        $affair->cost = $request['cost'];
        $affair->start = $request['start'];
        $affair->finish = $request['finish'];
        $affair->client_id = $request['client_id'];
        $affair->status_id = $request['status_id'];
        $affair->save();
        return redirect()->route('affair.index')->with('Caso creado con éxito');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $affair = Affair::findOrFail($id);
        $affair->delete();
        return redirect()->route('affair.index')->with('El caso ha sido archivado');
    }
}

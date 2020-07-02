<?php

namespace App\Http\Controllers;

use App\Document_type;
use App\Http\Requests\LawyerValidation;
use App\Lawyer;
use Illuminate\Http\Request;

class LawyerController extends Controller
{
    public function index()
    {

        $lawyers = lawyer::all();
        return view('Lawyers/index', compact('lawyers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $docTypes = Document_type::all();
        return view('Lawyers/create', compact('docTypes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(LawyerValidation $request)
    {
        $lawyer = new lawyer();
        $lawyer->id = $request['id'];
        $lawyer->names = $request['names'];
        $lawyer->last_name = $request['last_name'];
        $lawyer->document_type_id = $request['document_type_id'];
        $lawyer->save();

        return redirect()->route('lawyer.create')->with( 'El lawyere fue creado');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\lawyer  $lawyer
     * @return \Illuminate\Http\Response
     */
    public function show(lawyer $lawyer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\lawyer  $lawyer
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $docTypes = Document_type::all();
        $lawyer = lawyer::findOrFail($id);
        return view('Lawyers/edit', compact('lawyer', 'docTypes'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\lawyer  $lawyer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $lawyer = lawyer::findOrFail($id);
        $lawyer->names = $request['names'];
        $lawyer->last_name = $request['last_name'];
        $lawyer->document_type_id = $request['document_type_id'];
        $lawyer->save();
        return redirect()->route('lawyer.index')->with('lawyere Actualizado');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\lawyer  $lawyer
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $lawyer = lawyer::findOrFail($id);
        $lawyer->delete();
        return redirect()->route('lawyer.index')->with('lawyere Eliminado');

    }
}

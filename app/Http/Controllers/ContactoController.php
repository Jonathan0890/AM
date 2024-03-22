<?php

namespace App\Http\Controllers;

use App\Models\Contacto;
use App\Http\Requests\StoreContactoRequest;
use App\Http\Requests\UpdateContactoRequest;

class ContactoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $contactos = Contacto::paginate(10);
        return view('contactos',compact('contactos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreContactoRequest $request)
    {
        $request->validate([
        ]);
        
        Contacto::create($request->all());
        return redirect()->route('contacto.index')->with('success', 'Gracias por contactarnos');
    }

    /**
     * Display the specified resource.
     */
    public function show(Contacto $contacto)
    {
        return view('show-contac');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Contacto $contacto)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateContactoRequest $request, Contacto $contacto)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Contacto $contacto)
    {
        //
    }
}

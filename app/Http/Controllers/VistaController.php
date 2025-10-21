<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VistaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        return view('vista');
    }

    public function recibirParametros($id)
    {
        return "El id es: " . $id;
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return "estas en la funcion crear";
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return "estas en la funcion almacenar";
    }

    /**
     * Display the specified resource.
     */
    public function show()
    { 
        return "estas en la funcion show";   
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit()
    {
        return "estas en la funcion editar";
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy()
    {
        return "registro eliminado";
    }
}

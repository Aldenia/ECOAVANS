<?php

namespace App\Http\Controllers;

use App\Voluntary;
use Illuminate\Http\Request;
use App\Http\Requests\VoluntaryRequest;

class VoluntaryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Voluntary = Voluntary::orderBy('id', 'DESC')->paginate();
        return view('Voluntary.index', compact('Voluntary'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Voluntary.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(VoluntaryRequest $request)
    {
        $VoluntaryN= new Voluntary;
        $VoluntaryN->id= $request->id;
        $VoluntaryN->nombre= $request->nombre;
        $VoluntaryN->apellido1= $request->apellido1;
        $VoluntaryN->apellido2= $request->apellido2;
        $VoluntaryN->telefono= $request->id;
        $VoluntaryN->direccion= $request->direccion;
        $VoluntaryN->email= $request->email;
        $VoluntaryN->descripcion= $request->descripcion;

        $VoluntaryN->save;
        return redirect()->route('Voluntary.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Voluntary  $voluntary
     * @return \Illuminate\Http\Response
     */
    public function show(Voluntary $id)
    {
        $VoluntaryB = Voluntary::find($id); 
        return view('Voluntary.show',compact('VoluntaryB'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Voluntary  $voluntary
     * @return \Illuminate\Http\Response
     */
    public function edit(Voluntary $id)
    {

    $VoluntaryE = Voluntary::find($id);
    return view('Voluntary.edit', compact('VoluntaryE'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Voluntary  $voluntary
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Voluntary $id)
    {
        $VoluntaryU = Voluntary::find($id);
        $VoluntaryU->id = $request->id;
        $VoluntaryU->nombre = $request->nombre;
        $VoluntaryU->apellido = $request->apellido1;
        $VoluntaryU->apellido = $request->apellido2;
        $VoluntaryU->apellido = $request->telefono;
        $VoluntaryU->apellido = $request->direccion;
        $VoluntaryU->apellido = $request->email;
        $VoluntaryU->apellido = $request->descripcion;
        $VoluntaryU->save();
        return redirect()->route('Voluntary.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Voluntary  $voluntary
     * @return \Illuminate\Http\Response
     */
    public function destroy(Voluntary $id)
    {
        $VoluntaryE = Voluntary::find($id); $VoluntaryE->delete();
    }
}

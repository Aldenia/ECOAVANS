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
        //if(Auth::user()-> id == $id){
          //  return redirect()->route('/');
        //}
        $voluntaryC = Voluntary::all();
        //dd($voluntaryC);
        return view('voluntary')->with('voluntaryN', $voluntaryC);
        
        //$data['voluntary'] = Voluntary::orderBy('id','desc')->paginate(8);
   
        //return view('voluntary', $data)->with('voluntaryN', $voluntary);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Volun.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(VoluntaryRequest $request)
    {
        $VoluntaryN= new voluntary;
        //$VoluntaryN->Id= $request->id;
        $VoluntaryN->Nombre= $request->Nombre;
        $VoluntaryN->Apellido_1= $request->Apellido_1;
        $VoluntaryN->Apellido_2= $request->Apellido_2;
        $VoluntaryN->Edad= $request->Edad;
        $VoluntaryN->Telefono= $request->Telefono;
        $VoluntaryN->Direccion= $request->Direccion;
        $VoluntaryN->Email= $request->Email;
        $VoluntaryN->Cantidad= $request->Cantidad ?$request->Cantidad :null;
        $VoluntaryN->Descripcion= $request->Descripcion;

        $VoluntaryN->save();
        return redirect()->route('amigoReq')
                        ->with('success', 'Se ha registrado un nuevo usuario');
    }


    public function show(Voluntary $id)
    {
        $voluntaryB = Voluntary::find($id); 
        return view('volun.show',compact('voluntaryB'));
    }


    public function edit($id)
    {

    $voluntary = Voluntary::find($id);

    if(is_null($voluntary)){
        return redirect()->route('voluntary.index');
    }
    return view('Volun.create')-> with('volun', $voluntary);

    }


    public function update(Request $request, Voluntary $id)
    {
        $VoluntaryU = Voluntary::find($id);
        $VoluntaryU->id = $request->id;
        $VoluntaryU->nombre = $request->nombre;
        $VoluntaryU->apellido1 = $request->apellido1;
        $VoluntaryU->apellido2 = $request->apellido2;
        $VoluntaryU->telefono = $request->telefono;
        $VoluntaryU->direccion = $request->direccion;
        $VoluntaryU->email = $request->email;
        $VoluntaryU->descriocion = $request->descripcion;
        
        $VoluntaryU->save();
        return redirect()->route('voluntary.index');
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
        return Response::json($VoluntaryE);
    }

}

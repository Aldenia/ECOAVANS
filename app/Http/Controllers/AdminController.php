<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\Usuario;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use App\User;
use App\Actividad;
use App\TipoUsuario;
use App;
//use App\tbldonacionmaterial;



class AdminController extends Controller
{
    //

    public function layout()
    {
        return view('Admin.layout');
    }

    public function usuario()
    { 
        $data['user']=User::paginate(10);
        return view('Admin.usuario', $data);
        // $TipoUser = User::all();
        //return view("Admin.usuarios", compact('TipoUser'));
        // return view("Admin.usuarios")->with('TipoUser',$TipoUser);

        // $tipo = DB::table('tbl_tipo_usuarios')
        //      ->join('users', 'users.IdTipoUsurio ', '=', 'tbl_tipo_usuarios.IdTipoUsuario ')
        //      ->paginate(5);


    }
  
    public function Actividades()
    {
        $activities = App\Actividad::all();
        return view('Admin.actividad', compact('activities'));
    }
//metodo para jalar lo datos de la tabla evento en la vista evento de ususario
    public function actividad()
    {
        $actividad = App\Actividad::all();
        return view('actividad', compact('actividad'));
    }

    public function crear()
    {
        $activities = App\Actividad::all();
        return view('Admin.crearActividad', compact('activities'));
    }

    public function crearActividades(Request $request){
        // return $request->all(); sirve para comprobar si los datos se estan agregando
 
     $request->validate([
         'CodActividad' => 'required',
         'NombreActividad' => 'required',
         'HoraInicioActividad' => 'required',
         'HoraFinalActividad' => 'required',
         'FechaActividad' => 'required',
         'DescripcionActividad' => 'required'    
     ]);
 
        $eventNueva = new App\Actividad;
        $eventNueva->CodActividad = $request->CodActividad;
        $eventNueva->NombreActividad = $request->NombreActividad;
        $eventNueva->HoraInicioActividad = $request->HoraInicioActividad;
        $eventNueva->HoraFinalActividad = $request->HoraFinalActividad;
        $eventNueva->FechaActividad = $request->FechaActividad;
        $eventNueva->DescripcionActividad = $request->DescripcionActividad;

        $eventNueva->save();
 
        return back()->with('mensaje', 'La actividad se ha guardado correctamente!'); 
     }  


     public function editarActividad($CodEvento){
        $event = App\Actividad::findOrFail($CodEvento);
        return view('Admin.editarActividad', compact('activity'));
    }
     
    public function actualizarActividad(Request $request, $CodActividad)
    {
        $request->validate([
            'CodActividad' => 'required',
            'NombreActividad' => 'required',
            'HoraInicioActividad' => 'required',
            'HoraFinalActividad' => 'required',
            'FechaActividad' => 'required',
            'DescripcionActividad' => 'required'
        ]);


        $eventActualizar = App\Actividad::findorFail($CodActividad);
        $eventActualizar->CodActividad = $request->CodActividad;
        $eventActualizar->NombreActividad = $request->NombreActividad;
        $eventActualizar->HoraInicioActividad = $request->HoraInicioActividad;
        $eventActualizar->HoraFinalActividad = $request->HoraFinalActividad;
        $eventActualizar->FechaActividad = $request->FechaActividad;
        $eventActualizar->DescripcionActividad = $request->DescripcionActividad;
        
        $eventActualizar->save();

        return back()->with('mensaje', 'Evento actualizado');
    }

    public function eliminarActividad($CodActividad)
    {
        $eventEliminar = App\Actividad::findorFail($CodActividad);
        $eventEliminar->delete();

        return back()->with('mensaje', 'Evento eliminado');
    }

    public function inventario()
    {
        return view('Admin.inventario');
    }

    public function inicio()
    {
        return view('Admin.inicio');
    }

    public function editarUsuario($data)
    {   
        $user= User::findOrFail($data);
        return view('Admin.editarUsuario', compact('user'));
    }

    public function actualizarUsuario(Request $request, $data)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required'
        ]);


        $userUpdate = User::findorFail($data);
        $userUpdate->name = $request->name;
        $userUpdate->email = $request->email;
        $userUpdate->password = $request->password;
        
        $userUpdate->save();

        return back()->with('mensaje', 'Nota actualizada');
    }
    
/*    public function donacionMaterial()
    { 
        $data['donaciones']=tbldonacionmaterial::paginate(10);
        return view('Admin.donacionesMat', $data);
        
    }
    public function eliminarDonacionMaterial($CodDonacionMaterial)
    {
        $donacEliminar = tbldonacionmaterial::findorFail($CodDonacionMaterial);
        $donacEliminar->delete();

        return back()->with('mensaje', 'Evento eliminado');
    }
    public function editarDonacionMaterial($CodDonacionMaterial)
    {   
        $donaciones= tbldonacionmaterial::findOrFail($CodDonacionMaterial);
        return view('Admin.editarDonacionesM', compact('donaciones'));
    }

    public function actualizarDonacionMaterial(Request $request, $CodDonacionMaterial)
    {
        $request->validate([
            'CodDonacionMaterial' => 'required',
            'NombreMaterial' => 'required',
            'DescripcionMaterial'=>'required',
            'RecibeMaterial'=>'required',
            'CodEvento'=>'required',
            'IdTipoDonacion'=>'required',
           
        ]);


        $tbldonacionmaterialUpdate = tbldonacionmaterial::findorFail($CodDonacionMaterial);
        $tbldonacionmaterialUpdate->CodDonacionMaterial = $request->CodDonacionMaterial;
        $tbldonacionmaterialUpdate->NombreMaterial = $request->NombreMaterial;
        $tbldonacionmaterialUpdate->DescripcionMaterial = $request->DescripcionMaterial;
        $tbldonacionmaterialUpdate->RecibeMaterial = $request->RecibeMaterial;
        $tbldonacionmaterialUpdate->CodEvento = $request->CodEvento;
        $tbldonacionmaterialUpdate->IdTipoDonacion = $request->IdTipoDonacion;
        
        
        $tbldonacionmaterialUpdate->save();

        return back()->with('mensaje', 'Donacion actualizada');
       
    }
    */


    
}

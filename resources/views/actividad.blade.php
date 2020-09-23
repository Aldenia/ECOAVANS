@extends('layouts.app')
@section('content')

<?php $page = 'actividad'; ?>
 
<br><br><br><br><br> 

<div class="row">    
    <div class=" text-center border-light card text-white bg-dark mx-auto " style="width:54rem;" >      
        <div class="card-header">  
              <h2>Actividades</h2>          
              <hr style="width:300px; height:2px;border-width:0;color:gray;background-color:gray">
        </div>   
    </div>
</div>   
 <br>    
<div class="row"> 
       <div class=" text-center border-light card text-black bg-light mx-auto " style="width:70rem;" >     
       <div class="card-header card text-black"> 

       <h2>Actividades activas</h2>    
        </div>  
     <div class="container">              
                      <table class="table">                    
                        <thead>                      
                          <tr>                                              
                              <th scope="col">Nombre</th>      
                              <th scope="col">Inicio</th>  
                              <th scope="col">Fin</th>      
                              <th scope="col">Fecha</th>               
                              <th scope="col">Descripcion</th>                  
                          @foreach($evento as $item)                         
                          <tr>                                                                        
                                <th scope="row">{{$item->NombreActividad}}</th>                                    
                                <th scope="row">{{$item->HoraInicioActividad}}</th>                                  
                                <th scope="row">{{$item->HoraFinalActividad}}</th>                                   
                                <th scope="row">{{$item->FechaActividad}}</th>                                    
                                <th scope="row">{{$item->DescripcionActividad}}</th>                                                                    
                                
                                {{-- <div class="btn-group"> --}}     
                                                                                                                                                                         
                                    <td> <a href="{{route ('Usuario.crearAsistencia',$item )}}" class="btn btn-primary" >Asistir</a></td>
                                
                                    <td><a href="{{route ('registrardonacionMaterial' )}}" class="btn btn-success ">Donar</a></td>          
                                {{-- </div> --}}                                                                       
                </tr>                          
                
                                                                                                                      
                @endforeach()                                
            </tr>                               
         </thead>                            
    </table>                            
</div>            




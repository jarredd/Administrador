@extends('layouts.app')

@section('content')
 <div class="panel">
   <div class="panel-heading">
     <div class="panel-body">
        <div class="pane-content">
            <button class="btn btn-primary" data-toggle="modal" id="agregar">Agregar</button>
            @include('Pueblos.modals.create')
           <table class="table table-striped table-responsive">
               <thead>
                   <tr>
                       <th>ID</th>
                       <th>Nombre</th>
                       <th>Descripción</th>
                       <th>Editar</th>
                       <th>Eliminar</th>
                   </tr>
               </thead>
               @foreach ($pueblos as $pueblo )
                   <tbody>
                       <tr>
                        <td>{{$pueblo->id}}</td>
                        <td>{{$pueblo->nombre}}</td>
                        <td>{{$pueblo->descripcion}}</td>
                        <td><button class="btn btn-warning" data-target="#editar" data-toggle="modal"  data-id="{{$pueblo->id}}" data-nombre="{{$pueblo->nombre}}" data-descripcion="{{$pueblo->descripcion}}"><span class="glyphicon glyphicon-pencil"></span></button>
                         @include('Pueblos.modals.edit')
                        </td>
                        <td>
                        <button class="btn btn-danger" data-target="#eliminar" data-toggle="modal" data-id="{{$pueblo->id}}"><span class="glyphicon glyphicon-trash"></span></button>
                        @include('Pueblos.modals.delete')   
                    </td>
                       </tr>
                   </tbody>
                  
                   @endforeach
             </table>

            <div class="panel">
                <div class="panel-heading">
                    <div class="panel-body">
                                            </div>
                </div>
            </div>
             
        </div>
     </div>
   </div>
 </div>




@endsection()
@extends('layouts.app')

@section('content')
   <div class="panel">
     <div class="panel-heading">
       <div class="pane-body">
           <button class="btn btn-primary" data-toggle="modal" id="btnModal">Agregar</button>
           @include('Platillos.modals.create')
           <table class="table table-striped">
               <thead>
                   <tr>
                       <th>ID</th>
                       <th>Nombre</th>
                       <th>Categorías</th>
                       <th>Descripción</th>
                       <th>Editar</th>
                       <th>Eliminar</th>
                   </tr>
                </thead>
                @foreach ($platillos as $platillo )
                <tbody>
                    <tr>
                        <td>{{$platillo->id}}</td>
                        <td>{{$platillo->nombre}}</td>
                        <td>{{$platillo->categoria}}</td>
                        <td>{{$platillo->descripcion}}</td>
                        <td>
                            <button class="btn btn-warning" data-target="#editar" data-toggle="modal"  data-id="{{$platillo->id}}" data-nombre="{{$platillo->nombre}}" data-categoria="{{$platillo->categoria}}"  data-descripcion="{{$platillo->descripcion}}"><span class="glyphicon glyphicon-pencil"></span></button>
                            @include('Platillos.modals.edit')
                        </td>
                        <td>
                            <button class="btn btn-danger" data-target="#eliminar" data-toggle="modal" data-id="{{$platillo->id}}"><span class="glyphicon glyphicon-trash"></span></button>
                           @include('Platillos.modals.delete')
                        </td>
                    </tr>
                </tbody>    
                @endforeach
                
           </table>
       </div>
     </div>
   </div>
@endsection()
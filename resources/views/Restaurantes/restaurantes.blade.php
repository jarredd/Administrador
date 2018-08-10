@extends('layouts.app')

@section('content')
  <div class="panel col-md-4">
    <div class="panel-heading">
       <div class="panel-body">
        <form class="form-group" method="POST" action="{{route('restaurantes.store')}}" enctype="multipart/form-data">
                 {{csrf_field()}}
                 <div class="form-group">
                     <label for="">Pueblo</label>
                     <select name="pueblo_id" id="pueblo_id" class="form-control" required>
                         <option value="">Seleccione una opción</option>
                     </select>
                 </div>
                 <div class="form-group">
                     <label for="">Restaurante</label>
                     <input type="text" id="nombre" name="nombre" class="form-control" required>
                 </div>
                 <div class="form-group">
                     <label for="">Descripción</label>
                     <textarea name="descripcion" id="descripcion" cols="10" required rows="5" class="form-control"></textarea>
                 </div>
                 <div class="form-group">
                     <label for="">Imagen del restaurante</label>
                     <input type="file" name="imgRes" id="imgRes" required>
                 </div>
                 <div class="form-group">
                     <label for="">Latitud</label>
                     <input type="text" id="latitud" name="latitud" class="form-control" required>
                 </div>
                 <div class="form-group">
                     <label for="">Longitud</label>
                     <input type="text" name="longitud" id="long" class="form-control" required>
                 </div>

                 <div class="modal-footer">
                     <button type="submit" class="btn btn-primary">Guardar</button>
                 </div>
             </form>

      </div>
    </div>
  </div>


  
<center class="col-md-8">
    <div class="panel">
        <div class="panel-heading">
            <div class="panel-body">
                <div class="panel-content">
               <div id="googleMap" style="width:100%;height:400px;"></div>

                    <script>
                       function myMap() {
        var map = new google.maps.Map(document.getElementById('googleMap'), {
          center: {lat: -34.397, lng: 150.644},
          zoom: 7
        });
        var infoWindow = new google.maps.InfoWindow({map: map});

        // Try HTML5 geolocation.
        if (navigator.geolocation) {
          navigator.geolocation.getCurrentPosition(function(position) {
            var pos = {
              lat: position.coords.latitude,
              lng: position.coords.longitude 
          };
			  
            infoWindow.setPosition(pos);
            infoWindow.setContent('Location found.');
            document.getElementById("latitud").value = pos['lat'];
            document.getElementById("lon").value = pos['lng'];
            map.setCenter(pos);
          }, function() {
            handleLocationError(true, infoWindow, map.getCenter());
          });
        } else {
          // Browser doesn't support Geolocation
          handleLocationError(false, infoWindow, map.getCenter());
        }
      }
                    </script>


                </div>
            </div>
        </div>
    </div>
</center>

<center class="col-md-8">
  <div class="panel ">
  <div class="panel-heading">
    <div class="panel-body">
        <table class="table table-primary">
           <thead>
             <tr>
               <th>ID</th>
               <th>Pueblo</th>
               <th>Restaurante</th>
               <th>Descripción</th>
               <th>Editar</th>
               <th>Eliminar</th>
             </tr>
             </thead>
             @foreach ($restaurantes as $restaurante )
                 <tbody>
                   <tr>
                     <td>{{$restaurante->id}}</td>
                     <td>{{$restaurante->pueblo_id}}</td>
                     <td>{{$restaurante->nombre}}</td>
                     <td>{{$restaurante->descripcion}}</td>
                     <td>
                       <button class="btn btn-warning" data-target="#editar" data-toggle="modal" data-id="{{$restaurante->id}}" data-nombre="{{$restaurante->nombre}}" data-descripcion="{{$restaurante->descripcion}}" ><span class="glyphicon glyphicon-pencil"></span></button>
                        @include('Restaurantes.modals.edit')
                      </td>
                     <td>
                       <button class="btn btn-danger" data-target="#eliminar" data-toggle="modal" data-id="{{$restaurante->id}}"><span class="glyphicon glyphicon-trash"></span></button>
                       @include('Restaurantes.modals.delete')
                      </td>
                   </tr>
                 </tbody>
             @endforeach
        </table>
    </div>
  </div>
</div></center>

@endsection()


<div class="modal fade" id="agregarPlatillo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form class="form-group" method="POST" action="{{route('platillos.store')}}" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <div class="form-group">
                    <label for="">Restaurantes</label>
                    <select name="restaurante_id" id="rest_id" class="form-control" required>
                        <option value="">Selecciona una opcion</option>
                    </select>
            </div>
                    <div class="form-group">
                        <label for="">Platillo</label>
                        <input class="form-control" name="nombre" id="nombre" type="text" required>
                    </div>

                   <div class="form-group">
                       <label for="">Categorías</label>
                       <select name="categoria" id="cotegoria" class="form-control" required>
                             <option value="">Seleciona una opción</option>
                           <option value="desayuno">Desayuno</option>
                           <option value="comida">Comida</option>
                           <option value="cena">Cena</option>
                         
                       </select>
                   </div>

                    <div class="form-group">
                        <label for="">Descripción</label>
                        <textarea name="descripcion" id="descripcion" class="form-control" cols="30" rows="5" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="">Imagen del platillo</label>
                        <input type="file" name="img" id="img" required>
                    </div>
                    <div class="form-group">
                        <label for="">Video del platillo</label>
                        <input type="file" name="video" id="video" required>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                        <button type="submit" class="btn btn-primary">Guardar</button>
                    </div>
                </form>


            </div>

        </div>
    </div>
</div>


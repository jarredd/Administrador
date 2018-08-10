<div class="modal fade" id="editar" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h3>Cabecera</h3>
            </div>
            <div class="modal-body">
                <form action="{{route('platillos.update','test')}}" class="form-group" method="POST" >
                    {{method_field('patch')}}
                    {{csrf_field()}}
                    <div class="form-group">
                        <input type="hidden" name="id" id="id">

                    </div>
                    <div class="form-group">
                        <label for="">Platillo</label>
                        <input class="form-control" name="nombre" id="nombre" type="text">
                    </div>

                    <div class="form-group">
                       <label for="">Categorías</label>
                       <select name="categoria" id="cotegoria" class="form-control">
                             <option value="">Seleciona una opción</option>
                           <option value="desayuno">Desayuno</option>
                           <option value="comida">Comida</option>
                           <option value="cena">Cena</option>
                         
                       </select>
                   </div>
                    <div class="form-group">
                        <label for="">Descripción</label>
                        <textarea name="descripcion" id="descripcion" class="form-control" cols="30" rows="5"></textarea>
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
<div class="modal fade" id="eliminar" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h3>Cabecera</h3>
            </div>
            <div class="modal-body">

                <h4>Uno o mas elementos dependen de esté registro,</h4><br>
                <h5><strong>¿Está seguro que desea eliminarlo?</strong></h5>
                <form action="{{route('pueblos.destroy','test')}}" method="post"  class="form-group">
                    {{method_field('delete')}}
                    {{csrf_field()}}
                    <div class="form-group">
                        <input type="hidden" name="id" id="idP">

                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                        <button type="submit" class="btn btn-primary">Eliminar</button>
                    </div>
                </form>

            </div>

        </div>
    </div>
</div>
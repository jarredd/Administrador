<div class="modal fade" id="create">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">
                    <span>×</span>
                </button>
                <h4>Registro de Pueblos</h4>
            </div>
            <div class="modal-body">
                <form action="{{route('pueblos.store')}}" accept-charset="utf-8" method="POST" class="form-group" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <div class="form-group">
                        <label for="">Nombre</label>
                        <input type="text" name="nombre" id="nombre"  class="form-control" placeholder="nombre" required>
                    </div>
                    <div class="form-group">
                       <label for="">Descripción</label>
                       <textarea name="descripcion" id="descripcion" cols="10" rows="10" class="form-control col-md-1 " required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="">Imagen</label>
                        <input type="file" name="imagen" id="imagen" required>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Guardar</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
$(function(){
    $('#btnModal').click(function(){
       $('#agregarPlatillo').modal('show');
    });

    restaurantes();
});



function restaurantes() {
    $.ajax({
        url: '/platillos/res',
        dataType: 'JSON'
    }).done(function (data) {
        $.each(data, function (index, value) {
            $("#rest_id").append("<option value='" + value['id'] + "'>" + value['nombre'] + "</option>");
        })
    })
}


$(function () {
    $('#editar').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget);
        // Button that triggered the modal
        var id = button.data('id');
        var nombre = button.data('nombre');
        var categoria = button.data('categoria');
        var des = button.data('descripcion'); // Extract info from data-* attributes
        // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
        // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
        var modal = $(this);
        modal.find('.modal-body #id').val(id);
        modal.find('.modal-body #nombre').val(nombre);
        modal.find('.modal-body #cotegoria').val(categoria);
        modal.find('.modal-body #descripcion').val(des);
    });
});


$(function () {
    $('#eliminar').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget);
        var id = button.data('id');

        var modal = $(this);
        modal.find('.modal-body #idP').val(id);
        //modal.find('.modal-body #nombre').val(nombre);
        //modal.find('.modal-body #descripcion').val(des);
    });
});
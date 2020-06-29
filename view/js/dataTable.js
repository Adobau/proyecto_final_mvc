/* tabla dinámica para mostrar y buscar datos activos */
$(document).ready(function () {
    $('#tabla-activos').DataTable({
        "language": {
            "sProcessing": "<i class='azul-ast-text'>Procesando...</i>",
            "sLengthMenu": "<i class='azul-ast-text'>Mostrar</i> _MENU_ <i class='azul-ast-text'>Registros</i>",
            "sZeroRecords": "<b><i class='red-text'>No se encontraron resultados</i></b>",
            "sEmptyTable": "<b><i class='red-text'>Ningún dato disponible en esta tabla</i></b>",
            "sInfo": "<i class='azul-ast-text'>Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros</i>",
            "sInfoEmpty": "<i class='red-text'>Mostrando registros del 0 al 0 de un total de 0 registros</i>",
            "sInfoFiltered": "<i class='black-text'>(filtrado de un total de _MAX_ registros)</i>",
            "sInfoPostFix": "",
            "sSearch": "<i class='azul-ast-text'>BUSCAR ACTIVOS <i class='material-icons'>search</i></i>",
            "sUrl": "",
            "sInfoThousands": ",",
            "sLoadingRecords": "Cargando...",
            "oPaginate": {
                "sFirst": "<i class='naranja-ast-text'>Primero</i>",
                "sLast": "<i class='naranja-ast-text'>Último</i>",
                "sNext": "<i class='naranja-ast-text'>Siguiente</i>",
                "sPrevious": "<i class='naranja-ast-text'>Anterior</i>"
            },
            "oAria": {
                "sSortAscending": ": Activar para ordenar la columna de manera ascendente",
                "sSortDescending": ": Activar para ordenar la columna de manera descendente"
            }
        }
    });
    $("select").val('10');
    $("select").addClass("browser-default");
    
});

/* tabla dinámica para mostrar y buscar datos inactivos */
$(document).ready(function () {
    $('#tabla-inactivos').DataTable({
        "language": {
            "sProcessing": "<i class='naranja-ast-text'>Procesando...</i>",
            "sLengthMenu": "<i class='naranja-ast-text'>Mostrar</i> _MENU_ <i class='naranja-ast-text'>Registros</i>",
            "sZeroRecords": "<b><i class='red-text'>No se encontraron resultados</i></b>",
            "sEmptyTable": "<b><i class='red-text'>Ningún dato disponible en esta tabla</i></b>",
            "sInfo": "<i class='naranja-ast-text'>Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros</i>",
            "sInfoEmpty": "<i class='red-text'>Mostrando registros del 0 al 0 de un total de 0 registros</i>",
            "sInfoFiltered": "<i class='black-text'>(filtrado de un total de _MAX_ registros)</i>",
            "sInfoPostFix": "",
            "sSearch": "<i class='naranja-ast-text'>BUSCAR INACTIVOS <i class='material-icons'>search</i></i>",
            "sUrl": "",
            "sInfoThousands": ",",
            "sLoadingRecords": "Cargando...",
            "oPaginate": {
                "sFirst": "<i class='azul-ast-text'>Primero</i>",
                "sLast": "<i class='azul-ast-text'>Último</i>",
                "sNext": "<i class='azul-ast-text'>Siguiente</i>",
                "sPrevious": "<i class='azul-ast-text'>Anterior</i>"
            },
            "oAria": {
                "sSortAscending": ": Activar para ordenar la columna de manera ascendente",
                "sSortDescending": ": Activar para ordenar la columna de manera descendente"
            }
        }
    });
    $("select").val('10');
    $("select").addClass("browser-default");
    
});
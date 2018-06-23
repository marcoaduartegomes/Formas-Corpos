var table;

$(document).ready(function() {

table = $('#tabela-Consulta').removeAttr('width').DataTable( {

        responsive: true,

        orderCellsTop: true,
        language: {
            search: "Procurar",
            "info": " ",
            "infoEmpty":"Mostrando de 0 a 0 de 0 entradas",
            "infoFiltered":   "(filtrado de _MAX_ entradas no total)",
            "zeroRecords":"Não encontrado",
            searchPlaceholder: "Procurar clientes...",
            "paginate": {
                "first":      "Primeiro",
                "last":       "Ultimo",
                "next":       "Proximo",
                "previous":   "Anterior"
            },
            "lengthMenu":     "Mostrar _MENU_",
        },  
        ajax: {
            url: "php/Calendario/getRightBar.php",
            type: "POST",
        data: function ( d ) {
            d.estatus = document.getElementById("estatus").value;
            
        }, 
            
        },

        "columns": [
        { "data": "hora" }
        ],

    } );
// Apply the search

} );

function reloadTable() {
    table.ajax.reload();
}
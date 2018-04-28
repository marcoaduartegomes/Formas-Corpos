$(document).ready(function(){
    $('#tabela-contatos').DataTable({
        language:{
            search: "Procurar",
            "info": "Mostrando Pagina _PAGE_ de _PAGES_",
            "infoEmpty":"Mostrando de 0 a 0 de 0 entradas",
            "infoFiltered":   "(filtrado de _MAX_ entradas no total)",
            "zeroRecords":"Não encontrado",
            searchPlaceholder: "Procurar...",
            "paginate": {
                "first":      "Primeiro",
                "last":       "Ultimo",
                "next":       "Proximo",
                "previous":   "Anterior"
            },
            "lengthMenu":     "Mostrar _MENU_ ",
        }
    });
});
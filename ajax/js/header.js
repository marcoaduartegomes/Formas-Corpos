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

    $('[data-toggle="popover"]').popover();
});

$('#botao-notificacao').popover({
    title:'Notificações',
    content:'<div style="width:300px;"> <style> .linhaNotific{ padding:10px; border-bottom: 1px solid black; list-style-type:none; margin:0px;box-sizing:border-box; width:100%;} </style> <ul style="width:270px;margin:-10px; cursor: pointer;"> <li  data-toggle="modal" data-target="#modal-notificacao" class="linhaNotific"> <a style="text-decoration:none;"> Acunpultura às 07:00 </a> </li> <li class="linhaNotific"> <a style="text-decoration:none;"> Maquiagem às 10:00 </a> </li> <li class="linhaNotific"> <a style="text-decoration:none;"> Pedicure às 13:00 </a> </li> </ul> </div>',
});

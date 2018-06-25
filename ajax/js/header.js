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

    $(document).on('click', '.linhasNotificacao', function(){
        $('#modal-notificacao').modal('show');
        document.getElementById('notificacaoServico').innerHTML = this.getAttribute("data-servico");
        document.getElementById('notificacaoHora').innerHTML = this.getAttribute("data-horario");
        document.getElementById('notificacaoCliente').innerHTML = this.getAttribute("data-cliente");
    });
});

$('#botao-notificacao').popover({
    title:'<h4> Notificações </h4>',
    content: function() {
        return $('#conteudoNotificacao').html();
    },
});
$('#botao-home').popover({
    title:'<h4>Páginas:</h4>',
    content: function() {
        return $('#conteudoPaginas').html();
    },
});


var table;
$(document).ready(function() {
// Setup - add a text input to each footer cell

	document.getElementById('titulo-pagina').innerHTML="Produtos";

    $('#tabela-Produto thead tr#pesquisar th').each( function () {
       var title = $(this).text();
        if (title == 'Quantidade') {
            $(this).html( '<input class="pesquisar-tabela" type="text" placeholder=" '+title+'" />' );       
        }
        if (title == 'Nome do Produto') {
            $(this).html( '<input class="pesquisar-tabela" type="text" placeholder=" '+title+'" />' );       
        }
        if (title == 'Hora(ultima modificação)') {
            $(this).html( '<input class="pesquisar-tabela" type="text" placeholder=" '+title+'" />' );       
        }
        if (title == 'Operações') {
            $(this).html( '' );       
        }
    } ); // DataTable carregado por ajax  https://datatables.net/reference/option/ajax para mais informaçoes



	table = $('#tabela-Produto').DataTable( {
		orderCellsTop: true,
		language: {
			search: "Procurar",
			"info": "Mostrando Pagina _PAGE_ de _PAGES_",
			searchPlaceholder: "Procurar produtos...",
			"paginate": {
				"first":      "Primeiro",
				"last":       "Ultimo",
				"next":       "Proximo",
				"previous":   "Anterior"
			},
			"lengthMenu":     "Mostrar _MENU_ Produtos",
		},
		
		"dom": '<"top"l><"toolbar">rt<"bottom"pi><"clear">',

		"ajax": "php/Produtos/getDadoTabela.php",
		"columns": [
		{ "data": "nome" },
		{ "data": "quantidade" },
		{ "data": "data" },
		{ "data": "codigo" }
		],
		"columnDefs": [
		{
                // The `data` parameter refers to the data for the cell (defined by the
                // `data` option, which defaults to the column being worked with, in
                // this case `data: 0`. 
                //"<button class='btn btn-danger' type='button' id='123' value='"+arquivo+"' data-toggle='modal' data-target='#produtoModal' >Deletar</button>"
                "render": function ( data, type, row ) {
                	
                	return "<button class='btn btn-primary ' type='button' id='botAlterar' value='"+data+"' data-toggle='modal' data-target='#produtoModal' > <img style='height:20px;' src='img/editar-dados.png'> </button> <button class='btn btn-danger' type='button' id='botDeletar' value='"+data+"' data-toggle='modal' data-target='#produtoModalDeleta'> <img style='height:20px;' src='img/deletar-dados.png'> </button>" ;
                },
                "targets": 3,
                "orderable": false

            },
            
            ]

        } );
// Apply the search
    $("#tabela-Produto thead input").on( 'keyup change', function () {
        table
            .column( $(this).parent().index()+':visible' )
            .search( this.value )
            .draw();
    } );

	$("div.toolbar").html("<button style='height:60px;position:fixed;bottom:10px;left: 85%; border-radius:50%;' class='btn btn-success' type='button' id='botAdicionar' data-toggle='modal' data-target='#produtoModal'  ><img style='height: 40px'  src='icons/plus.svg'></button>");
} );

function stopPropagation(evt) {
		if (evt.stopPropagation !== undefined) {
			evt.stopPropagation();
		} else {
			evt.cancelBubble = true;
		}
	}

var cod_produto;
$(document).on('click', '#botDeletar', function(){ // Ao clicar no botão deletar na tabela produtos, ele ira receber o valor do codigo do produto a ser deletado 
	cod_produto = $(this).attr("value"); 			



}); 
$(document).on('click', '#botaoModalDeleta', function(){ // ao clicar no botão deletar do modal, o produto sera de fato deletado

	$.ajax({  
		url:"php/Produtos/deletar.php",  
		method:"POST",  
		data:{codigo:cod_produto}, 


		success:function(data){  
			$('#produtoModalDeleta').hide(); // esconde o modal
			$("#returnDeleta").click(); // fecha o modal de fato
			table.ajax.reload(); // reload na DataTable para não recarregar a tabela

		}


		

	}); 
}); 
var valorAntigo;
$(document).on('click', '#botAlterar', function(){ // retorna os dados do fetch.php para preencher a tabela via ajax 
	cod_produto = $(this).attr("value"); 	


	$.ajax({  
		url:"php/Produtos/fetch.php",  
		method:"POST",  
		data:{codigo:cod_produto}, 
		dataType:"json",   
		beforeSend:function(data){  
			$('#botaoModal').val("Inserir");  


		},
		success:function(data){  
			valorAntigo = data.nome;
			$('#nome').val(data.nome); 
			$('#codigo').val(data.codigo); 
			$('#quantidade').val(data.quantidade);
			$('#botaoModal').removeAttr('disabled');
				$('#nome').removeClass('is-invalid');
				$('#nome').addClass('is-valid'); 



		}  
	});


}); 
$(document).on('click', '#botaoModal', function(){ //Altera os dados da tabela do produto que foi selecionado

	$.ajax({  
		url:"php/Produtos/insert.php",  
		method:"POST",  
		data:$('#formularioEdit').serialize(), 


		success:function(data){

			$('#produtoModal').hide();
			$("#return").click();
			table.ajax.reload();

		}


		

	}); 
}); 


$(document).on('click', '#botAdicionar', function(){  //Aletera os dados do formulario para ser criado um novo produto
	$('#codigo').val("0"); 
	$('#formularioEdit')[0].reset();
	$('#botaoModal').val("Novo");  

},

);


$( "#nome" ).keyup(function() {
	var value = $('#nome').val();
	$.ajax({  
		url:"php/Produtos/validaNome.php",  
		method:"POST",  
		data:{nome:value},
		dataType:"json", 

		success:function(data){
			if(value==valorAntigo){}else{
				$('#nome').removeClass('is-valid');
				$('#botaoModal').attr('disabled', 'disabled');
				$('#nome').addClass('is-invalid');}


			},
			error: function(data) { 
				$('#botaoModal').removeAttr('disabled');
				$('#nome').removeClass('is-invalid');
				$('#nome').addClass('is-valid');
			} 




		}); 
});

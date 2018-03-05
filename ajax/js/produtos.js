
var table;
$(document).ready(function() { // DataTable carregado por ajax  https://datatables.net/reference/option/ajax para mais informaçoes
	table = $('#tabela-Produto').DataTable( {
		"ajax": "php/getDadoTabela.php",
		"columns": [
		{ "data": "arquivo" },
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
                	
                	return "<button class='btn ' type='button' id='botAlterar' value='"+data+"' data-toggle='modal' data-target='#produtoModal' >Alterar</button> <button class='btn btn-danger' type='button' id='botDeletar' value='"+data+"' data-toggle='modal' data-target='#produtoModalDeleta' >Deletar</button>" ;
                },
                "targets": 4

            },
            
            ]
        } );
} );

var cod_produto;
$(document).on('click', '#botDeletar', function(){ // Ao clicar no botão deletar na tabela produtos, ele ira receber o valor do codigo do produto a ser deletado 
	cod_produto = $(this).attr("value"); 			



}); 
$(document).on('click', '#botaoModalDeleta', function(){ // ao clicar no botão deletar do modal, o produto sera de fato deletado

	$.ajax({  
		url:"php/deletar.php",  
		method:"POST",  
		data:{codigo:cod_produto}, 


		success:function(data){  
			$('#produtoModalDeleta').hide(); // esconde o modal
			$("#returnDeleta").click(); // fecha o modal de fato
			table.ajax.reload(); // reload na DataTable para não recarregar a tabela

		}


		

	}); 
}); 
$(document).on('click', '#botAlterar', function(){ // retorna os dados do fetch.php para preencher a tabela via ajax 
	cod_produto = $(this).attr("value"); 			
	$.ajax({  
		url:"php/fetch.php",  
		method:"POST",  
		data:{codigo:cod_produto}, 
		dataType:"json",   
		beforeSend:function(data){  
			$('#botaoModal').val("Inserir");  


		},
		success:function(data){  

			$('#nome').val(data.nome); 
			$('#codigo').val(data.codigo); 
			$('#quantidade').val(data.quantidade); 



		}  
	});


}); 
$(document).on('click', '#botaoModal', function(){ //Altera os dados da tabela do produto que foi selecionado

	$.ajax({  
		url:"php/insert.php",  
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

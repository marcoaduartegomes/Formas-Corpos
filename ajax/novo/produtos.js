
var table;
$(document).ready(function() {
    table = $('#tabela-Produto').DataTable( {
        "ajax": "getDadoTabela.php",
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
                	
                  return "<button class='btn btn-danger' type='button' id='botDeletar' value='"+data+"' data-toggle='modal' data-target='#produtoModal' >Deletar</button>" ;
                },
                "targets": 4

            },
            
        ]
    } );
} );

var cod_produto;
$(document).on('click', '#botDeletar', function(){  
			cod_produto = $(this).attr("value"); 			
			$.ajax({  
				url:"fetch.php",  
				method:"POST",  
				data:{codigo:cod_produto}, 
				dataType:"json",   
				beforeSend:function(data){  
						$('#botaoModal').val("Deletar");  

					},
				success:function(data){  
					  
					$('#nome').val(data.nome); 
					$('#codigo').val(data.codigo); 
					$('#quantidade').val(data.quantidade); 
					

				 
				}  
			});


		}); 
$(document).on('click', '#botaoModal', function(){ 
			
			$.ajax({  
				url:"deletar.php",  
				method:"POST",  
				data:{codigo:cod_produto}, 
				 

				success:function(data){  
				//	$('#produtoModal').hide();
					$("#returns").click();
					table.ajax.reload();
						
				}


		
			 
}); 
		}); 
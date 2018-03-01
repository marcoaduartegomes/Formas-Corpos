

$(document).ready(function() {
    $('#tabela-Produto').DataTable( {
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
                	
                  return "<button class='btn btn-danger' type='button' id='123' value='"+data+"' data-toggle='modal' data-target='#produtoModal' >Deletar</button>" ;
                },
                "targets": 4

            },
            
        ]
    } );
} );

$(document).on('click', '#123', function(){  
			var cod_produto = $(this).attr("value"); 
			alert(cod_produto);
			$.ajax({  
				url:"fetch.php",  
				method:"POST",  
				data:{codigo:cod_produto}, 
				dataType:"json",   
				success:function(data){  
					  
					$('#nome').val(data.nome); 
					$('#codigo').val(data.codigo); 
					$('#quantidade').val(data.quantidade); 

				 
				}  
			});  

		}); 
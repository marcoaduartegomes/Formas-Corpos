var table;
$(document).ready(function() {
// Setup - add a text input to each footer cell
    $('#tabela-Cliente thead tr#pesquisar th').each( function () {
       var title = $(this).text();
        if (title == 'Nome') {
            $(this).html( '<input type="text" placeholder="Search '+title+'" />' );       
        }
        if (title == 'CPF') {
            $(this).html( '<input type="text" placeholder="Search '+title+'" />' );       
        }
        if (title == 'E-Mail') {
            $(this).html( '<input type="text" placeholder="Search '+title+'" />' );       
        }
        if (title == 'Telefone') {
           $(this).html( '<input type="text" placeholder="Search '+title+'" />' );    
        }
        if (title == 'Celular') {
           $(this).html( '<input type="text" placeholder="Search '+title+'" />' );      
        }
    } ); // DataTable carregado por ajax  https://datatables.net/reference/option/ajax para mais informaçoes



	table = $('#tabela-Cliente').DataTable( {
		orderCellsTop: true,
		language: {
			search: "Procurar",
			"info": "Mostrando Pagina _PAGE_ de _PAGES_",
			searchPlaceholder: "Procurar clientes...",
			"paginate": {
				"first":      "Primeiro",
				"last":       "Ultimo",
				"next":       "Proximo",
				"previous":   "Anterior"
			},
			"lengthMenu":     "Mostrar _MENU_ Clientes",
		},
		
		"dom": '<"top"l><"toolbar">rt<"bottom"pi><"clear">',

		"ajax": "php/Clientes/getDadoTabela.php",
		"columns": [
		{ "data": "Nome" },
		{ "data": "CPF" },
		{ "data": "Telefone" },
		{ "data": "Celular" },
		{ "data": "email" },
		{ "data": "codigo" }
		],
			"columnDefs": [
		{
                // The `data` parameter refers to the data for the cell (defined by the
                // `data` option, which defaults to the column being worked with, in
                // this case `data: 0`. 
                //"<button class='btn btn-danger' type='button' id='123' value='"+arquivo+"' data-toggle='modal' data-target='#produtoModal' >Deletar</button>"
                "render": function ( data, type, row ) {
                	
                	return "<button class='btn btn-primary ' type='button' id='botAlterar' value='"+data+"' data-toggle='modal' data-target='#clienteModal' >Alterar</button> <button class='btn btn-danger' type='button' id='botDeletar' value='"+data+"' data-toggle='modal' data-target='#clienteModalDeleta' >Deletar</button>" ;
                },
                "targets": 5,
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

	$("div.toolbar").html("<button style='position:fixed;bottom:0;left: 85%;' class='btn btn-success' type='button' id='botAdicionar' data-toggle='modal' data-target='#clienteModal'  ><img style='height: 40px'  src='icons/plus.svg'></button>");
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
var value;
$(document).on('click', '#botAlterar', function(){ // retorna os dados do fetch.php para preencher a tabela via ajax 
	cod_produto = $(this).attr("value"); 	


	$.ajax({  
		url:"php/Clientes/fetch.php",  
		method:"POST",  
		data:{codigo:cod_produto}, 
		dataType:"json",   
		beforeSend:function(data){  
			$('#botaoModal').val("Inserir");  


		},
		success:function(data){  
			
			valorAntigo = data.CPF;
		
			$('#nome').val(data.Nome); 
			$('#cpf').val(data.CPF); 
			$('#telefone').val(data.Telefone);
			$('#celular').val(data.Celular); 
			$('#email').val(data.email);
			$('#codigo').val(data.codigo); 
			$('#botaoModal').removeAttr('disabled');
				$('#cpf').removeClass('is-invalid');
				$('#cpf').addClass('is-valid');
		}  
	});


}); 



$(document).on('click', '#botAdicionar', function(){  //Aletera os dados do formulario para ser criado um novo produto
	$('#codigo').val("0"); 
	$('#formularioEdit')[0].reset();
	$('#botaoModal').val("Novo");  

},

);


$( "#cpf" ).keyup(function() {
	value = $('#cpf').val();
	$.ajax({  
		url:"php/Clientes/validaCPF.php",  
		method:"POST",  
		data:{cpf:value},
		dataType:"json", 

		success:function(data){
			alert(value);
			alert(valorAntigo);
			if(value==valorAntigo){
				
			}else{
				$('#cpf').removeClass('is-valid');
				$('#botaoModal').attr('disabled', 'disabled');
				$('#cpf').addClass('is-invalid');}


			},
			error: function(data) { 
				$('#botaoModal').removeAttr('disabled');
				$('#cpf').removeClass('is-invalid');
				$('#cpf').addClass('is-valid');
			} 




		}); 
});

jQuery.validator.addMethod("cpf", function (value, element) {
            value = jQuery.trim(value);

            value = value.replace('.', '');
            value = value.replace('.', '');
            cpf = value.replace('-', '');
            while (cpf.length < 11) cpf = "0" + cpf;
            var expReg = /^0+$|^1+$|^2+$|^3+$|^4+$|^5+$|^6+$|^7+$|^8+$|^9+$/;
            var a = [];
            var b = new Number;
            var c = 11;
            for (i = 0; i < 11; i++) {
                a[i] = cpf.charAt(i);
                if (i < 9) b += (a[i] * --c);
            }
            if ((x = b % 11) < 2) { a[9] = 0 } else { a[9] = 11 - x }
            b = 0;
            c = 11;
            for (y = 0; y < 10; y++) b += (a[y] * c--);
            if ((x = b % 11) < 2) { a[10] = 0; } else { a[10] = 11 - x; }
            if ((cpf.charAt(9) != a[9]) || (cpf.charAt(10) != a[10]) || cpf.match(expReg)) return false;
            return true;
        }, "Informe um CPF válido."); // Mensagem padrão

$(document).ready(function(){
		$('#formularioEdit').validate({
			rules: {
				nome: { required: true, minlength: 2 },
				cpf: { required: true, cpf: true },
				email: { required: true, email: true },
				telefone: { required: true },
				celular: { required: true }
			},
			messages: {
				nome: { required: 'Preencha o campo nome', minlength: 'No mínimo 2 letras' },
				cpf: { required: 'Preencha o campo CPF', cpf: 'CPF INVALIDO' },
				email: { required: 'Informe o seu email', email: 'Ops, informe um email válido' },
				telefone: { required: 'Nos diga seu telefone' },
				celular: { required: 'Nos diga seu celular' }

			},
			submitHandler: function( form ){
				var dados = $( form ).serialize();

				$.ajax({
					type: "POST",
					url: "php/Clientes/insert.php",
					data: dados,
					success: function( data )
					{
						$('#clienteModal').hide(); // esconde o modal
						$("#return").click(); // fecha o modal de fato
						table.ajax.reload(); // reload na DataTable para não recarregar a tabela
					}
				});

				return false;
			}
		});
	});
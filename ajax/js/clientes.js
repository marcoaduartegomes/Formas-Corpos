var table;
$(document).ready(function() {
// Setup - add a text input to each footer cell

document.getElementById('titulo-pagina').innerHTML="Clientes";

$('#tabela-Cliente thead tr#pesquisar th').each( function () {
	var title = $(this).text();
	if (title == 'Nome') {
		$(this).html( '<input class="pesquisar-tabela" type="text" size="9" placeholder=" '+title+'" />' );       
	}
	if (title == 'CPF') {
		$(this).html( '<input class="pesquisar-tabela type="text" size="5" placeholder=" '+title+'" />' );       
	}
	if (title == 'E-Mail') {
		$(this).html( '<input class="pesquisar-tabela type="text" placeholder=" '+title+'" />' );       
	}
	
	if (title == 'Operações') {
		$(this).html( '' );      
	}
    }); // DataTable carregado por ajax  https://datatables.net/reference/option/ajax para mais informaçoes

	

table = $('#tabela-Cliente').removeAttr('width').DataTable( {
	
	responsive: true,

	orderCellsTop: true,
	language: {
		search: "Procurar",
		"info": "Mostrando Pagina _PAGE_ de _PAGES_",
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
		"lengthMenu":     "Mostrar _MENU_ Clientes",
	},
	
	"dom": '<"top"l><"toolbar">rt<"bottom"pi><"clear">',

	"ajax": "php/Clientes/getDadoTabela.php",
	"columns": [
	{ "data": "Nome" },
	{ "data": "CPF" },	
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
                	
                	return "<center> <button class='btn btn-success'  data-toggle='modal' data-target='#clienteModalMsg'  type='button' id='botMsg' value='"+data+"'> <img style='height:20px;' src='img/enviar-msg.png'> </button> <button class='btn btn-primary ' type='button' id='botAlterar' value='"+data+"' data-toggle='modal' data-target='#clienteModal' > <img style='height:20px;' src='img/editar-dados.png'> </button> <button class='btn btn-warning'  data-toggle='modal' data-target='#fichaClienteModal'  type='button' id='botFicha' value='"+data+"'> <img style='height:20px;' src='img/ficha-cliente.png'> </button>  <button class='btn btn-danger' 'type='button' id='botDeletar' value='"+data+"' data-toggle='modal' data-target='#clienteModalDeleta' > <img style='height:20px;' src='img/deletar-dados.png'> </button> </center>" ;
                },
                "targets": 3,
                "orderable": false

            },
            
            
            ],

            

        } );
// Apply the search
$("#tabela-Cliente thead input").on( 'keyup change', function () {
	table
	.column( $(this).parent().index()+':visible' )
	.search( this.value )
	.draw();
} );

$("div.toolbar").html("<button style='height:60px;position:fixed;bottom:10px;left: 85%; border-radius:50%;' class='btn btn-success' type='button' id='botAdicionar' data-toggle='modal' data-target='#clienteModal'  ><img style='height: 40px'  src='icons/plus.svg'></button>");
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
		url:"php/Clientes/deletar.php",  
		method:"POST",  
		data:{codigo:cod_produto}, 


		success:function(data){
			
			$('#clienteModalDeleta').hide(); // esconde o modal
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
			$('#cpf').val(data.cpf); 
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
	value=0;
},

);

$(function(){
$("#cpf").keyup(function() {
	value = $('#cpf').val();
	$.ajax({  
		url:"php/Clientes/validaCPF.php",  
		method:"POST",  
		data:{cpf:value},
		dataType:"json", 

		success:function(data){
			
			if(value==valorAntigo){
				alert("dsad");
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
			cpf: { required: true, cpf: true,minlength: 11,maxlength: 11 },
			email: { required: true, email: true },
			telefone: { required: true },
			celular: { required: true }
		},
		messages: {
			nome: { required: 'Preencha o campo nome', minlength: 'No mínimo 2 letras' },
			cpf: { required: 'Preencha o campo CPF', cpf: 'CPF INVALIDO', minlength: 'Até 11 digitos' },
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


$(document).on('click', '#botFicha', function(){ // retorna os dados do fetch.php para preencher a tabela via ajax 
	cod_produto = $(this).attr("value"); 	
	$.ajax({  
		url:"php/Clientes/fetch.php",  
		method:"POST",  
		data:{codigo:cod_produto}, 
		dataType:"json",   
		beforeSend:function(data){  
			$('#batata').val("Inserir");  
			

		},
		success:function(data){  
			
			valorAntigo = data.CPF;
		
			$('#Fichanome').val(data.Nome); 
			$('#Fichacpf').val(data.cpf); 
			$('#Fichatelefone').val(data.Telefone);
			$('#Fichacelular').val(data.Celular); 
			$('#Fichaemail').val(data.email);
			$('#Fichacodigo').val(data.codigo);
			$('#FichaProximaConsulta').val(data.dataFim);

		}  
	});


}); 


$(document).on('click', '#botMsg', function(){ // retorna os dados do fetch.php para preencher a tabela via ajax 
	cod_produto = $(this).attr("value"); 	
	$.ajax({  
		url:"php/Clientes/fetch.php",  
		method:"POST",  
		data:{codigo:cod_produto}, 
		dataType:"json",   
		beforeSend:function(data){  
			$('#batata').val("Inserir");  
			

		},
		success:function(data){  
			
			$('#Fichaemail2').val(data.email);

		}  
	});


}); 
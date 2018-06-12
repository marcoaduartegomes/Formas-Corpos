$(document).ready(function(){

	$('#formConsulta').validate({
		
		submitHandler: function( form ){
			var dados = $( form ).serialize();
			
			$.ajax({
				type: "POST",
				url: "php/Calendario/insert.php",
				data: dados,
			

				
				success: function( data )
				{
						document.getElementById("formConsulta").reset();
						$('#modalConsulta').hide(); // esconde o modal
						$("#return").click(); // fecha o modal de fato
						$('#calendar').fullCalendar( 'refetchEvents' ); // reload na DataTable para não recarregar a tabela
					},
				error: function( data )
				{
						alert("error mano");						
					},
				});

			return false;
		}
	});
});
var value;
$(function(){
$("#nssome").keyup(function() {
	value = $('#nome').val();
	$.ajax({  
		url:"php/Calendario/validaCPF.php",  
		method:"POST",  
		data:{nome:value},
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
  $( function() {

    $( "#nome" ).autocomplete({
      source: function( request, response ) {
        $.ajax( {
          url: "php/Calendario/autoComplete.php",
          method:"POST", 
          dataType: "json",
          data: {
            nome: request.term
          },
          success: function( data ) {
           // alert(data[0].nome);
            response( data );

          }
        } );
      },
      minLength: 2,
      select: function( event, ui ) {
      	//$('#nome').val(ui.item.label); 
        alert(ui.item.label);
       //log( "Selected: " + ui.item.nome);
      }
    } );
    $( "#nome" ).autocomplete( "option", "appendTo", ".eventInsForm" );
  } );

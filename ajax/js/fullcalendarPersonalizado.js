$(document).ready(function(){
	document.getElementById('titulo-pagina').innerHTML="Calendário";
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
    
       //log( "Selected: " + ui.item.nome);
   }
} );
	$( "#nome" ).autocomplete( "option", "appendTo", ".eventInsForm" );
} );
$(document).on('click', '#deletar', function(){  //Aletera os dados do formulario para ser criado um novo produto

	codConsulta = $('#codConsulta').val();
	$.ajax( {
				url: "php/Calendario/deletar.php",
				method:"POST", 
				
				data: {
					codConsulta: codConsulta
				},
				success: function( data ) {
				
						$('#modalConsulta').hide(); // esconde o modal
						$("#return").click(); // fecha o modal de fato
						$('#calendar').fullCalendar( 'refetchEvents' ); // reload na DataTable para não recarregar a tabela
       }
   } );
}); 
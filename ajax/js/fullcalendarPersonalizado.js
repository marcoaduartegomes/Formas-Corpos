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
						$('#modalConsulta').hide(); // esconde o modal
						$("#return").click(); // fecha o modal de fato
						$('#calendar').fullCalendar( 'refetchEvents' ); // reload na DataTable para não recarregar a tabela
					}
				});

			return false;
		}
	});
});
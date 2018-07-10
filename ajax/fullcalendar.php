
<!DOCTYPE html>
<html>
<head>

	<meta charset='utf-8' />
	<link rel="icon" href="imagens/favicon.png">
	<link href='css/fullcalendar.css' rel='stylesheet' />
	<link href='css/fullcalendar.min.css' rel='stylesheet' />
	<link href='css/fullcalendar.print.css' rel='stylesheet' media='print' />
	<link href='css/fullcalendar.print.min.css' rel='stylesheet' media='print' />
	<link href='css/Calendario.css' rel='stylesheet' type="text/css" />
	<?php

	require_once __DIR__.'/header.php';

	?>
	<script src='jquery/moment.min.js'></script>
	<script src='jquery/jquery.min.js'></script>
	<script src='jquery/jquery-ui.min.js'></script>

	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
	<link rel="stylesheet" href="/resources/demos/style.css">
	<script src='js/fullcalendarPersonalizado.js'></script>
	<script src='js/fullcalendar.min.js'></script>
	
	<script src='js/locale-all.js'></script>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

	<script src="http://jqueryvalidation.org/files/dist/jquery.validate.js"></script>
	<style type="text/css">
	.ui-autocomplete.ui-front
	{
		z-index: 1051;
	}
</style>

<script>

	$(document).ready(function() {
		var date = new Date();
		var d = date.getDate();
		var m = date.getMonth();
		var y = date.getFullYear();
		
		/*  className colors
		
		className: default(transparent), important(red), chill(pink), success(green), info(blue)
		
		*/		
		

		/* initialize the external events
		-----------------------------------------------------------------*/

		$('#external-events .fc-event').each(function() {

      // store data so the calendar knows to render an event upon drop
      $(this).data('event', {
        title: $.trim($(this).text()), // use the element's text as the event title
        stick: true // maintain when user navigates (see docs on the renderEvent method)
    });

      // make the event draggable using jQuery UI
      $(this).draggable({
      	zIndex: 999,
        revert: true,      // will cause the event to go back to its
        revertDuration: 0  //  original position after the drag
    });

  });


		/* initialize the calendar
		-----------------------------------------------------------------*/
		
		$('#calendar').fullCalendar({

			header: {
				left: 'title',
				center: 'agendaDay,agendaWeek,month',
				right: 'prev,next today'
			},
			editable: true,
			
			selectable: true,
			defaultView: 'agendaWeek',
			axisFormat: 'h:mm',
			businessHours: true,
			nowIndicator: true,
			locale: 'pt-br',
			




			allDaySlot: false,
			selectHelper: true,
			eventClick: function(calEvent, jsEvent, view) {
				document.getElementById( "modalteste" ).click();

				dataInicio = moment(calEvent.start).format('YYYY-MM-DD hh:mm:ss');
				dataFinal = moment(calEvent.end).format('YYYY-MM-DD hh:mm:ss');
				descricao = calEvent.description;
				color = calEvent.color;
				nome = calEvent.title;
				servico = calEvent.Codservico;
				$('#inicio').val(dataInicio); 
				$('#final').val(dataFinal); 
				$('#descricao').val(descricao); 
				$('#nome').val(nome); 
				$('#servico').val(servico); 
				$('#alterando').val("1"); 
				$('#codConsulta').val(calEvent.codigo); 
				$('#deletar').attr('type', 'button');
				if (color == "red") {

					$( "#naoPago" ).prop( "checked", true );
				}else{

					$( "#pago" ).prop( "checked", true );
				}

    // change the border color just for fun
    $(this).css('border-color', 'red');

},
eventDrop: function(calEvent, delta, revertFunc) {
	codConsulta = calEvent.codigo;
	dataInicio = moment(calEvent.start).format('YYYY-MM-DD hh:mm:ss');
	dataFinal = moment(calEvent.end).format('YYYY-MM-DD hh:mm:ss');
	alert(calEvent.title + " foi alterado para " + calEvent.start.format('YYYY-MM-DD hh:mm:ss'));

	if (!confirm("Deseja realizar esta alteração de horario?")) {
		revertFunc();
	}else{
		$.ajax({  
			url:"php/Calendario/updateData.php",  
			method:"POST",   
			data:{start:dataInicio,end:dataFinal,codConsulta:codConsulta}, 
			dataType:"json",   
			beforeSend:function(data){  



			},
			success:function(data){  

			}  
		});


	}

},




select: function(start, end, allDay) {
	document.getElementById("formConsulta").reset();
	document.getElementById( "modalteste" ).click();
	dataInicio = moment(start).format('YYYY-MM-DD hh:mm:ss');
	dataFinal = moment(end).format('YYYY-MM-DD hh:mm:ss');
	$('#inicio').val(dataInicio); 
	$('#final').val(dataFinal); 
	$('#alterando').val("0"); 
	$('#deletar').attr('type', 'hidden');
},
			droppable: true, // this allows things to be dropped onto the calendar !!!

			
			events: 'php/Calendario/getDadoTabela.php',
			allDay: false,

			
		});
		
		
	});

</script>
<style>

body {
	
	text-align: center;
	font-size: 14px;
	font-family: "Helvetica Nueue",Arial,Verdana,sans-serif;
	background-color: #DDDDDD;
}

#wrap {
	width: 1100px;
	margin: 0 auto;
}

#external-events {
	float: left;
	width: 150px;
	padding: 0 10px;
	text-align: left;
}

#external-events h4 {
	font-size: 16px;
	margin-top: 0;
	padding-top: 1em;
}

.external-event { /* try to mimick the look of a real event */
	margin: 10px 0;
	padding: 2px 4px;
	background: #3366CC;
	color: #fff;
	font-size: .85em;
	cursor: pointer;
}

#external-events p {
	margin: 1.5em 0;
	font-size: 11px;
	color: #666;
}

#external-events p input {
	margin: 0;
	vertical-align: middle;
}

.fc-widget-content{
	height:505px;
}

#calendar {
	/* 		float: right; */
	margin: 0 auto;
	width: 900px;
	background-color: #FFFFFF;
	border-radius: 6px;
	box-shadow: 0 1px 2px #C3C3C3;
}

</style>
</head>
<body style="background-color:rgba(0, 0, 0, 0.01);">
	
	<div id="corpo-principal" class="fadeIn">
		<div class="row">
			<div class="col-8">
				<div id='calendar' style="margin-left:5px;padding:5px;"></div>
			</div>
			<div class="col-4" style="padding:10px;">
				<select id="estatus">
					<option value="pago">Pago</option>
					<option value="naoPago">Não Pago</option>
				</select>
				<button class="botao-calendario" id="muda" value=grafico onclick="reloadTable()">Atualizar</button>
				<table  id="tabela-Consulta" class="table" width="100%">

					<thead>
						<tr>
							<th style="width:50%;">Start</th>

						</tr>
					</thead>


					<tbody id="tabela-Consulta-Body">


					</tbody>
				</table>
			</div>
		</div>
	</div>






	<!-- Button trigger modal -->
	<input type="hidden" class="btn btn-primary" id = "modalteste" data-toggle="modal" data-target="#modalConsulta">


	<!-- Modal -->
	<div class="modal fade" id="modalConsulta" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLongTitle"> Dados da Consulta</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<form  id="formConsulta" style="text-align:left;margin-left:10px;" method="POST" name="formConsulta">
						<label for="inicio"> Início&nbsp;&nbsp;&nbsp; </label>
						<input type="datetime" id="inicio" name="inicio">
						<label for="final"> Fim </label>
						<input type="datetime" id="final" name="final">
						<br><br>
						<label for="nome">Nome&nbsp;&nbsp;&nbsp; </label>
						<input id="nome" name="nome" value="" style="width:360px;">
						<br><br>
						<label for="servico">Serviço </label>
						<select id="servico" name="servico">
							<?php
							require_once __DIR__.'/php/Produtos/connect.php';
							$query = "SELECT nome,codigo FROM servico";  
							$result = mysqli_query($conn, $query);  
							while($row = mysqli_fetch_array($result)){
								echo  '  
								<option value="'.$row["codigo"].'"> '.$row["nome"].' </option>';
							}

							?>
							</select>
							<label style="margin-left:30px;"> Situação </label>
							<input type="radio" name="pago" id="pago" value="blue"> 
							<label class="opcoesPgto" for="pago"> Pago </label>
							<input type="radio" name="pago" id="naoPago" value="red">
							<label class="opcoesPgto" for="naoPago"> Não Pago </label>
							
							<input type="hidden" name="alterando" id="alterando">
							<input type="hidden" name="codConsulta" id="codConsulta">
							
							<br><br>
							<label for="descricao"> Descrição </label><br>
							<textarea cols="65" rows="6" type="text" name="descricao" id="descricao"> </textarea>
						
						<br>
						

					</div>
					<div class="modal-footer">
						<input type="button" name="deletar" id="deletar" value="Deletar">
						<button type="button" class="btn btn-secondary" name="return" id="return" data-dismiss="modal">Fechar</button>
						<input type="submit" value="Salvar" id="botaoConsulta" class="btn btn-primary">
					</form>
				</div>
			</div>
		</div>
	</div>


    <script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>

<script src='js/sideBar.js'></script>

</body>


</html>

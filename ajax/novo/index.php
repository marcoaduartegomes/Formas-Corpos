<!DOCTYPE HTML>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">

	<title>Formas&Corpos</title>

	<!-- bootstrap - link cdn -->
	<link rel="icon" href="imagens/favicon.png">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="jquery-3.2.1.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	
<script type="text/javascript">

	var httpRequest;

	function fazerRequisicao(url, destino){

		document.getElementById(destino).innerHTML = "<center><img src='loader.gif'></center>";

		if(window.XMLHttpRequest){
			httpRequest = new XMLHttpRequest();
		}else if(window.ActiveXObject){
			try{

				httpRequest = new ActiveXObject("Msxml2.XMLHTTP");

			}catch(e){

				try{

					httpRequest = new ActiveXObject("Microsoft.XMLHTTP");

				}catch(e){

					alert("Impossível instanciar o objeto XMLHttpRequest para esse navegador/versão");

				}

			}
		}

		if(!httpRequest){
			alert("Erro ao tentar criar uma instância do objeto XMLHttpRequest");
			return false;
		}

		httpRequest.onreadystatechange = situacaoRequisicao;

		httpRequest.open("GET", url);
		httpRequest.send();
		


	}

	function situacaoRequisicao(){

		if(httpRequest.readyState == 4){

			if(httpRequest.status == 200){

				document.getElementById('div_conteudo').innerHTML = httpRequest.responseText;

			}

		}

	}
	function alterar(){

		$('#form1').submit(function(event){
			event.preventDefault();
			var formDados = new FormData($(this)[0]);

			$.ajax({
				url:'upload.php',
				type:'POST',
				data:formDados,
				cache:false,
				contentType:false,
				processData:false,
				success:function (data)
				{document.getElementById('resultado').innerHTML = 'Enviado! Em breve Entraremos em contato.';
				$('#div_conteudo').load('ProdutoMostrar.php');
				$('#form1').each (function(){
					this.reset();
				});
			},
			dataType:'html'
		});
			//fazerRequisicao('ProdutoMostrar.php', 'div_conteudo');


			return false;
		});


	};


		$(document).on('click', '.edit_data', function(){  
			var cod_produto = $(this).attr("id");  

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
		var cod_produto;
		$(document).on('click', '.delete_data', function(){  
			cod_produto = $(this).attr("id");
				
				}); 

		$(document).on('click', '#deletaProduto', function(){ 
			
			$.ajax({  
				url:"deletar.php",  
				method:"POST",  
				data:{codigo:cod_produto}, 
				dataType:"json",   
				success:function(data){  
				}


			 
}); 
			$("#returns").click();
						$('#div_conteudo').load('ProdutoMostrar.php');
		});  

		$(document).on('click', '#insert', function(){  
           event.preventDefault(); 
			
		

			if($('#nome').val() == "")  
			{  
				alert("Name is required");  
			}  
			else if($('#quantidade').val() == '')  
			{  
				alert("Address is required");  
			}  
			else  
			{  
				$.ajax({  
					url:"insert.php",  
					method:"POST",  
					data:$('#formularioEdit').serialize(),  
					beforeSend:function(){  
						$('#insert').val("Inserting");  

					},  
					success:function(data){  
						  
						
						$('#formularioEdit')[0].reset();
						
						$("#return").click();
						$('#div_conteudo').load('ProdutoMostrar.php');
						 
					}  
				});


			return true;

			}  
		});  
  
</script>

</head>

<body>

	<!-- Static navbar -->
	<?php require_once __DIR__.'/header.php'; ?>

	


		



		<div  id="div_conteudo" style="height:100%;overflow:scroll;"></div>




		<?php require_once __DIR__.'/footer.php'; ?>
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

	<!-- Include all compiled plugins (below), or include individual files as needed  -->
	<script src="bootstrap/js/bootstrap.min.js"></script>
	<script src="js/personal.js"></script>
	
	
	   
</script>
</body>
</html>
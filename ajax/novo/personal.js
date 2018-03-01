
		function semFoto()
		{


			document.getElementById("validatedCustomFile").required=false;
			document.getElementById("escolha").style.visibility = 'hidden';
			document.getElementById("validatedCustomFile").value="";   

    // $("#validatedCustomFile").replaceWith($("#validatedCustomFile").clone());
    $("#preview").css('display', 'none').attr('src', '');


}
function comFoto()
{
	document.getElementById("validatedCustomFile").required=true;
	document.getElementById("escolha").style.visibility = 'visible';
    // $("#validatedCustomFile").clone().replaceWith($("#validatedCustomFile"));
    $("#preview").css('display', 'block').attr('src', '');
}
function caixinhacom(){
	comFoto();
	document.getElementById("customControlValidation2").checked=true;   


}
function caixinhasem(){
	semFoto();
	document.getElementById("customControlValidation3").checked=true;   


}

	var reader = new FileReader();



	function semFoto()
	{

		document.getElementById("preview").style.height = "0px";
		document.getElementById("validatedCustomFile").required=false;
		document.getElementById("escolha").style.visibility = 'hidden';
		document.getElementById("validatedCustomFile").value="";   

    // $("#validatedCustomFile").replaceWith($("#validatedCustomFile").clone());
    $("#preview").css('display', 'none').attr('src', '');


}
function zerar()
{

	document.getElementById("preview").style.height = "0px";
	document.getElementById("validatedCustomFile").value="";   

    // $("#validatedCustomFile").replaceWith($("#validatedCustomFile").clone());
    $("#preview").css('display', 'block').attr('src', '');


}
function comFoto()
{
	document.getElementById("validatedCustomFile").required=true;
	document.getElementById("escolha").style.visibility = 'visible';
    // $("#validatedCustomFile").clone().replaceWith($("#validatedCustomFile"));
    $("#preview").css('display', 'block').attr('src', '');
}


document.getElementById("validatedCustomFile").onchange = function () {

	document.getElementById("preview").style.height = "150px";
	reader.onload = function (e) {
        // get loaded data and render thumbnail.
        document.getElementById("preview").src = e.target.result;
    };

    // read the image file as a data URL.
    reader.readAsDataURL(this.files[0]);
};




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
			alert("asdsad");
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


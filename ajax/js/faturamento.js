$(document).ready( function () {
    $('#faturamento-por-servico').DataTable({
            orderCellsTop: true,
            language: {
                search: "Procurar",
                "info": "Mostrando _PAGE_ de _PAGES_",
                searchPlaceholder: "Procurar serviços...",
                "paginate": {
                    "first":      "Primeiro",
                    "last":       "Ultimo",
                    "next":       "Proximo",
                    "previous":   "Anterior"
                },
                "lengthMenu":     "Mostrar _MENU_",
            },
            
    });

    document.getElementById('titulo-pagina').innerHTML="Faturamento";

    draw();

});

function draw(){
    
    //Contando o número de servicos
    var i=0;
    while(document.getElementById('serv-'+i)){
        i++;
    }		
    var numeroServicos = i;
    
    var valor;
    var precos = new Array(numeroServicos);
    var nomes = new Array(numeroServicos);
			
	for(i=0;i<numeroServicos;i++){
		valor = document.getElementById("serv-"+i+"-preco").innerHTML;
		valor = valor.replace("R$ ", "");
		valor = parseInt(valor);
		precos[i] = valor;
	}
			
	for(i=0;i<numeroServicos;i++){
		nomes[i] = document.getElementById("serv-"+i+"-nome").innerHTML;
	}
			
	//Montando o gráfico
	var cores = ["#4c1374", "#7f4697", "#9f6899", "#6e3596", "#3a0152"];
    
    var canvas = document.getElementById('grafico-donut');
    if (canvas.getContext){
      var context = canvas.getContext('2d');
      
      var myDoughnutChart = new Chart(context, {
        type: 'doughnut',
        data: {
          labels: nomes ,
          datasets: [{
            label: "Population (millions)",
            backgroundColor: cores,
            data: precos
            }]},

            options: {
                title: {
                  display: false,
                  text: 'Distribuição de ganho por serviços'
                }
            }
        });
    }
  }
$(document).ready( function () {
    $('#faturamento-por-servico').DataTable();

    document.getElementById('titulo-pagina').innerHTML="Faturamento";

});

function draw(){
    var canvas = document.getElementById('grafico-donut');
    if (canvas.getContext){
      var context = canvas.getContext('2d');
      
      var myDoughnutChart = new Chart(context, {
        type: 'doughnut',
        data: {
          labels: ["Cabelo","Depilação","Maquiagem","Podologia"] ,
          datasets: [{
            label: "Population (millions)",
            backgroundColor: ["#4c1374", "#7f4697", "#9f6899", "#6e3596"],
            data: [300,700,250,370]
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
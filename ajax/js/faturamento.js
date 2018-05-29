var table;
var dias;
dias = "2018-05-11 06:00:00";
$(document).ready(function() {
// Setup - add a text input to each footer cell

document.getElementById('titulo-pagina').innerHTML="Faturamentos";
 // DataTable carregado por ajax  https://datatables.net/reference/option/ajax para mais informaçoes




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
    ajax: {
            url: "php/Faturamentos/getDadoTabela.php",
            type: "POST",
            data: function ( d ) {
                d.dia = document.getElementById("data").value;
                
            }, 
        },
       
       


    "columns": [
    { "data": "nome" },
    { "data": "preco" },  
    { "data": "montante" }
    ],
    'createdRow': function( row, data, dataIndex ) {
            $(row).attr('id', 'serv-' + dataIndex);
        },
        'columnDefs': [
            {
                'targets': 0,
                'createdCell':  function (td, cellData, rowData, row, col) {
                    $(td).attr('id', 'serv-'+row+'-nome'); 
                }
            },
            {
                'targets': 2,
                'createdCell':  function (td, cellData, rowData, row, col) {
                    $(td).attr('id', 'serv-'+row+'-preco'); 
                }
            }
        ],
"initComplete": function(settings, json) {
    draw();
  }

            

        } );
document.getElementById('titulo-pagina').innerHTML="Faturamento";


// Apply the search

} );

var context;
var canvas;
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
    
     canvas = document.getElementById('grafico-donut');
    if (canvas.getContext){
       context = canvas.getContext('2d');
      
      var myDoughnutChart = new Chart(context, {
        type: 'doughnut',
        data: {
          labels: nomes ,
          datasets: [{
            backgroundColor: cores,
            data: precos
            }]},

            options: {
                title: {
                  display: false,
                  text: 'Distribuição de ganho por serviços'
                },
                legend:{
                    labels:{
                        fontSize:15
                    }
                }
            }
        });
    }
  }

function reloadTable() {
    table.ajax.reload();
}

function limpar() {
    context.rect(0, 0, canvas.width, canvas.height);
    context.clearRect(0, 0, canvas.width, canvas.height);
    context.fillStyle = 'aliceblue';
    context.fill();
    texture.needsUpdate = true;
}
var table;
var dias;
dias = "2018-05-11 06:00:00";
$(document).ready(function() {
// Setup - add a text input to each footer cell
$( "#pago" ).prop( "checked", true );
document.getElementById('titulo-pagina').innerHTML="Faturamento";
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
        "lengthMenu":     "Mostrar _MENU_",
    },
    
    "dom": '<"top"l><"toolbar">rt<"bottom"pi><"clear">',
    ajax: {
        url: "php/Faturamentos/getDadoTabela.php",
        type: "POST",
        data: function ( d ) {
            d.diaInicio = document.getElementById("dataInicio").value;
            d.diaFim = document.getElementById("dataFim").value;
            d.estatus = $('input[name=pago]:checked').val()
            
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
// Apply the search

} );

var tagcenter = "<canvas id='grafico-donut' style='width:800px; height:400px; margin-top:10%;'>Seu navegador não é compatível </canvas>";

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
    document.getElementById('tagCenterChart').innerHTML = "";
    table.ajax.reload();
    document.getElementById('tagCenterChart').innerHTML = tagcenter;
}

function limpar() {
    context.rect(0, 0, canvas.width, canvas.height);
    context.clearRect(0, 0, canvas.width, canvas.height);
    context.fillStyle = 'aliceblue';
    context.fill();
    texture.needsUpdate = true;
}

function dataAtual() {
    var dia = new Date();
    var a = dia.getDate();
    var mes = new Date();
    var b = mes.getMonth() +1;
    var ano = new Date();
    var c = ano.getFullYear();
    if(b < 10){
        var data = c +"-0"+ b+"-"+a;

    }else{
        var data = c +"-"+ b+"-"+a;

    }
    
    document.getElementById('dataInicio').value = data;
}
var httpRequest;

$(document).ready(function(){
    document.getElementById('titulo-pagina').innerHTML="Ajuda";
});

function fazerRequisicao(url,destino){

    document.getElementById(destino).innerHTML = '<center> <img src="img/loader1.gif"/> </center>';

    if(window.XMLHttpRequest){
        httpRequest = new XMLHttpRequest();
    }
    else {
        alert('Erro ao instanciar objeto XMLHttpRequest neste navegador!');
    }

    if(!httpRequest){
        alert('Erro ao instanciar objeto XMLHttpRequest neste navegador!');
        return false;
    }

    httpRequest.onreadystatechange = situacaoRequisicao;

    httpRequest.open('GET', url);
    httpRequest.send();

}

function situacaoRequisicao(){

    if(httpRequest.readyState == 4){
        if(httpRequest.status == 200){
            document.getElementById('tela-ajuda').innerHTML = httpRequest.responseText;
        }
    }
}
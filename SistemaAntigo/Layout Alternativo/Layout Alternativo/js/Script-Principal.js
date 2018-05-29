/*=========================================Ajax com Javascript==================================*/
var httpRequest;

function fazerRequisicao(url,destino,titulo,ativaHome){

    document.getElementById('titulo-pagina').innerHTML=titulo;

    if(ativaHome==1){
        document.getElementById('botao-home').style.display="inline-block";
    }
    else{
        document.getElementById('botao-home').style.display="none";
    }

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
            document.getElementById('corpo-principal').innerHTML = httpRequest.responseText;
        }
    }
}

/*====================================Fim requisição de página========================================*/

/*====================================Ajax Página Help================================================*/

function fazerRequisicaoAjuda(url,destino){

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

    httpRequest.onreadystatechange = situacaoRequisicaoAjuda;

    httpRequest.open('GET', url);
    httpRequest.send();

}

function situacaoRequisicaoAjuda(){

    if(httpRequest.readyState == 4){
        if(httpRequest.status == 200){
            document.getElementById('tela-ajuda').innerHTML = httpRequest.responseText;
        }
    }
}


$(document).ready( function () {
    $('#tabela-contatos').DataTable();
});
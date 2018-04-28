<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Formas &#38; Corpos</title>
  <link rel="icon" href="imagens/favicon.png">
  <!-- Bootstrap -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link href="css/headerFooter.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <header >
      
      <!-- Navegação -->
      
      <nav>
        <div id="barra-superior">
          <div id="paginacao">
            <center>
              <h2 id="titulo-pagina"> Início </h2>
            </center>
          </div>

          <div id="caixa-menu">
            <center>
              <img id="botao-home" src='img/home_menu.png' class="icones-caixaMenu" onmouseover="this.src='img/home_menu-clicked.png'" onmouseout="this.src='img/home_menu.png'" onclick="window.location.href='index.php'"/>
              <img id="botao-contatos" src='img/contatos_menu.png' class="icones-caixaMenu" onmouseover="this.src='img/contatos_menu-clicked.png'" onmouseout="this.src='img/contatos_menu.png'" data-toggle="modal" data-target="#modal-contatos"/>
              <img id="botao-notificacao" src='img/notification_menu.png' class="icones-caixaMenu" onmouseover="this.src='img/notification_menu-clicked.png'" onmouseout="this.src='img/notification_menu.png'"/>
              <img id="help" src='img/help_menu.png' class="icones-caixaMenu" onmouseover="this.src='img/help_menu-clicked.png'" onmouseout="this.src='img/help_menu.png'" onclick="window.location.href='help.php'"/>
            </center>
          </div>
        </div>
      </nav>

    </header>
    
    <div class="modal fade" id="modal-contatos">
            <div class="modal-dialog modal-lg modal-dialog-centered">
              <div class="modal-content">
          
                <!-- Modal Header -->
                <div class="modal-header">
                  <h4 class="modal-title"> Contatos </h4>
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
          
                <!-- Modal body -->
                <div class="modal-body">
                    <table id="tabela-contatos" class="compact stripe hover order-column row-border" width="100%" style="padding:15px;">
                        <thead>
                            <tr>
                              <th>Nome</th>
                              <th>Numero</th>
                              <th>E-Mail</th>
                              <th>Tipo</th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <th> Marco Gomes</th>
                                <th> (24) 9 9771-8822</th>
                                <th> marcoagomes@gmail.com</th>
                                <th> Fornecedor </th>
                            </tr>

                            <tr>
                                <th> Caio Vieira </th>
                                <th> (21) 8 1744-3872</th>
                                <th> rabicadosanjos@gmail.com</th>
                                <th> Fornecedor </th>
                            </tr>

                            <tr>
                                <th> Buzininha Lopes </th>
                                <th> (22) 9 1721-3125</th>
                                <th> jvmunizlopes@gmail.com </th>
                                <th> Cliente </th>
                            </tr>
                        </tbody>

                    </table>
                </div>  
              </div>
            </div>
        </div>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/header.js"> </script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>
    <script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
  </body>
  </html>
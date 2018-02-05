<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Formas e Corpos</title>
    <link rel="icon" href="imagens/favicon.png">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="headerFooter.css" rel="stylesheet">

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
            
            <nav class="navbar navbar-default ">
              
                
                <div class="container" >
                  
                    <div class="navbar-header row">
                      <div class="col-md-6">
                          <a  href="#">
                    
                          <img class="imagem1"  src="LogoFormasECorpos.png" alt="logo">

                            </a>
                        </div>
                      </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="col-md-6">
                <ul class="nav justify-content-center">
                  
                        <li >
                          <div class="dropdown">
  <button class="btn btn-secondary  " type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Produtos
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
    <button value ="cadastrar" class="dropdown-item" type="button" onclick="trocaPagina(this.value)" >Cadastrar</button>
    <button value ="mostrar" class="dropdown-item" type="button" onclick="trocaPagina(this.value)">Consultar</button>
    <button class="dropdown-item" type="button">Something else here</button>
  </div>
</div>
                        </li>
                        <li ><a href="#ABOUT" class="nav-item">Ferramentas</a></li>
                        <li "><a href="#FEATURES" class="nav-item">Features</a></li>
                  </ul>
                 </div>
                </div><!-- /.navbar-collapse -->
              </div><!-- /.container-fluid -->
            </nav>
          </header>
          

    <!-- Include all compiled plugins (below), or include individual files as needed -->
    
  </body>
  <script>
    function trocaPagina(x){
        if(x=="cadastrar"){
          window.location.href ="upload.php"
        }else if(x=="mostrar"){
          window.location.href ="mostrar.php"

        }

    }

  </script>
</html>
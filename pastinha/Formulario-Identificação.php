<!DOCTYPE html>
<html lang="pt-br">
  <head>
    
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Formas &#38; Corpos</title>

    <link rel="icon" href="imagens/favicon.png">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script type="text/javascript" charset="utf8" src="js/jquery.dataTables.min.js"></script>
    
    <script src="js/Formulario.js"></script>
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
 
    
    <link rel="stylesheet" href="css/dataTables.bootstrap.min.css">    
    <link href="CapaMelhorado.css" rel="stylesheet">
    <link rel="stylesheet" href="css/Formulario-Identificação.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body style="overflow-y:scroll;">
    <header>
      <?php
      include 'header.php';
      ?>
    </header>
            <form>
                 <div class="Bloco1">
                        <div align="center" class="ALinhamentoDiv1">
                                <b>Nome:</b>
                                <br>
                                <input class="InputForm"  type="text" ><br>
                                <b>Endereço:</b>
                                <br>

                                <input class="InputForm"  type="text" >
                                <br>
                                <b>Sexo:</b><br>
                                <input type="radio" name="gender" value="Masculino" checked> <b>Masculino</b>
                                <input type="radio" name="gender" value="Feminino"><b> Feminino</b><br>
                                <b>Aniversário:</b>
                                <br>
                                <input class="InputForm"  type="date">
                                <br>
                                <b>Telefone:</b>
                                <br>
                                <input class="InputForm"  type="number">
                                <br>
                                <b>Email:</b>
                                <br>
                                <input class="InputForm"  type="text">
                                <br>
                                <b>Profissão:</b>
                                <br>
                                <input class="InputForm"  type="text">
                                <br>
                        </div>        
                             <div align="center" class="ALinhamentoDiv2">
                                <b>Identificação:</b>
                                <br>
                                <input class="InputForm"  type="text">
                                <br>
                                <b>Médico:</b>
                                <br>
                                <input class="InputForm"  type="text">
                                <br>
                                <b>Queixa principal:</b>
                                <br>
                                <textarea class="InputForm SizeQPrin"></textarea>
                                <br>
                                <b>Contato Médico:</b>
                                <br>
                                <input class="InputForm"  type="number">
                                <br>
                                <br>
                            </div>
                         <div align="center" class="ALinhamentoDiv3">
                            <b>Disfunções Orgânicas:</b><br>
                                <select  class="InputForm">
                                            <option value="Cardiaco">Cardiaco</option>
                                            <option value="MarcaPasso">Marca Passo</option>
                                            <option value="Hipertensao">Hipertensao</option>
                                            <option value="PessaoBaixa">Pressão Baixa</option>
                                            <option value="Hipertireoidismo">Hipertireoidismo</option>
                                            <option value="Trombose">Trombose</option>
                                            <option value="ProblemaUrologico">Problemas Urológicos</option>
                                            <option value="Varizes">Varizes</option>
                                            <option value="Vasos">Vasos</option>
                                            <option value="Asma">Asma</option>
                                            <option value="Neurologico">Neurológico</option>
                                            <option value="Ansiedade">Ansiedade</option>
                                            <option value="Depressao">Depressão</option>
                                            <option value="Alergia">Alergia</option>
                                            <option value="Nervosismo">Nervosismo</option>
                                            <option value="Insonia">Insônia</option>
                                            <option value="Epilepsia">Epilepsia</option>
                                            <option value="Mental">Mental</option>
                                            <option value="AntecedenteOncologico">Antecedente Oncológico</option>
                                            <option value="AlteracaoCutane">Alteração Cutânea</option>
                                            <option value="CistoNodulo">Cisto ou Nódulo</option>
                                            <option value="Diabetes">Diabetes</option>
                                            <option value="Medicacao">Medicação</option>
                                            <option value="CirurgiaRecente">Cirurgia Recente</option>
                                            <option value="TratamentoMedico">Tratamento Médico</option>
                                            <option value="DisfNaoCitada">Disfunção não citada?</option>
                                 </select>
                                </div>
                            </div>
                         </div>
                        <div class="Bloco2">
                            <div align="center" class="ALinhamentoDiv4">
                                     <div><h3>Histório Patológico</h3></div>
                                    <b>Intestino:</b>
                                        <input  type="radio" name="Intestino" value="Normal" ><b>Normal</b>
                                        <input type="radio" name="Intestino" value="Regular" ><b>Regular</b>
                                        <input type="radio" name="Intestino" value="Preguicoso" ><b>Preguiçoso</b>
                                        <br>
                                    <b>Ciclo Menstrual:</b>
                                        <input type="radio" name="CicloMenstrual" value="Regular" checked><b>Regular</b>
                                        <input type="radio" name="CicloMenstrual" value="Irregular" ><b>Irregular</b>
                                        <input type="radio" name="CicloMenstrual" value="Menopausa" ><b>Menopausa</b>
                                        <input type="radio" name="CicloMenstrual" value="Contraceptivo" ><b>Contraceptivo</b>
                                    <br>
                                     <b>Alergia a medicamento:</b>
                                        <input type="radio" name="CicloMenstrual" value="MedYes" ><b>Sim</b>
                                        <input type="radio" name="CicloMenstrual" value="MedNo" ><b>Não</b> 
                                    <br>
                                    <b>Lentes de contato:</b>
                                        <input type="radio" name="CicloMenstrual" value="LenteYes" checked><b>Sim</b>
                                        <input type="radio" name="CicloMenstrual" value="LenteNo" ><b>Não</b>
                                    <br>
                            </div>        
                            <div align="center" class="ALinhamentoDiv5">
                                    <div><h3>Histórico Social</h3></div>
                                    <b>Atividade Física:</b>
                                        <input type="radio" name="AtiviFisica" value="AtiviYes" checked><b>Sim</b>
                                        <input type="radio" name="AtiviFisica" value="AtiviNo" ><b>No</b>
                                    <br>
                                    <b>Alimentação:</b>
                                        <input type="radio" name="Alimentacao" value="AliRegular" checked><b>Regular</b>
                                        <input type="radio" name="Alimentacao" value="AliIrreRegular" ><b>Irregular</b>
                                        <input type="radio" name="Alimentacao" value="AliDieta" ><b>Dieta</b>
                                    <br>
                                    <b>Digestão:</b>
                                        <input type="radio" name="Digestao" value="DigestaoRegular" checked><b>Regular</b>
                                        <input type="radio" name="Digestao" value="DigestaoIrregular" ><b>Irregular</b>
                                    <br>
                                    <b>Tabagismo:</b>
                                        <input type="radio" name="Tabagismo" value="Fumante" checked><b>Fumante</b>
                                        <input type="radio" name="Tabagismo" value="NaoFumante" ><b>Não Fumante</b>
                                        <input type="radio" name="Tabagismo" value="ExFumante" ><b>Ex-Fumante</b>
                                    <br>
                                    <b>Exposição ao sol:</b>
                                        <input type="radio" name="ExpoSol" value="ExpoSolYes" checked><b>Sim</b>
                                        <input type="radio" name="ExpoSol" value="ExpoSolNo" ><b>Não</b>
                                    <br>
                                     <b>Lava o rosto diariamente:</b>
                                        <input type="radio" name="LavaRostoDia" value="RostoLavaYes" checked><b>Sim</b>
                                        <input type="radio" name="LavaRostoDia" value="RostoLavaNo" ><b>Não</b>
                                    <br>
                                     <b>Existe metal no corpo:</b>
                                        <input type="radio" name="MetalCorpo" value="MetalCorpoYes" checked><b>Sim</b>
                                        <input type="radio" name="MetalCorpo" value="MetalCorpoNo" ><b>Não</b>
                                    <br>
                                    <b>Faz tratamento estético:</b>
                                        <input type="radio" name="FazTrataEstetico" value="FazTrataYes" checked><b>Sim</b>
                                        <input type="radio" name="FazTrataEstetico" value="FazTrataNo" ><b>Não</b>
                                    <br><br>
                                     <b>Gostaria de mencionar algo:</b>
                                    <br>
                                    <input class="InputForm" name="MencaoAlgoDiferente"  type="text">
                                    <br>
                                    <b>Como está se sentindo:</b>
                                    <br>
                                    <input class="InputForm" name="HowDoYouFeel"  type="text">
                                </div>
                        </div>
                        <div class="Bloco3">
                                <div align="center" class="ALinhamentoDiv6">
                                    <div align="center"><h3>Análise de Pele</h3></div>
                                        <b>Fototipo:</b>
                                            <input type="radio" name="CorPele" value="Branca" checked><b>Branca</b>
                                            <input type="radio" name="CorPele" value="MorenaClara" checked><b>Morena Clara</b>
                                            <input type="radio" name="CorPele" value="MorenaModerada" ><b>Morena Moderada</b>
                                            <input type="radio" name="CorPele" value="MorenaEscura" ><b>Morena Escura</b>
                                            <input type="radio" name="CorPele" value="CorNegra" ><b>Negra</b>
                                            <input type="radio" name="CorPele" value="CorOutros" ><b>Outros</b>
                                            <br>
                                        <b>Coloração:</b>
                                            <input type="radio" name="ColoracaoPele" value="ColPalida" checked><b>Pálida</b>
                                             <input type="radio" name="ColoracaoPele" value="ColVermelha"><b>Vermelha</b>
                                              <input type="radio" name="ColoracaoPele" value="ColCianotica"><b>Cianótica</b>
                                               <input type="radio" name="ColoracaoPele" value="ColAmarelada"><b>Amarelada</b>
                                            <br>
                                            <b>Desitratação:</b>
                                                <input type="radio" name="DesiPele" value="DesiSuperficial" checked><b>Superficial</b>
                                                 <input type="radio" name="DesiPele" value="DesiProfunda"><b>Profunda</b>
                                                  <input type="radio" name="DesiPele" value="DesiNormal"><b>Hidratação Normal</b>
                                            <br>
                                             <b>Óstio:</b>
                                                <input type="radio" name="Ostios" value="OstioImpe" checked><b>Imperceptíveis</b>
                                                 <input type="radio" name="Ostios" value="OstioDilataddo"><b>Dilatado</b>
                                            <br>
                                             <b>Tipo cutâneo sub-classificação:</b>
                                                <input type="radio" name="TipoSubCutanio" value="CutaNormal" checked><b>Eudérmica/Normal</b>
                                                <input type="radio" name="TipoSubCutanio" value="CutaLipidica"><b>Lipídica</b>
                                                <input type="radio" name="TipoSubCutanio" value="CutaAlipidica"><b>Alipídica</b>
                                                 <input type="radio" name="TipoSubCutanio" value="CutaMista"><b>Mista</b>
                                                  <input type="radio" name="TipoSubCutanio" value="CutaSeborreica"><b>Seborreica</b>
                                                   <input type="radio" name="TipoSubCutanio" value="CutaSensivel"><b>Sensível</b>
                                                    <input type="radio" name="TipoSubCutanio" value="CutaAtona"><b>Átona</b>
                                                    <input type="radio" name="TipoSubCutanio" value="CutaEdermaciada"><b>Edermaciada</b>
                                                    <input type="radio" name="TipoSubCutanio" value="CutaAsfictiva"><b>Asfictíva</b>
                                                    <input type="radio" name="TipoSubCutanio" value="CutaRosacea"><b>Rosácea</b>
                                            <br>
                                                <b>Grau de Oleosidade:</b>
                                                    <input type="radio" name="GrauOleo" value="OleoAumentado" checked><b>Aumentado</b>
                                                    <input type="radio" name="GrauOleo" value="OleoEquilibrado"><b>Equilibrado</b>
                                                    <input type="radio" name="GrauOleo" value="OleoExcessivo"><b>Excessivo</b>
                                            <br>
                                             <b>Pele com Acne:</b>
                                                    <input type="radio" name="GrauAcne" value="AcneComedogenica" checked><b>Grau 1 - Comedogênica</b>
                                                    <input type="radio" name="GrauAcne" value="AcnePustulosa"><b>Grau 2 - Pápio pustulosa</b>
                                                    <input type="radio" name="GrauAcne" value="AcneNoCistica"><b>Grau 3 - Nódulo Cística</b>
                                                    <input type="radio" name="GrauAcne" value="AcneConglobata"><b>Grau 4 - Conglobata</b>
                                                    <input type="radio" name="GrauAcne" value="AcneComedoes"><b>Comedões</b>
                                                    <input type="radio" name="GrauAcne" value="AcnePapulas"><b>Papulas</b>
                                                    <input type="radio" name="GrauAcne" value="AcnePustulas"><b>Pústulas</b>
                                                    <input type="radio" name="GrauAcne" value="AcneCistos"><b>Cistos</b>
                                                    <input type="radio" name="GrauAcne" value="AcneAbcessos"><b>Abcessos</b>
                                            <br>
                                            <b>Involução cutânea:</b>
                                                    <input type="radio" name="InvoCut" value="InvoLinhas" checked><b>Linhas</b>
                                                     <input type="radio" name="InvoCut" value="InvoSulcos"><b>Sulcos</b>
                                            <br>
                                             <b>Hipotonia:</b>
                                                    <input type="radio" name="Hipotonia" value="HipoNasegeniana" checked><b>Região Nasageniana</b>
                                                     <input type="radio" name="Hipotonia" value="HipoSubmentoniana"><b>Região Submentoniana</b>
                                                     <input type="radio" name="Hipotonia" value="HipoPesc"><b>Pescoço</b>
                                            <br>
                                            <b>Tricose:</b>
                                                    <input type="radio" name="Tricose" value="TricoseHiper" checked><b>Hipertricose</b>
                                                    <input type="radio" name="Tricose" value="TricoseFoliculite"><b>Foliculite</b>
                                                    <input type="radio" name="Tricose" value="TricoseHirsutismo"><b>Hirsutismo</b>
                                            <br>
                                             <b>Cicatrizes\Sequelas:</b>
                                                    <input type="radio" name="Sequelas" value="SeqHipertrofica" checked><b>Hipertrófica</b>
                                                    <input type="radio" name="Sequelas" value="SeqHipotrofica"><b>Hipotrófica</b>
                                                    <input type="radio" name="Sequelas" value="SeqQueloide" ><b>Quéloide</b>
                                            <br>
                                </div>
                        </div> 
                         <div class="Bloco4">
                                <div align="center" class="ALinhamentoDiv7">
                                    <div align="center"><h3>Alteração na cor\Lesões dermatológicas</h3></div>
                                        <b>Vásculo sanguínea:</b>
                                                <input type="radio" name="VasculoSanguinea" value="VasculoNervo" ><b>Nervo Vascular</b>
                                                <input type="radio" name="VasculoSanguinea" value="VasculoTelangiectasias" ><b>Telangiectasias</b>
                                                <input type="radio" name="VasculoSanguinea" value="VasculoCouperose" ><b>Couperose</b>
                                                <input type="radio" name="VasculoSanguinea" value="VasculoCianose" ><b>Cianose</b>
                                                <input type="radio" name="VasculoSanguinea" value="VasculoNevAnemico" ><b>Nervo Anêmico</b>
                                                <input type="radio" name="VasculoSanguinea" value="VasculoEritema" ><b>Eritema</b>
                                            <br>
                                            <b>Mancha purpúrica:</b>
                                                <input type="radio" name="ManchaPurpurica" value="MPUVibice"><b>Vibice</b>
                                                <input type="radio" name="ManchaPurpurica" value="MPUEquimose"><b>Equimose</b>
                                                <input type="radio" name="ManchaPurpurica" value="MPUPetequia"><b>Petéquia</b>
                                                <input type="radio" name="ManchaPurpurica" value="MPUHematoma"><b>Hematoma</b>
                                            <br>
                                            <b>Mancha pigmentada:</b>
                                                <input type="radio" name="ManchaPigmentada" value="MPIAcromica"><b>Acrômica</b>
                                                <input type="radio" name="ManchaPigmentada" value="MPIHipocromica"><b>Hipocrômica</b>
                                                <input type="radio" name="ManchaPigmentada" value="MPIHipercromica"><b>Hipercrômica</b>
                                            <br>
                                            <b>Melanodêrmica:</b>
                                                <input type="radio" name="Melanodermica" value="MelanoEfelides"><b>Efélides</b>
                                                <input type="radio" name="Melanodermica" value="MelanoMelasma"><b>Melasma</b>
                                                <input type="radio" name="Melanodermica" value="MelanoCloasma"><b>Cloasma</b>
                                                <input type="radio" name="Melanodermica" value="MelanoPeriorbicular"><b>Melanose Periorbicular</b>
                                                <input type="radio" name="Melanodermica" value="MelanoMelanocito"><b>Nervo Melanócito</b>
                                            <br>
                                            <b>Não Melanodêrmica:</b>
                                                <input type="radio" name="NoMelanodermica" value="NoMelanoTatuagem"><b>Tatuagem</b>
                                                <input type="radio" name="NoMelanodermica" value="NoMelanoMicro"><b>Micropigmentação</b>
                                            <br>
                                            <b>Lesões sólidas:</b>
                                                <input type="radio" name="LesaoSolida" value="LesaoPapula"><b>Pápula</b>
                                                <input type="radio" name="LesaoSolida" value="LesaoNodulos"><b>Nódulos</b>
                                                <input type="radio" name="LesaoSolida" value="LesaoCeratose"><b>Ceratose</b>
                                                <input type="radio" name="LesaoSolida" value="LesaoPapiloma"><b>Papiloma</b>
                                                <input type="radio" name="LesaoSolida" value="LesaoSiríngoma"><b>Siríngoma</b>
                                                <input type="radio" name="LesaoSolida" value="LesaoComedao"><b>Comedão</b>
                                                <input type="radio" name="LesaoSolida" value="LesaoVegetacao"><b>Vegetação</b>
                                                <input type="radio" name="LesaoSolida" value="LesaoDerPapNigra"><b>Der Pap Nigra</b>
                                                <input type="radio" name="LesaoSolida" value="LesaoMillium"><b>Millium</b>
                                            <br>
                                            <b>Lesões líquidas:</b>
                                                <input type="radio" name="LesaoSolida" value="LesaoAbcesso"><b>Abcesso</b>
                                                <input type="radio" name="LesaoSolida" value="LesaoCisto"><b>Cisto</b>
                                                <input type="radio" name="LesaoSolida" value="LesaoVesicula"><b>Vesícula</b>
                                                <input type="radio" name="LesaoSolida" value="LesaoPustula"><b>Pústula</b>
                                                <input type="radio" name="LesaoSolida" value="LesaoBolha"><b>Bolha</b>
                                            <br>
                                            <b>Lesões líquidas:</b>
                                                <input type="radio" name="OutrasLesoes" value="LesaoEscamas"><b>Escamas</b>
                                                <input type="radio" name="OutrasLesoes" value="LesaoCrosta"><b>Crosta</b>
                                                <input type="radio" name="OutrasLesoes" value="LesaoFotodermatose"><b>Fotodermatose</b>
                                                <input type="radio" name="OutrasLesoes" value="LesaoNaoIdentificada"><b>Não Identificada</b>
                                            <br>
                                </div>
                        </div>
                         <div class="Bloco5">
                                <div align="center" class="ALinhamentoDiv8">
                                    <div align="center"><h3>Indicação de Tratamento:</h3></div>
                                        <b>Tipo de tratamento:</b>
                                            <input class="InputForm" type="text" name="TipoTratamento">
                                        <br>
                                        <b>Número sessões:</b>
                                            <input class="InputForm" type="number" name="NumSessoes">
                                        <br>
                                        <b>Frequencia Semanal:</b>
                                            <input class="InputForm" type="number" name="FreqSemanal">
                                        <br>
                                        <b>Plano:</b>
                                                <input type="radio" name="Plano" value="PlanoSemanal"><b>Semanal</b>
                                                <input type="radio" name="Plano" value="PlanoMensal"><b>Mensal</b>
                                                <input type="radio" name="Plano" value="PlanoTrimestral"><b>Trimestral</b>
                                                <input type="radio" name="Plano" value="PlanoSemestral"><b>Semestral</b>
                                                <input type="radio" name="Plano" value="PlanoAnual"><b>Anual</b>
                                        <br>
                                        <b>Para melhor eficácia recomendamos que:</b>
                                            <input class="InputForm" type="text" name="EficaRecomendacao">
                                        
                                </div>
                        </div>
                        <div class="Bloco6">
                            <div align="center" class="ALinhamentoDiv9">
                                <div style="margin-left: 10px;">
                                    <button  class="Botao" type="button">Salvar</button>
                                    <button type="button" class="Botao" data-toggle="modal" data-target="#myModal">Procurar</button>
                                    <button class="Botao" type="button">Excluir</button>
                                    <button class="BackToTop"><i class="fas fa-angle-up"></i></button>
                                </div>
                            </div>                     
                </form>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>
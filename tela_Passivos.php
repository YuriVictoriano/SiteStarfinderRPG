<?php 
require("./funcoes.php");
conectar();
$reg_pontos=motherbase_pontos();
$reg_propriedades=motherbase_propriedades();
$nv_tripulacao=round($reg_propriedades['tripulacao_total']*(1+$reg_pontos['pontos_treinamento']*0.1+$reg_pontos['pontos_equipamentos']*0.2)-$reg_pontos['pontos_ilegal']);

{ /*checkbox*/
    for ($cont=1;$cont<=30; $cont++) {
        $v_check[$cont]=checar($cont);
      }
}

global $link;
$reg_propriedades=motherbase_propriedades($link);

?>
<!DOCTYPE html>
<head>   
<title>Sistema de Missões</title>
<meta charset='UTF-8'>
<link rel='stylesheet' type='text/css' href='./estilo.css'>
<Style>
    body { 
        background-image: url('imgs/img_fundo6.jpg');
    box-shadow: inset 0px 0px 100px 10px rgb(0 0 0 / 95%);
    background-size:cover;
    
}
a {
    text-decoration: none; 
    color: aliceblue;
    }
.botao10{
    font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
 font-size: 32px;
 color: rgb(255, 255, 255);
  background-image: linear-gradient(to bottom, #000000b0, #000000c0, #02070ee0);
  border: 10px;
  margin-top: 10px;
 cursor: pointer;
 display: inline-block;
 box-shadow: inset 0px 0px 100px 10px rgb(0 0 0 / 95%);
 
}
</Style>

</head>
<body>
   <!-- <div style="background-color:#052a56af;margin: 0 0; height: 10px;"></div>     <img src='imgs/starfinderLogo2.png' style="margin: 4px 25px; height: 30px;">  -->
        <br><br><br><div style="background-image:linear-gradient(to bottom, #040d3d9d, #020930ad, #030e4b9d); margin-bottom: 25px; height: auto; padding: 10px;">
            
            
            <a href='./index.html' style="text-decoration: none; color: aliceblue; margin: 25px;">Início </a>
            <a href='./missoes.html' style="text-decoration: none; color: aliceblue; margin-right: 25px;">Missões </a>
            <a href='./motherbase.php' style="text-decoration: none; color: aliceblue; margin-right: 25px;">Mother Base </a>
            <a href='./tela_Passivos.php' style='text-decoration: none; color: aliceblue; margin-right: 25px;'>Efeitos Passivos </a>
            
        </div> 
<div style="width: 100%; ">
<center>
    <table>
<tr><td>
    <div style="background-image:linear-gradient(to bottom, #000000a2, #020930ad, #030e4b9d);
     margin: 0% 20%; box-shadow: 0 50px 100px 0 rgba(0, 102, 255, 0.349), 0 26px 20px 0 rgba(5, 28, 104, 0.19);  "><br>       
        <center> 
            
        <table border="3" style='width: 95%;
         border-radius: 6px; 
         border-style: solid;
          border-spacing: 0px;
          border: 5px solid rgb(0, 0, 0);
          border-block: solid #102479;
          border-right-color: #102479;
          border-left-color: #102479;'>
            <tr><a href='./index.html'><img src='imgs/banner.png' style="width: 100%; "></a></tr>
            <tr><h1 style='width: 100%; cursor:default; font-size: 32px; border-radius: 0%; '>Efeitos Passivos   
            <form action='./tela_Transicao.php' method='GET'>    
            <input type='hidden' name='tela' value='tela_Passivos'>
            <button type='submit' value='1' name='btenvio' class='botao10' style='font-size: 16px; height: 38px; width: 100px;' onclick="history.go(0)">&#x2714;</button></h1> </tr>
                <tr>
                    <td>Descrição</td> <td>Requisitos</td> <td style="width: 40px;">Status</td>
                </tr>
                <tr <?php print("$v_check[1]") ?>>
                    <td><a href="#Asas de Bronze I">Asas de Bronze I</a></td> <td><div class='tooltip'> NVTR 20 Recrutamento 2
                            <span class='tooltiptext'> <?php print("Atualmente: NVTR $nv_tripulacao Recrutamento $reg_pontos[pontos_recrutamento]"); ?></span>
                                </div></td> <td><div>
  <label class="switch">
      <input type="checkbox" value="1" name="1" <?php print("$v_check[1]") ?>>
      <span class="slider"></span>
</div></td>
                </tr>
                <tr <?php print("$v_check[2]") ?>>
                    <td><a href="#Asas de Bronze II"  <?php print("$v_check[2]") ?>>Asas de Bronze II</a></td> <td><div class='tooltip'> NVTR 30 Recrutamento 3
                            <span class='tooltiptext'> <?php print("Atualmente: NVTR $nv_tripulacao Recrutamento $reg_pontos[pontos_recrutamento]"); ?></span>
                                </div></td> <td><div>
  <label class="switch">
      <input type="checkbox" value="2" name="2"   <?php print("$v_check[2]") ?>>
      <span class="slider"></span>
</div></td>
                </tr>
                <tr <?php print("$v_check[3]") ?>>
                    <td><a href="#Asas de Bronze III">Asas de  Bronze III</a></td> <td>
                        <div class='tooltip'> NVTR 40  Recrutamento 4
                            <span class='tooltiptext'> <?php print("Atualmente: NVTR $nv_tripulacao Recrutamento $reg_pontos[pontos_recrutamento]"); ?></span>
                                </div></td> <td><div>
  <label class="switch">
      <input type="checkbox" value="3" name="3"   <?php print("$v_check[3]") ?>>
      <span class="slider"></span>
</div></td>
                </tr>
                <tr <?php print("$v_check[4]") ?>>
                    <td><a href="#Asas de Prata">Asas de Prata</a></td> <td><div class='tooltip'>NVTR 40 Asas de Bronze III Recrutamento 4
                            <span class='tooltiptext'> <?php print("Atualmente: NVTR $nv_tripulacao Recrutamento $reg_pontos[pontos_recrutamento]"); ?></span>
                                </div></td> <td><div>
  <label class="switch">
      <input type="checkbox" value="4" name="4"   <?php print("$v_check[4]") ?>>
      <span class="slider"></span>
</div></td>
                </tr>
                <tr <?php print("$v_check[5]") ?>>
                    <td ><a href="#Asas de Ouro">Asas de Ouro</a></td> <td><div class='tooltip'>NVTR 45 Asas de Prata Recrutamento 5
                            <span class='tooltiptext'> <?php print("Atualmente: NVTR $nv_tripulacao Recrutamento $reg_pontos[pontos_recrutamento]"); ?></span>
                                </div></td> <td><div>
  <label class="switch">
      <input type="checkbox" value="5" name="5"   <?php print("$v_check[5]") ?>>
      <span class="slider"></span>
</div></td>
                </tr>
                <tr <?php print("$v_check[6]") ?>>
                    <td><a href="#Esquadrão de Cavalaria I">Esquadrão de Cavalaria I</a></td> <td><div class='tooltip'>NVTR 30 Treinamento 2 Equipamento 1
                            <span class='tooltiptext'> <?php print("Atualmente: NVTR $nv_tripulacao Treinamento $reg_pontos[pontos_treinamento] Equipamento $reg_pontos[pontos_equipamentos]"); ?></span>
                                </div></td> <td><div>
  <label class="switch">
      <input type="checkbox" value="6" name="6"   <?php print("$v_check[6]") ?>>
      <span class="slider"></span>
</div></td>
                </tr>
                <tr <?php print("$v_check[7]") ?>>
                    <td  ><a href="#Esquadrão de Cavalaria II">Esquadrão de Cavalaria II</a></td> <td><div class='tooltip'>NVTR 35 Treinamento 3 Equipamento 2
                            <span class='tooltiptext'> <?php print("Atualmente: NVTR $nv_tripulacao Treinamento $reg_pontos[pontos_treinamento] Equipamento $reg_pontos[pontos_equipamentos]"); ?></span>
                                </div></td> <td><div>
  <label class="switch">
      <input type="checkbox" value="7" name="7"   <?php print("$v_check[7]") ?>>
      <span class="slider"></span>
</div></td>
                </tr>
                <tr <?php print("$v_check[8]") ?>>
                    <td><a href="#Esquadrão de Cavalaria III">Esquadrão de Cavalaria III</a></td> <td><div class='tooltip'> NVTR 40 Treinamento 4 Equipamento 3
                            <span class='tooltiptext'> <?php print("Atualmente: NVTR $nv_tripulacao Treinamento $reg_pontos[pontos_treinamento] Equipamento $reg_pontos[pontos_equipamentos]"); ?></span>
                                </div></td> <td><div>
  <label class="switch">
      <input type="checkbox" value="8" name="8"   <?php print("$v_check[8]") ?>>
      <span class="slider"></span>
</div></td>
                </tr>
                <tr <?php print("$v_check[9]") ?>>
                    <td><a href="#Esquadrão de Elite">Esquadrão de Elite</a></td> <td><div class='tooltip'>NVTR 40 Treinamento 5 Equipamento 3
                            <span class='tooltiptext'> <?php print("Atualmente: NVTR $nv_tripulacao Treinamento $reg_pontos[pontos_treinamento] Equipamento $reg_pontos[pontos_equipamentos]"); ?></span>
                                </div></td> <td><div>
  <label class="switch">
      <input type="checkbox" value="9" name="9"   <?php print("$v_check[9]") ?>>
      <span class="slider"></span>
</div></td>
                </tr>
                <tr <?php print("$v_check[10]") ?>>
                    <td><a href="#Esquadrão de Nave I">Esquadrão de Nave I</a></td> <td><div class='tooltip'>NVTR 30 Treinamento 2 Equipamento 2
                            <span class='tooltiptext'> <?php print("Atualmente: NVTR $nv_tripulacao Treinamento $reg_pontos[pontos_treinamento] Equipamento $reg_pontos[pontos_equipamentos]"); ?></span>
                                </div></td> <td><div>
  <label class="switch">
      <input type="checkbox" value="10" name="10"   <?php print("$v_check[10]") ?>>
      <span class="slider"></span>
</div></td>
                </tr>
                <tr  <?php print("$v_check[11]") ?>>
                    <td><a href="#Esquadrão de Nave II">Esquadrão de Nave II</a></td> <td><div class='tooltip'>NVTR 35 Treinamento 3 Equipamento 3
                            <span class='tooltiptext'> <?php print("Atualmente: NVTR $nv_tripulacao Treinamento $reg_pontos[pontos_treinamento] Equipamento $reg_pontos[pontos_equipamentos]"); ?></span>
                                </div></td> <td><div>
  <label class="switch">
      <input type="checkbox" value="11" name="11"   <?php print("$v_check[11]") ?>>
      <span class="slider"></span>
</div></td>
                </tr>
                <tr  <?php print("$v_check[12]") ?>>
                    <td><a href="#Esquadrão de Nave III">Esquadrão de Nave III</a></td> <td><div class='tooltip'>NVTR 40 Treinamento 4 Equipamento 4
                            <span class='tooltiptext'> <?php print("Atualmente: NVTR $nv_tripulacao Treinamento $reg_pontos[pontos_treinamento] Equipamento $reg_pontos[pontos_equipamentos]"); ?></span>
                                </div></td> <td><div>
  <label class="switch">
      <input type="checkbox" value="12" name="12"   <?php print("$v_check[12]") ?>>
      <span class="slider"></span>
</div></td>
                </tr>
                <tr <?php print("$v_check[13]") ?>>
                    <td><a href="#Esquadrão de Reconhecimento I">Esquadrão de Reconhecimento I</a></td> <td><div class='tooltip'>NVTR 20 Treinamento 1 Equipamento 1
                            <span class='tooltiptext'> <?php print("Atualmente: NVTR $nv_tripulacao Treinamento $reg_pontos[pontos_treinamento] Equipamento $reg_pontos[pontos_equipamentos]"); ?></span>
                                </div></td> <td><div>
  <label class="switch">
      <input type="checkbox" value="13" name="13"   <?php print("$v_check[13]") ?>>
      <span class="slider"></span>
</div></td>
                </tr>
                <tr <?php print("$v_check[14]") ?>>
                    <td><a href="#Esquadrão de Reconhecimento II">Esquadrão de Reconhecimento II</a></td> <td><div class='tooltip'>NVTR 30 Treinamento 2 Equipamento 2
                            <span class='tooltiptext'> <?php print("Atualmente: NVTR $nv_tripulacao Treinamento $reg_pontos[pontos_treinamento] Equipamento $reg_pontos[pontos_equipamentos]"); ?></span>
                                </div></td> <td><div>
  <label class="switch">
      <input type="checkbox" value="14" name="14"   <?php print("$v_check[14]") ?>>
      <span class="slider"></span>
</div></td>
                </tr>
                <tr <?php print("$v_check[15]") ?>>
                    <td><a href="#Esquadrão de Reconhecimento III">Esquadrão de Reconhecimento III</a></td> <td><div class='tooltip'>NVTR 40 Treinamento 3 Equipamento 3
                            <span class='tooltiptext'> <?php print("Atualmente: NVTR $nv_tripulacao Treinamento $reg_pontos[pontos_treinamento] Equipamento $reg_pontos[pontos_equipamentos]"); ?></span>
                                </div></td> <td><div>
  <label class="switch">
      <input type="checkbox" value="15" name="15"   <?php print("$v_check[15]") ?>>
      <span class="slider"></span>
</div></td>
                </tr>
                <tr  <?php print("$v_check[16]") ?>>
                    <td><a href="#Esquadrão de Suporte I">Esquadrão de Suporte I</a></td> <td><div class='tooltip'>NVTR 20 Treinamento 1 Equipamento 2
                            <span class='tooltiptext'> <?php print("Atualmente: NVTR $nv_tripulacao Treinamento $reg_pontos[pontos_treinamento] Equipamento $reg_pontos[pontos_equipamentos]"); ?></span>
                                </div></td> <td><div>
  <label class="switch">
      <input type="checkbox" value="16" name="16"   <?php print("$v_check[16]") ?>>
      <span class="slider"></span>
</div></td>
                </tr>
                <tr <?php print("$v_check[17]") ?>>
                    <td><a href="#Esquadrão de Suporte II">Esquadrão de Suporte II</a></td> <td><div class='tooltip'>NVTR 25 Treinamento 2 Equipamento 3
                            <span class='tooltiptext'> <?php print("Atualmente: NVTR $nv_tripulacao Treinamento $reg_pontos[pontos_treinamento] Equipamento $reg_pontos[pontos_equipamentos]"); ?></span>
                                </div></td> <td><div>
  <label class="switch">
      <input type="checkbox" value="17" name="17"   <?php print("$v_check[17]") ?>>
      <span class="slider"></span>
</div></td>
                </tr>
                <tr <?php print("$v_check[18]") ?>>
                    <td><a href="#Esquadrão de Suporte III">Esquadrão de Suporte III</a></td> <td><div class='tooltip'>NVTR 30 Treinamento 3 Equipamento 4
                            <span class='tooltiptext'> <?php print("Atualmente: NVTR $nv_tripulacao Treinamento $reg_pontos[pontos_treinamento] Equipamento $reg_pontos[pontos_equipamentos]"); ?></span>
                                </div></td> <td><div>
  <label class="switch">
      <input type="checkbox" value="18" name="18"   <?php print("$v_check[18]") ?>>
      <span class="slider"></span>
</div></td>
                </tr>
                <tr <?php print("$v_check[19]") ?>>
                    <td><a href="#Frota I">Frota I</a></td> <td><div class='tooltip'>NVTR 30 Asas de Bronze I Treinamento 2
                            <span class='tooltiptext'> <?php print("Atualmente: NVTR $nv_tripulacao Treinamento $reg_pontos[pontos_treinamento]"); ?></span>
                                </div></td> <td><div>
  <label class="switch">
      <input type="checkbox" value="19" name="19"   <?php print("$v_check[19]") ?>>
      <span class="slider"></span>
</div></td>
                </tr>
                <tr <?php print("$v_check[20]") ?>>
                    <td><a href="#Frota II">Frota II</a></td> <td><div class='tooltip'>NVTR 40 Asas de Prata Treinamento 3
                            <span class='tooltiptext'> <?php print("Atualmente: NVTR $nv_tripulacao Treinamento $reg_pontos[pontos_treinamento]"); ?></span>
                                </div></td> <td><div>
  <label class="switch">
      <input type="checkbox" value="20" name="20"   <?php print("$v_check[20]") ?>>
      <span class="slider"></span>
</div></td>
                </tr>
                <tr <?php print("$v_check[21]") ?>>
                    <td><a href="#Frota III">Frota III</a></td> <td><div class='tooltip'>NVTR 50 Asas de Ouro Treinamento 4
                            <span class='tooltiptext'> <?php print("Atualmente: NVTR $nv_tripulacao Treinamento $reg_pontos[pontos_treinamento]"); ?></span>
                                </div></td> <td><div>
  <label class="switch">
      <input type="checkbox" value="21" name="21"   <?php print("$v_check[21]") ?>>
      <span class="slider"></span>
</div></td>
                </tr>
                <tr  <?php print("$v_check[22]") ?>>
                    <td><a href="#Lingua de Ouro I">Lingua de Ouro I</a></td> <td><div class='tooltip'>NVTR 20 Comércio 1
                            <span class='tooltiptext'> <?php print("Atualmente: NVTR $nv_tripulacao Comércio $reg_pontos[pontos_comercio]"); ?></span>
                                </div></td> <td><div>
  <label class="switch">
      <input type="checkbox" value="22" name="22"   <?php print("$v_check[22]") ?>>
      <span class="slider"></span>
</div></td>
                </tr>
                <tr <?php print("$v_check[23]") ?>>
                    <td><a href="#Lingua de Ouro II">Lingua de Ouro II</a></td> <td><div class='tooltip'>NVTR 30 Comércio 3
                            <span class='tooltiptext'> <?php print("Atualmente: NVTR $nv_tripulacao Comércio $reg_pontos[pontos_comercio]"); ?></span>
                                </div></td> <td><div>
  <label class="switch">
      <input type="checkbox" value="23" name="23"   <?php print("$v_check[23]") ?>>
      <span class="slider"></span>
</div></td>
                </tr>
                <tr <?php print("$v_check[24]") ?>>
                    <td><a href="#Lingua de Ouro III">Lingua de Ouro III</a></td> <td><div class='tooltip'>NVTR 40 Comércio 5
                            <span class='tooltiptext'> <?php print("Atualmente: NVTR $nv_tripulacao Comércio $reg_pontos[pontos_comercio]"); ?></span>
                                </div></td> <td><div>
  <label class="switch">
      <input type="checkbox" value="24" name="24"   <?php print("$v_check[24]") ?>>
      <span class="slider"></span>
</div></td>
                </tr>
                <tr  <?php print("$v_check[25]") ?>>
                    <td><a href="#Lingua de Ouro IV">Lingua de Ouro IV</a></td> <td><div class='tooltip'>NVTR 50 Comércio 7
                            <span class='tooltiptext'> <?php print("Atualmente: NVTR $nv_tripulacao Comércio $reg_pontos[pontos_comercio]"); ?></span>
                                </div></td> <td><div>
  <label class="switch">
      <input type="checkbox" value="25" name="25"   <?php print("$v_check[25]") ?>>
      <span class="slider"></span>
</div></td>
                </tr>
                <tr  <?php print("$v_check[26]") ?>>
                    <td><a href="#Recrutamento de Tripulação">Recrutamento de Tripulação</a></td> <td><div class='tooltip'>NVTR 0 Recrutamento 1<span class='tooltiptext'> <?php print("Atualmente: NVTR $nv_tripulacao Recrutamento $reg_pontos[pontos_recrutamento]"); ?></span>
                                </div></td> <td><div>
  <label class="switch">
      <input type="checkbox" value="26" name="26"   <?php print("$v_check[26]") ?>>
      <span class="slider"></span>
</div></td>
                </tr>
                <tr <?php print("$v_check[27]") ?>>
                    <td><a href="#Workshop I">Workshop I</a></td> <td><div class='tooltip'>NVTR 15 Fabricação 1
                            <span class='tooltiptext'> <?php print("Atualmente: NVTR $nv_tripulacao Fabricação $reg_pontos[pontos_fabricacao]"); ?></span>
                                </div></td> <td><div>
  <label class="switch">
      <input type="checkbox" value="27" name="27"   <?php print("$v_check[27]") ?>>
      <span class="slider"></span>
</div></td>
                </tr>
                <tr <?php print("$v_check[28]") ?>>
                    <td><a href="#Workshop II">Workshop II</a></td> <td><div class='tooltip'>NVTR 25 Fabricação 3
                            <span class='tooltiptext'> <?php print("Atualmente: NVTR $nv_tripulacao Fabricação $reg_pontos[pontos_fabricacao]"); ?></span>
                                </div></td> <td><div>
  <label class="switch">
      <input type="checkbox" value="28" name="28"   <?php print("$v_check[28]") ?>>
      <span class="slider"></span>
</div></td>
                </tr>
                <tr <?php print("$v_check[29]") ?>>
                    <td><a href="#Workshop III">Workshop III</a></td> <td><div class='tooltip'>NVTR 35 Fabricação 5
                            <span class='tooltiptext'> <?php print("Atualmente: NVTR $nv_tripulacao Fabricação $reg_pontos[pontos_fabricacao]"); ?></span>
                                </div></td> <td><div>
  <label class="switch">
      <input type="checkbox" value="29" name="29"   <?php print("$v_check[29]") ?>>
      <span class="slider"></span>
</div></td>
                </tr>
                <tr <?php print("$v_check[30]") ?>>
                    <td><a href="#Workshop IV">Workshop IV</a></td> <td><div class='tooltip'>NVTR 45 Fabricação 7
                            <span class='tooltiptext'> <?php print("Atualmente: NVTR $nv_tripulacao Fabricação $reg_pontos[pontos_fabricacao]"); ?></span>
                                </div></td> <td><div>
  <label class="switch">
      <input type="checkbox" value="30" name="30"   <?php print("$v_check[30]") ?>>
      <span class="slider"></span>
</div></td>
                </tr>
        </table><br>
    </form>
</center> 

<!-- ------------- 2° Seção --------------- -->
<div style="margin: 30px;">
<center><h1>Descrição dos efeitos</h1></center>
<table style='width: 100%; border-color: #102479;' border="1">
<tr >
    <td><a name="Asas de Bronze I" style="font-size: 18px; font-weight: bolder;">Asas de Bronze I:</a>  </td> <td>Aquisição de 1d4 naves minúsculas no recrutamento de tripulação.</td>
</tr>
<tr>
    <td><a name="Asas de Bronze II" style="font-size: 18px; font-weight: bolder;">Asas de Bronze II:</a>  </td> <td>Aquisição de 1d4+2 naves minúsculas no recrutamento de tripulação.</td>
</tr>
<tr>
    <td><a name="Asas de Bronze III" style="font-size: 18px; font-weight: bolder;">Asas de Bronze III:</a> </td> <td>Aquisição de 1d4+4 naves minúsculas no recrutamento de tripulação.</td>
</tr>
<tr>
    <td><a name="Asas de Prata" style="font-size: 18px; font-weight: bolder;">Asas de Prata:</a> </td> <td>Aquisição de 1d3 naves pequenas no recrutamento de tripulação.</td>
</tr>
<tr>
    <td><a name="Asas de Ouro" style="font-size: 18px; font-weight: bolder;">Asas de Ouro:</a> </td> <td>Aquisição de 1 nave média no recrutamento de tripulação.</td>
</tr>
<tr>
    <td><a name="Esquadrão de Cavalaria I" style="font-size: 18px; font-weight: bolder;">Esquadrão de Cavalaria I:</a> </td> <td>Esquadrão para combate terrestre.</td>
</tr>
<tr>
    <td><a name="Esquadrão de Cavalaria II" style="font-size: 18px; font-weight: bolder;">Esquadrão de Cavalaria II:</a> </td> <td>Melhoria no combate terrestre.</td>
</tr>
<tr>
    <td><a name="Esquadrão de Cavalaria III" style="font-size: 18px; font-weight: bolder;">Esquadrão de Cavalaria III:</a> </td> <td>Aumento do esquadrão de cavalaria.</td>
</tr>
<tr>
    <td><a name="Esquadrão de Elite" style="font-size: 18px; font-weight: bolder;">Esquadrão de Elite:</a> </td> <td>Esquadrão para missões especiais (espionagem, assassinato, sabotagem).</td>
</tr>
<tr>
    <td><a name="Esquadrão de Nave I" style="font-size: 18px; font-weight: bolder;">Esquadrão de Nave I:</a> </td> <td>Esquadrão para combate espacial.</td>
</tr>
<tr>
    <td><a name="Esquadrão de Nave II" style="font-size: 18px; font-weight: bolder;">Esquadrão de Nave II:</a> </td> <td>Melhoria do combate espacial.</td>
</tr>
<tr>
    <td><a name="Esquadrão de Nave III" style="font-size: 18px; font-weight: bolder;">Esquadrão de Nave III:</a> </td> <td>Aumento do esquadrão de nave.</td>
</tr>
<tr>
    <td><a name="Esquadrão de Reconhecimento I" style="font-size: 18px; font-weight: bolder;">Esquadrão de Reconhecimento I:</a> </td> <td>Esquadrão para missões de reconhecimento(batedores, vigias, olheiros).</td>
</tr>
<tr>
    <td><a name="Esquadrão de Reconhecimento II" style="font-size: 18px; font-weight: bolder;">Esquadrão de Reconhecimento II:</a> </td> <td>Melhoria no reconhecimento.</td>
</tr>
<tr>
    <td><a name="Esquadrão de Reconhecimento III" style="font-size: 18px; font-weight: bolder;">Esquadrão de Reconhecimento III:</a> </td> <td>Aumento no esquadrão de reconhecimento.</td>
</tr>
<tr>
    <td><a name="Esquadrão de Suporte I" style="font-size: 18px; font-weight: bolder;">Esquadrão de Suporte I:</a> </td> <td>Esquadrão para suporte(medicos, suprimentos).</td>
</tr>
<tr>
    <td><a name="Esquadrão de Suporte II" style="font-size: 18px; font-weight: bolder;">Esquadrão de Suporte II:</a> </td> <td>Melhoria do suporte.</td>
</tr>
<tr>
    <td><a name="Esquadrão de Suporte III" style="font-size: 18px; font-weight: bolder;">Esquadrão de Suporte III:</a> </td> <td>Aumento do esquadrão de suporte.</td>
</tr>
<tr>
    <td><a name="Frota I" style="font-size: 18px; font-weight: bolder;">Frota I:</a> </td> <td>O tier das naves minúsculas se tornam 1/3 do nv da base.</td>
</tr>
<tr>
    <td><a name="Frota II" style="font-size: 18px; font-weight: bolder;">Frota II:</a> </td> <td>O tier das naves pequenas se tornam 1/3 do nv da base.</td>
</tr>
<tr>
    <td><a name="Frota III" style="font-size: 18px; font-weight: bolder;">Frota III:</a> </td> <td>O tier das naves médias se tornam 1/3 do nv da base.</td>
</tr>
<tr>
    <td><a name="Lingua de Ouro I" style="font-size: 18px; font-weight: bolder;">Língua de Ouro I:</a> </td> <td>Equipamentos podem ser vendidos na base por 25% do preço original.</td>
</tr>
<tr>
    <td><a name="Lingua de Ouro II" style="font-size: 18px; font-weight: bolder;">Língua de Ouro II:</a> </td> <td>Equipamentos podem ser vendidos na base por 50% do preço original.</td>
</tr>
<tr>
    <td><a name="Lingua de Ouro III" style="font-size: 18px; font-weight: bolder;">Língua de Ouro III:</a> </td> <td>Equipamentos podem ser vendidos na base por 75% do preço original.</td>
</tr>
<tr>
    <td><a name="Lingua de Ouro IV" style="font-size: 18px; font-weight: bolder;">Língua de Ouro IV:</a> </td> <td>Equipamentos podem ser vendidos na base por 100% do preço original.</td>
</tr>
<tr>
    <td><a name="Recrutamento de Tripulação" style="font-size: 18px; font-weight: bolder;">Recrutamento de Tripulação:</a> </td> <td>Recrutagem de 1d4 membros para a tripulação por ponto de recrutamento.</td>
</tr>
<tr>
    <td><a name="Workshop I" style="font-size: 18px; font-weight: bolder;">Workshop I:</a> </td> <td>Equipamentos podem ser reciclados na base por 25% do preço em BPUs.</td>
</tr>
<tr>
    <td><a name="Workshop II" style="font-size: 18px; font-weight: bolder;">Workshop II:</a> </td> <td>Equipamentos podem ser reciclados na base por 50% do preço em BPUs.</td>
</tr>
<tr>
    <td><a name="Workshop III" style="font-size: 18px; font-weight: bolder;">Workshop III:</a> </td> <td>Equipamentos podem ser reciclados na base por 75% do preço em BPUs.</td>
</tr>
<tr>
    <td><a name="Workshop IV" style="font-size: 18px; font-weight: bolder;">Workshop IV:</a> </td> <td>Equipamentos podem ser reciclados na base por 100% do preço em BPUs.</td>
</tr>

</table>
</div>




<!-- ------------- Rodapé --------------- -->
<br><br><br></div>
</td></tr></table></center> 
<br><br><br> 
<div style="background-image:linear-gradient(to bottom, #040d3d9d, #020930ad, #030e4b9d); margin-bottom: 25px; height: auto; padding: 10px; font-size: 12px;">&copy;YuriVictorCiprianoDeJesus2022</div>
            
</body>
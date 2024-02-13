<?php 
require("./funcoes.php");
$link=mysqli_connect('localhost','root','','starfinder'); 

$cmdsql="SELECT * FROM starfinder.motherbase_pontos WHERE idmotherbase='1'";    
$reg_pontos=mysqli_fetch_array(mysqli_query($link,$cmdsql));

$cmdsql="SELECT * FROM starfinder.motherbase_propriedades WHERE idmotherbase_creditos='2'";    
$reg_propriedades=mysqli_fetch_array(mysqli_query($link,$cmdsql));

$ganhos=(($reg_pontos['pontos_legal']*0.6)+$reg_pontos['pontos_ilegal'])*1000;
$custos=((800*$reg_propriedades['tripulacao_total'])+($reg_pontos['pontos_equipamentos']*1500)+($reg_propriedades['nv_motherbase']*1000))*(1-($reg_pontos['pontos_fabricacao']*0.05));
$lucro=$ganhos-$custos;
$dist_pontos=round($reg_propriedades['nv_motherbase']*1.5+(round($reg_propriedades['tripulacao_total']/10)));
$dist_pontos_gasto=$dist_pontos-$reg_pontos['pontos_comercio']-$reg_pontos['pontos_equipamentos']-$reg_pontos['pontos_fabricacao']-$reg_pontos['pontos_treinamento']-$reg_pontos['pontos_recrutamento'];
$dist_comercio=round(($reg_pontos['pontos_comercio']*1.3)+($reg_propriedades['tripulacao_total']*1.1)+$reg_pontos['pontos_fabricacao']);
$dist_comercio_gasto=$dist_comercio-$reg_pontos['pontos_legal']-$reg_pontos['pontos_ilegal'];
$nv_tripulacao=round($reg_propriedades['tripulacao_total']*(1+$reg_pontos['pontos_treinamento']*0.1+$reg_pontos['pontos_equipamentos']*0.2)-$reg_pontos['pontos_ilegal']);

print("
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
   <!-- <div style='background-color:#052a56af;margin: 0 0; height: 10px;'></div>     <img src='imgs/starfinderLogo2.png' style='margin: 4px 25px; height: 30px;'>  -->
        <br><br><br><div style='background-image:linear-gradient(to bottom, #040d3d9d, #020930ad, #030e4b9d); margin-bottom: 25px; height: auto; padding: 10px;'>
            
            
            <a href='./index.html' style='text-decoration: none; color: aliceblue; margin: 25px;'>Início </a>
            <a href='./missoes.html' style='text-decoration: none; color: aliceblue; margin-right: 25px;'>Missões </a>
            <a href='./motherbase.php' style='text-decoration: none; color: aliceblue; margin-right: 25px;'>Mother Base </a>
            <a href='./tela_Passivos.php' style='text-decoration: none; color: aliceblue; margin-right: 25px;'>Efeitos Passivos </a>
            
        </div> 
<div style='width: 100%; '>
<center>
    <table>
<tr><td>
    <div style='background-image:linear-gradient(to bottom, #000000a2, #020930ad, #030e4b9d);
     margin: 0% 20%; box-shadow: 0 50px 100px 0 rgba(0, 102, 255, 0.349), 0 26px 20px 0 rgba(5, 28, 104, 0.19);  '><br>       
        <center> 
            
        <form action='./motherbase_edita.php' method='GET'>
        <input type='hidden' name='bloco' value='2'>
        <table style='width: 100%;'>
            <tr><a href='./index.html'><img src='imgs/banner.png' style='width: 100%; '></a></tr>
            <tr><h1 style='width: 100%; cursor:default; font-size: 32px; border-radius: 0%; '>Mother Base NV$reg_propriedades[nv_motherbase]</h1> </tr>
            <tr style='height: 20px;'></tr>
                <tr>
                    <td style='width: 50px;'></td>
                    <td style='width: 300px;' > 
                         <h2>Informações:</h2>
                    </td>

                    <td style='width: 20px;' ></td>
    
                        <td style='width: 300px;' rowspan='6'>
                               <div style='height: 800px; overflow-y: scroll; background-image: linear-gradient(to bottom, #000000b0, #000000c0, #02070ee0); 
                               box-shadow: 0 5px 20px 0 rgba(0, 102, 255, 0.349), 0 13px 10px 0 rgba(5, 28, 104, 0.19);'>
                                <table style='margin-left: 30px;'>
                                    <tr><td style='width: 300px; text-align:center;'><h3>Efeitos Passivos</h3></td></tr><br>
                                    <tr><td>Asas de Bronze I</td> </tr>
                                    <tr><td>Asas de Bronze II</td> </tr>
                                    <tr><td>Asas de Bronze III</td></tr>
                                    <tr><td>Asas de Prata</td></tr>
                                    <tr><td>Asas de Ouro</td></tr>
                                    <tr><td>Esquadrão de Cavalaria I</td></tr>
                                    <tr><td>Esquadrão de Cavalaria II</td> </tr>
                                    <tr><td>Esquadrão de Cavalaria III</td> </tr>
                                    <tr><td>Esquadrão de Elite</td></tr>
                                    <tr><td>Esquadrão de Nave I</td></tr>
                                    <tr><td>Esquadrão de Nave II</td></tr>
                                    <tr><td>Esquadrão de Nave III</td></tr>
                                    <tr><td>Esquadrão de Reconhecimento I</td> </tr>
                                    <tr><td>Esquadrão de Reconhecimento II</td> </tr>
                                    <tr><td>Esquadrão de Reconhecimento III</td></tr>
                                    <tr><td>Esquadrão de Suporte I</td></tr>
                                    <tr><td>Esquadrão de Suporte II</td></tr>
                                    <tr><td>Esquadrão de Suporte III</td></tr>
                                    <tr><td>Frota I </td> </tr>
                                    <tr><td>Frota II </td> </tr>
                                    <tr><td>Frota III </td></tr>
                                    <tr><td>Lingua de Ouro I</td></tr>
                                    <tr><td>Lingua de Ouro II</td></tr>
                                    <tr><td>Lingua de Ouro III</td></tr>
                                    <tr><td>Lingua de Ouro IV</td> </tr>
                                    <tr><td>Lingua de Ouro V</td> </tr>
                                    <tr><td>Lingua de Ouro VI</td></tr>
                                    <tr><td>Lingua de Ouro VII</td></tr>
                                    <tr><td>Recrutas Alados I 30%</td></tr>
                                    <tr><td>Recrutas Alados II 40%</td></tr>
                                    <tr><td>Recrutas Alados III 50%</td></tr>
                                    <tr><td>Workshop I 20%</td></tr>
                                    <tr><td>Workshop II 25%</td></tr>
                                    <tr><td>Workshop III 30%</td></tr>
                                    <tr><td>Workshop IV 35%</td></tr>
                                    <tr><td>Workshop V 40%</td></tr>
                                    <tr><td>Workshop VI 45%</td></tr>
                                    <tr><td>Workshop VII 50%</td></tr>
                                </Table>
                            </div> 
                        </td>   
    
                    </tr>
    
                    <tr>
                    <td></td>
                    <td style='width: 300px;'>
                        
                        <h3>Tripulação total: $reg_propriedades[tripulacao_total]</h3>

                    <table>
                        <tr>
                            <td>Naves minúsculas:</td> <td>$reg_propriedades[nave_minuscula]</td>
                        </tr>
                        <tr>
                            <td>Naves pequenas:</td> <td>$reg_propriedades[nave_pequena]</td>
                        </tr>
                        <tr>
                            <td>Naves médias:</td> <td>$reg_propriedades[nave_media]</td>
                        </tr>
                        <tr>
                            <td style='width: 260px;'>Nível da tripulação:</td> <td>$nv_tripulacao</td>
                        </tr>
                        </td>
                    </table> 
                    </td>
                </tr>
    
                    <tr style='height: 5px;'></tr>

                <tr>
                    <td></td>
                    <td style='width: 300px;'>                      
                        
                        <table>
                        <tr><td style='width: 260px;'><h3>Distribuição de Pontos: $dist_pontos_gasto/$dist_pontos</h3></td> <td></td></tr>
                        <tr><td>
                        <div class='tooltip'>Comércio:
                        <span class='tooltiptext'>&#10133;Pontos de comércio</span>
                        </div>
                        </td>     <td style='text-align: center;'>$reg_pontos[pontos_comercio]</td></tr> 
                        <tr><td>
                        <div class='tooltip'> Equipamentos:
                        <span class='tooltiptext'> &#10133;NV de Tripulação<br>&#10133;Custo da Base</span>
                        </div>
                        </td> <td style='text-align: center;'>$reg_pontos[pontos_equipamentos]</td></tr>
                        <tr><td>
                        <div class='tooltip'>Fabricação:
                        <span class='tooltiptext'>&#10133;Pontos de comércio<br>&#10134;Custo da Base</span>
                        </div>
                        </td>   <td style='text-align: center;'>$reg_pontos[pontos_fabricacao]</td></tr>
                        <tr><td>
                        <div class='tooltip'>Recrutamento:
                        <span class='tooltiptext'> &#10133;NV de Tripulação</span>
                        </div>
                        </td> <td style='text-align: center;'>$reg_pontos[pontos_recrutamento]</td></tr>
                        <tr><td>
                        <div class='tooltip'>Treinamento:
                        <span class='tooltiptext'>&#10133;NV de Tripulação </span>
                        </div>
                        </td>  <td style='text-align: center;'>$reg_pontos[pontos_treinamento]</td></tr>
                    </table>
                    </td>

                      <td style='width: 20px;'></td>
               
                       
                    </td>                    
                </tr>

                <tr>
                    <td></td>
                    <td style='width: 300px;'>
                        <table>
                        <tr><td style='width: 230px;'><h3>Comércio: $dist_comercio_gasto/$dist_comercio</h3></td></tr>
                        <tr><td>
                        <div class='tooltip'>Legal:
                        <span class='tooltiptext'>&#10133;Ganhos </span>
                        </div>
                        </td>     <td style='text-align: center;'>$reg_pontos[pontos_legal]</td></tr> 
                        <tr><td>
                        <div class='tooltip'>Ilegal:
                        <span class='tooltiptext'>&#10133;Ganhos<br>&#10134;NV de Tripulação</span>
                        </div>
                        </td>    <td style='text-align: center;'>$reg_pontos[pontos_ilegal]</td></tr>
                        <tr><td>Ganhos:</td>    <td style='text-align: center;'>$ganhos</td></tr>
                    </table>
                    </td>

                      <td style='width: 20px;'></td>

                        
                    </td>                    
                </tr>

                <tr>
                    <td></td>
                    <td style='width: 300px;'>
                        <table>
                        <tr><td style='width: 230px;'><h3>Finanças da base: </h3></td></tr>
                        <tr><td>Custo da Base:</td>     <td style='text-align: center;'>$custos</td></tr>
                        <tr><td>Lucro da Base:</td>     <td style='text-align: center;'>$lucro</td></tr>
                    </table>
                    </td>

                      <td style='width: 20px;'></td>

                        
                    </td>                    
                </tr>
               <button type='submit' value='1' name='btenvio' class='botao10' style='font-size: 16px; height: 30px; width: 100px;'>&#9998;</button>    
                <tr>
                    
                    <tr style='height: 30px;'></tr>
    
                    <tr>
                        <td></td>
                        <td style='width: 300px;'>
                                                 
                        </td>
    
                          <td style='width: 20px;'></td> <td style='width: 20px;'></td>    <td style='width: 20px;'></td>                   
                        </td>                    
                    </tr>
    
        </table>        
    </form>
</center>

</div>
</td></tr></table></center><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<div style='background-image:linear-gradient(to bottom, #040d3d9d, #020930ad, #030e4b9d); margin-bottom: 25px; height: auto; padding: 10px; font-size: 12px;'>&copy;YuriVictorCiprianoDeJesus2022</div>
            
</body>
");
?>
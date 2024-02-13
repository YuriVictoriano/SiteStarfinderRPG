<?php
require("./funcoes.php");
conectar();
$reg_mb_propriedades=motherbase_propriedades();


?>

<!DOCTYPE html>
    <head>   
        
    <title>Sistema de Missões</title>
    <meta charset='UTF-8'>
    <link rel='stylesheet' type='text/css' href='./estilo.css'>
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <Style>
        body { 
            background-image: url('imgs/img_fundo6.jpg');
    box-shadow: inset 0px 0px 100px 10px rgb(0 0 0 / 95%);
    background-size:cover
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

    .campo{
        font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
     font-size: 15px;
     color: rgb(255, 255, 255);
     background-color: transparent;
      border: 10px;
      margin-top: 10px;
     display: inline-block;
     box-shadow: inset 0px 0px 100px 10px rgb(0 0 0 / 95%);
    }  
    

    .container {
    height: 300px;
    overflow-y: scroll;
    }

    input::-webkit-outer-spin-button,
    input::-webkit-inner-spin-button {
    -webkit-appearance: none;
     margin: 0;
    }
    input[type=number] {
    -moz-appearance: textfield;
    }

    </Style>
    
    </head>
    <body>
       <!-- <div style='background-color:#052a56af;margin: 0 0; height: 10px;'></div>     <img src='imgs/starfinderLogo2.png' style='margin: 4px 25px; height: 30px;'>  -->
            <br><br><br><div style='background-image:linear-gradient(to bottom, #040d3d9d, #020930ad, #030e4b9d); margin-bottom: 25px; height: auto; padding: 10px;'>
                
                
                <a href='./index.html' style='text-decoration: none; color: aliceblue; margin: 25px;'>Início </a>
                <a href='./missoes.html' style='text-decoration: none; color: aliceblue; margin-right: 25px;'>Missões </a>
                <a hrephp' style='text-decoration: none; color: aliceblue; margin-right: 25px;'>Mother Base </a>
                
            </div> 
    <div style='width: 100%; '>
    <center>
        <table >
    <tr><td>
        <div style="background-image:linear-gradient(to bottom, #000000a2, #020930ad, #030e4b9d);
        margin: 0% 20%; box-shadow: 0 50px 100px 0 rgba(0, 102, 255, 0.349), 0 26px 20px 0 rgba(5, 28, 104, 0.19);  "><br>       
            <center> 
                
            <form action='./motherbase.php' method='GET' >
            <input type='hidden' name='bloco' value='2'>
            <table style='width: 100%;' border="1">
                <tr><a href='./index.html'><img src='imgs/banner.png' style='width: 100%; '></a></tr>
                <tr><h1 style='width: 100%; cursor:default; font-size: 32px; border-radius: 0%; '>Recrutamento</h1> </tr>
                <tr style='height: 30px;'></tr>
                    <tr>
                        <td style='width: 50px;'></td>
                        <td style='width: 300px;' > 
                             <h2>Informações:</h2>
                        </td>
                        <td style='width: 20px;' ></td>
                    </tr>
    
                    <tr>
                        <td></td>
                        <td style='width: 300px;'>                            
                        <h3>Tripulação total: <input type='number' name='tripulacao_total' id='tripulacao_total' value='$reg_propriedades[tripulacao_total]' style='width: 26px; font-size: 17px;'></h3>
                        <p>Nível da tripulação:</p>  
                        </td>                          
                    </tr>

                    <tr>
                        <td></td>
                        <td style='width: 300px;'>                            
                        <h3>Naves totais:</h3>
                        <table>
                            <tr>
                                <td>Naves minúsculas</td> <td><input type='number' name='nave_minuscula' id='nave_minuscula' value='$reg_propriedades[nave_minuscula]' style='width: 26px; font-size: 17px;'></td>
                            </tr>
                            <tr>
                                <td>Naves pequenas</td> <td><input type='number' name='nave_pequena' id='nave_pequena' value='$reg_propriedades[nave_pequena]' style='width: 26px; font-size: 17px;'></td>
                            </tr>
                            <tr>
                                <td>Naves médias</td> <td><input type='number' name='nave_media' id='nave_media' value='$reg_propriedades[nave_media]' style='width: 26px; font-size: 17px;'></td>
                            </tr>
                            </td>
                        </table>   
                        </td>
                    </tr>
                    <tr><td></td> <td><center>
                        <button type='submit' name='btnSalvar' class='botao10' style='font-size: 16px; height: 30px; width: 100px;'><i class='fas'>&#xf522;</i></button>
                        <button class='botao10' style='font-size: 16px; height: 30px; width: 100px;' onclick='history.go(-1)'><i class="fa">&#xf0a8;</i></button>
                    </center></td></tr>
                    <tr style="height: 20px;"></tr>  
            </table>  
            </form>
                  
        
    </center>
    
    </div>
    </td></tr></table></center><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <div style='background-image:linear-gradient(to bottom, #040d3d9d, #020930ad, #030e4b9d); margin-bottom: 25px; height: auto; padding: 10px; font-size: 12px;'>&copy;YuriVictorCiprianoDeJesus2022</div>
                
    </body>
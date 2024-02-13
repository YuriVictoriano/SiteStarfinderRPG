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
</Style>

</head>
<body>
    
<br><br><br><div style="background-image:linear-gradient(to bottom, #040d3d9d, #020930ad, #030e4b9d); margin-bottom: 25px; height: auto; padding: 10px;">
            
            
            <a href='./index.html' style="text-decoration: none; color: aliceblue; margin: 25px;">Início </a>
            <a href='./missoes.html' style="text-decoration: none; color: aliceblue; margin-right: 25px;">Missões </a>
            <a href='./motherbase.php' style="text-decoration: none; color: aliceblue; margin-right: 25px;">Mother Base </a>
            <a href='./tela_Passivos.php' style='text-decoration: none; color: aliceblue; margin-right: 25px;'>Efeitos Passivos </a>
            
        </div> 
        <?php
        $bloco=1 ;
         if(isset($_GET['m_1'])){ $bloco=1;}
         if(isset($_GET['m_2'])){ $bloco=2;}
         if(isset($_GET['m_3'])){ $bloco=3;}
         if(isset($_GET['m_4'])){ $bloco=4;}
         if(isset($_GET['m_5'])){ $bloco=5;}
         if(isset($_GET['m_6'])){ $bloco=6;}


        switch (TRUE){
            case ( $bloco==1 ):{
                echo("<center><table><tr><td><div style='background-image:linear-gradient(to bottom, #000000a2, #020930ad, #030e4b9d);margin: 0% 20%; box-shadow: 0 50px 100px 0 rgba(0, 102, 255, 0.349), 0 26px 20px 0 rgba(5, 28, 104, 0.19);'>  
    <table style='width: 100%;'><tr><td ></td><td><h1>Missão: Bloqueada</h1> </td><td style='width: 5px;'></td></tr><tr><td></td><td><center><img src='imgs/Cadeado.png' class='image' style='border-radius: 10px; width: 100%px;'></center></td></tr>
    <tr><td></td><td><h3 style='margin-bottom: 2px;'> Descrição: </h3> Bloquado para registro. CDM 7894121657 </td></tr><tr><td></td>
    <td><h3 style='margin-bottom: 2px;'>Localização: </h3> Nenhuma.</td></tr><tr><td></td><td><a style='font-size: 20px;'><br><b>Recompensa: </b></a> 0 Créditos.<br><br></td></tr></table></div></td></tr></table></center>
    <br><br><br><br><br><br><br><br> <div style='background-image:linear-gradient(to bottom, #040d3d9d, #020930ad, #030e4b9d); margin-bottom: 25px; height: auto; padding: 10px; font-size: 12px;'>&copy;YuriVictorCiprianoDeJesus2022</div>");break;
            }

            case ($bloco==2):{
                echo("<center><table><tr><td><div style='background-image:linear-gradient(to bottom, #000000a2, #020930ad, #030e4b9d);margin: 0% 20%; box-shadow: 0 50px 100px 0 rgba(0, 102, 255, 0.349), 0 26px 20px 0 rgba(5, 28, 104, 0.19);'>  
    <table style='width: 100%;'><tr><td ></td><td><h1>Missão: Caça ao Nyssholora</h1> </td><td style='width: 5px;'></td></tr> 
    <tr><td></td><td><center><img src='imgs/missao2-1.jpg' class='image' style='border-radius: 10px; width: 380px;'></center></td></tr><tr><td></td><td><h3 style='margin-bottom: 2px;'>
    Descrição: </h3> Caçe essa besta mágica e traga duas garras de um Nyssholora, podendo ser de um juvenil, a menos que queirar morrer.</td></tr><tr><td></td><td><h3 style='margin-bottom: 2px;'>
    Localização: </h3> Planícies temperadas ou quentes de Castrovel. Entregar garras nas Coordenadas: 35216854612X896.</td></tr><tr><td></td><td><a style='font-size: 20px;'><br><b>
    Recompensa: </b></a> 2.000 Créditos.<br><br></td></tr></table></div></td></tr></table></center>
    <br><br><br><br><br><br><br><br> <div style='background-image:linear-gradient(to bottom, #040d3d9d, #020930ad, #030e4b9d); margin-bottom: 25px; height: auto; padding: 10px; font-size: 12px;'>&copy;YuriVictorCiprianoDeJesus2022</div>");break;
            }
            case ($bloco==3):{
                echo("<center><table><tr><td><div style='background-image:linear-gradient(to bottom, #000000a2, #020930ad, #030e4b9d);margin: 0% 20%; box-shadow: 0 50px 100px 0 rgba(0, 102, 255, 0.349), 0 26px 20px 0 rgba(5, 28, 104, 0.19);'>  
    <table style='width: 100%;'><tr><td ></td><td><h1>Missão: Captura do Shotalashu</h1> </td><td style='width: 5px;'></td></tr>
    <tr><td></td><td><center><img src='imgs/missao3-1.jpg' class='image' style='border-radius: 10px; width: 380px;'></center></td></tr><tr><td></td><td><h3 style='margin-bottom: 2px;'>
    Descrição: </h3> Trazer um Shotalashu de Castrovel, obviamente vivo. O animal me servirá como montaria. Há vendedores de Shotalasu nas cidades em Castrovel, compre-o por suas custas e traga-me uma nota para que eu pague de volta o valor.
    </td></tr><tr><td></td><td><h3 style='margin-bottom: 2px;'>Localização: </h3> Habitam florestas quentes em Castrovel, podendo ser encontrados para venda em cidades próximas a essas florestas.                                Entregar o Shotalashu nas Coordenadas: 7894552647X454.
    </td></tr><tr><td></td><td><a style='font-size: 20px;'><br><b>Recompensa: </b></a> 1.775 Créditos.<br><br></td></tr></table></div></td></tr></table></center>
    <br><br><br><br><br><br><br><br> <div style='background-image:linear-gradient(to bottom, #040d3d9d, #020930ad, #030e4b9d); margin-bottom: 25px; height: auto; padding: 10px; font-size: 12px;'>&copy;YuriVictorCiprianoDeJesus2022</div>");break;
            }
            case ($bloco==4):{
                echo("<center><table><tr><td><div style='background-image:linear-gradient(to bottom, #000000a2, #020930ad, #030e4b9d); margin: 0% 20%; box-shadow: 0 50px 100px 0 rgba(0, 102, 255, 0.349), 0 26px 20px 0 rgba(5, 28, 104, 0.19);'>"); 
    echo("  <table style='width: 100%;'><tr><td ></td><td><h1>Missão: Caça aos Goblins Espaciais</h1> </td><td style='width: 5px;'></td></tr><tr><td></td><td><center><img src='imgs/missao4-1.jpg' class='image' style='border-radius: 10px; width: 380px;'></center></td></tr>");
    echo(" <tr><td></td><td><h3 style='margin-bottom: 2px;'>Descrição: </h3> Um grupo de goblins espaciais estão assaltando naves que passam próximos à Diáspora, são salteadores violentos e sem moral, trazê-los vivos pode garantir um bônus no pagamento.</td></tr>");
    echo("  <tr><td></td><td><h3 style='margin-bottom: 2px;'> Localização: </h3> Podem ser encontrados pela rota DIASU187. Coordenadas para entregá-los, apenas se vivos, 146549846x697.</td></tr>");
    echo("   <tr><td></td><td><a style='font-size: 20px;'><br><b>Recompensa: </b></a> 1.800 Créditos. <br><br></td></tr></table></div></td></tr></table></center>
    <br><br><br><br><br><br><br><br> <div style='background-image:linear-gradient(to bottom, #040d3d9d, #020930ad, #030e4b9d); margin-bottom: 25px; height: auto; padding: 10px; font-size: 12px;'>&copy;YuriVictorCiprianoDeJesus2022</div>"); break;
            }
            case ($bloco==5):{
                echo("<center><table><tr><td><div style='background-image:linear-gradient(to bottom, #000000a2, #020930ad, #030e4b9d);margin: 0% 20%; box-shadow: 0 50px 100px 0 rgba(0, 102, 255, 0.349), 0 26px 20px 0 rgba(5, 28, 104, 0.19);'>  
    <table style='width: 100%;'><tr><td ></td><td><h1>Missão: Bloqueada</h1> </td><td style='width: 5px;'></td></tr> 
    <tr><td></td><td><center><img src='imgs/Cadeado.png' class='image' style='border-radius: 10px; width: 100%px;'></center></td></tr><tr><td></td><td><h3 style='margin-bottom: 2px;'>
    Descrição: </h3> Bloquado para registro. CDM 1364029870</td></tr><tr><td></td><td><h3 style='margin-bottom: 2px;'>Localização: </h3> Nenhuma.</td></tr><tr><td></td><td><a style='font-size: 20px;'><br><b>
    Recompensa: </b></a> 0 Créditos.<br><br></td></tr></table></div></td></tr></table></center>
    <br><br><br><br><br><br><br><br> <div style='background-image:linear-gradient(to bottom, #040d3d9d, #020930ad, #030e4b9d); margin-bottom: 25px; height: auto; padding: 10px; font-size: 12px;'>&copy;YuriVictorCiprianoDeJesus2022</div>");break;

            }
            case ($bloco==6):{
                echo("<center><table><tr><td><div style='background-image:linear-gradient(to bottom, #000000a2, #020930ad, #030e4b9d);margin: 0% 20%; box-shadow: 0 50px 100px 0 rgba(0, 102, 255, 0.349), 0 26px 20px 0 rgba(5, 28, 104, 0.19);'>  
    <table style='width: 100%;'><tr><td ></td><td><h1>Missão: Escolta Subaquática</h1> </td><td style='width: 5px;'></td></tr> 
    <tr><td></td><td><center><img src='imgs/missao6.jpg' class='image' style='border-radius: 10px; width: 380px;'></center></td></tr><tr><td></td><td><h3 style='margin-bottom: 2px;'>
    Descrição: </h3> A Cristaline, uma pequena empresa mineradora, esta contratando pessoas para realizarem a escolta do submarino minerador Quants, que ira até as profundezas de Kalo-Mahoi, um mundo coberto por uma concha de gelo, sendo uma das luas de Bretheda. Será fornecido submarinos torpedos para a escolta. Haverá possíveis riscos devido a fauna hostil.
    </td></tr><tr><td></td><td><h3 style='margin-bottom: 2px;'>Localização: </h3> Um funcionário irá ser o guia apartir do Espaçoporto de Geol em Kalo-Mahoi, Bretheda.
    </td></tr><tr><td></td><td><a style='font-size: 20px;'><br><b>Recompensa: </b></a> 3.600 Créditos.<br><br></td></tr></table></div></td></tr></table></center>
    <br><br><br><br><br><br><br><br> <div style='background-image:linear-gradient(to bottom, #040d3d9d, #020930ad, #030e4b9d); margin-bottom: 25px; height: auto; padding: 10px; font-size: 12px;'>&copy;YuriVictorCiprianoDeJesus2022</div>");break;
            }
            
        }
?>
            
</body>
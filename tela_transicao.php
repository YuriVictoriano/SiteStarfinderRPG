<?php 
$tela=isset($_REQUEST['tela'])?$_REQUEST['tela']:0;

switch(true){
 
case ( $tela=='tela_Passivos' ):
{ 
    require("./funcoes.php");
    conectar();
    
    { /*checkbox*/
        for ($cont=1;$cont<=30; $cont++) {
            $v_check[$cont]=checar($cont);
          }
    }
    { /*salvar checkbox*/
        for ($cont=1;$cont<=30; $cont++) {
            if(isset($_REQUEST[$cont])&&checar($cont)!=1){ 
                upd_motherbase_efeitos($cont, 1);            
            }
            else if(isset($_REQUEST[$cont])&&checar($cont)==1){
            }
            else{
                upd_motherbase_efeitos($cont, 0);
            }
          }
    }    
    header("Refresh:0; url=tela_Passivos.php");

   break;
}

case ( $tela=='motherbase' ):
    { 
        require("./funcoes.php");
        global $link;
        conectar();
        if(isset($_REQUEST['btnSalvar'])){  
            $cmdsql="UPDATE `starfinder`.`motherbase_pontos`
            SET
            idmotherbase = '1',
            pontos_comercio = '$_REQUEST[pontos_comercio]',
            pontos_equipamentos = '$_REQUEST[pontos_equipamentos]',
            pontos_fabricacao= '$_REQUEST[pontos_fabricacao]',
            pontos_recrutamento = '$_REQUEST[pontos_recrutamento]',
            pontos_treinamento = '$_REQUEST[pontos_treinamento]',
            pontos_legal = '$_REQUEST[pontos_legal]',
            pontos_ilegal = '$_REQUEST[pontos_ilegal]'
            WHERE idmotherbase = '1'";
            $execcmd=mysqli_query($link,$cmdsql);     
    
            $cmdsql="UPDATE `starfinder`.`motherbase_propriedades`
            SET
            idmotherbase_creditos = '2',
            nv_motherbase = '$_REQUEST[nv_motherbase]',
            tripulacao_total = '$_REQUEST[tripulacao_total]'
            WHERE idmotherbase_creditos = '2'";
            $execcmd=mysqli_query($link,$cmdsql); 
            
      }
    
        header("Refresh:0; url=motherbase_edita.php");
    
       break;
    }

}


?>
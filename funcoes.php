<?php

global $atualizar;
function conectar(){
    global $link;
    $link=mysqli_connect('localhost','root','','starfinder'); 
    
}

function select($tabela, $condicao, $id){
    $cmdsql="SELECT * FROM starfinder.$tabela WHERE $condicao='$id'";    
    $reg_tab=mysqli_fetch_array(mysqli_query($link,$cmdsql));
}

function checar($id){
    global $link;
    $cmdsql="SELECT * FROM starfinder.motherbase_efeitos WHERE idmotherbase_efeitos='$id'";    
    $reg_efeitos=mysqli_fetch_array(mysqli_query($link,$cmdsql));
    if($reg_efeitos['check_efeito']==1){
        return "checked style='background-image:linear-gradient(to bottom, #0b2c69a2, #0d1a66ad, #061da09d)'";
    }
    else{
        return "";
    }    
}
function motherbase_propriedades(){
    global $link;
   $cmdsql="SELECT * FROM starfinder.motherbase_propriedades WHERE idmotherbase_creditos='2'";  
   return mysqli_fetch_array(mysqli_query($link,$cmdsql));
}
function motherbase_pontos(){
    global $link;
   $cmdsql="SELECT * FROM starfinder.motherbase_pontos WHERE idmotherbase='1'";    
   return mysqli_fetch_array(mysqli_query($link,$cmdsql));
}
function upd_motherbase_efeitos($id, $check){
    global $link;
    $cmdsql="UPDATE starfinder.motherbase_efeitos SET check_efeito = '$check' WHERE idmotherbase_efeitos = '$id';";
    $execcmd=mysqli_query($link,$cmdsql);
}

?>
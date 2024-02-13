<!DOCTYPE html>
<head>   
    
<title>Sistema de Missões</title>
<meta charset='UTF-8'>
<link rel='stylesheet' type='text/css' href='./estilo.css'>
<Style>
    body { 
        background-image: url('imgs/img_fundo6.jpg');
    background-size:cover;
    
}
a {
    text-decoration: none; 
    color: aliceblue;
    }
</Style>

</head>
<?php 
require("./funcoes.php");
conectar();
$_check=checar((ISSET($_REQUEST['mybox']))?$_REQUEST['mybox']: 2);
?>
<body>
    <br><br><br>
    
    <form action='./teste.php' method='GET'>
    <div>
        <label class='switch'>
            <input type='checkbox' name=mybox value='1' <?php print("$_check")?>>
            <span class='slider'></span>
      </div> 
      <input type='submit'>
    </form>
</body>

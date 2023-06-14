<?php

$usuario= $_GET['usuario'];
$senha= $_GET['senha'];
$entrar= $_GET['entrar'];

$sql ="select * from pessoa where USUARIO='$usuario' AND SENHA='$senha' ";

include_once('config.php');


$RESULT=mysqli_query($conexao,$sql);

IF (mysqli_num_rows($RESULT)>=1){
    header ('Location:HOMEPAGE.HTML');
}
else{
    header ('Location:LOGIN.HTML'); 
}

?>
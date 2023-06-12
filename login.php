<?php

$usuario= $_GET['usuario'];
$senha= $_GET['senha'];
$entrar= $_GET['entrar'];

$sql ="insert into pessoa (usuario,senha,entrar) values 
('$usuario', '$senha', '$entrar')";

include_once('config.php');
mysqli_query($conexao,$sql);

?>
<?php

$nome= $_GET['nome'];
$usuario= $_GET['usuario'];
$email = $_GET['email'];
$nascimento = $_GET['nascimento'];
$sexo = $_GET['sexo'];
$cidade = $_GET['cidade'];
$telefone = $_GET['telefone'];
$senha = $_GET['senha'];


$sql ="insert into pessoa (nome,usuario,email,dataNascimento,sexo,cidade,telefone,senha,) values 
('$nome', '$usuario', '$email', '$nascimento', '$sexo', '$cidade', '$telefone', '$senha')";

include_once('config.php');
mysqli_query($conexao,$sql);

?>
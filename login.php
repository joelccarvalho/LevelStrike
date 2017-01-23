<?php
include_once 'dbconfig.php';

$sql_query = "SELECT nome_utilizador,palavra_passe FROM users WHERE nome_utilizador ='$nome_utilizador' AND palavra_passe='$palavra_passe'";
$consulta = mysqli_query($link,$sql_query);

if(mysqli_num_rows($consulta) ==1 ){
  header("Location:main.html");
  }
?>

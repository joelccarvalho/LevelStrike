<?php
include_once 'dbconfig.php';

if($_POST){
  $title = $_POST['titulo'];
  $subject = $_POST['descricao'];
  $date = $_POST['dataLimite'];
  $points = $_POST['pontos'];
  //$password = $_POST['nomeUtilizador'];

  $sql_query = "INSERT INTO tarefas(titulo,descricao,dataLimite,pontos,nomeUtilizador,nomeGrupo) VALUES('$title','$subject','$date','$points','joel', 'grupo1')";
  mysqli_query($link, $sql_query);

  echo "Your form was submited with success";
}

 ?>

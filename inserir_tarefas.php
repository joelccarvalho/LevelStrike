<?php
include_once 'dbconfig.php';

if($_POST){
  $titulo = $_POST['title'];
  $assunto = $_POST['subject'];
  $data = $_POST['date'];
  $pontos = $_POST['points'];

  $sql_query = "INSERT INTO tarefas(titulo,descricao,dataLimite,pontos,nomeUtilizador,nomeGrupo) VALUES('$titulo','$assunto','$data','$pontos','joel', 'grupo1')";
  mysqli_query($link, $sql_query);

  echo "Your form was submited with success";
}

 ?>

<?php
include_once 'dbconfig.php';

$sql_query="SELECT titulo FROM tarefas";
$result_set=mysqli_query($link, $sql_query);
?>
  <h4 class="list-group-item-heading"></h4>
<?
while($row = mysqli_fetch_array($result_set)){
  $row['titulo_tarefa']
}

<?php
include_once 'dbconfig.php';

$sql_query="SELECT titulo, descricao, dataLimite, pontos FROM tarefas";
$result_set=mysqli_query($link, $sql_query);
?>
<table border="1">
  <tr>
    <td><strong>Titulo</strong></td>
    <td><strong>Email</strong></td>
    <td><strong>Telefone</strong></td>
  </tr>
<?
while($row = mysqli_fetch_array($result_set)){
  ?>
  <tr>
    <td><?=$row['PrimeiroNome']." ".$row['UltimoNome'];?></td>
    <td><?=$row['Email']?></td>
    <td><?=$row['Telefone']?></td>
  </tr>
  <?
}
?>
</table>

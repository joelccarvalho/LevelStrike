<?php
include "dbconfig.php";
$data=array();
$q=mysqli_query($link,"select titulo, descricao, dataLimite, pontos from `tarefas`");
while ($row=mysqli_fetch_object($q)){
 $data[]=$row;
}
echo json_encode($data);
?>

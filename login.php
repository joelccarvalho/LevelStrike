<?php
include_once 'dbconfig.php';

if($_POST){
  $nome = $_POST['username'];
  $pass = $_POST['password'];

  $sql_query = "SELECT nome, password FROM utilizadores WHERE nome ='$nome' AND password='$pass'";
  $existe = mysqli_query($link,$sql_query);

  if(mysqli_num_rows($existe) == 1 ){
    header("Location:main.html");
  }
  else{
    echo "<script type='text/javascript'>alert('Something is wrong! Please, check your username or password ');
    location.href = 'login.html';</script>";
  }
}
?>

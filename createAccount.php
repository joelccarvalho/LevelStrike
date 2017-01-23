<?php
include_once 'dbconfig.php';

if ($_POST["pass"] != $_POST["reppass"]) {
  echo "<script type='text/javascript'>alert('Something went wrong! Please write the same password!') ;
  location.href = 'createAccount.html';</script>";
  exit();
}

if($_POST){
  $nome = $_POST['username'];
  $email= $_POST['email'];
  $pass = $_POST['pass'];

  $sql_query = "INSERT INTO utilizadores(nome, password, email) VALUES('$nome','$pass','$email')";
  mysqli_query($link, $sql_query);

  echo "<script type='text/javascript'>alert('Success!');
  location.href = 'login.html';</script>";
}

 ?>

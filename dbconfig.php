<?php
  $host = "localhost";
  $user = "root";
  $password = "mysql";
  $datbase = "levelStrike";
  $link = mysqli_connect($host, $user, $password);
  mysqli_select_db($link, $datbase);
 ?>

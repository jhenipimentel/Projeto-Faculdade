<?php
  $conexao = mysqli_connect('localhost',	'root',  '','biblioteca'); 
  if (mysqli_connect_errno()) {
      printf("Connect failed: %s\n", mysqli_connect_error());
      exit();
  } 
?>

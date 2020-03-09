<?php
  $link = mysqli_connect("localhost", "root", "", "test");
  
  if (!$link) {
      echo "Error: Falha ao conectar-se com o banco de dados MySQL." . PHP_EOL;
      exit;
  }
?> 
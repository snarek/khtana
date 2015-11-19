<?php
  require_once "db.php";
  $connect=new mysqli($servername,$user,$psw,$dbname);
  if ($connect->error){
    echo "connection lost";
    die();
  }
?>

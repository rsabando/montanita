<?php
  $server="localhost";
  $user="root";
  $pass ="edcomlinux";
  $base="mv-base";
  $db = new  mysqli($server, $user, $pass, $base);
  if($db-> connect_error){
    die("Conexion fallida: ". $db-> connect_error);
  }
?>

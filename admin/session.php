<?php
include("../base/conexion.php");
   session_start();

   $user_check = $_SESSION['login_user'];

   $ses_sql = mysqli_query($db,"SELECT * from administrador where usuario = '$user_check' ");

   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);

   $login_session = $row['usuario'];

   if(!isset($_SESSION['login_user'])){
      header("location:login.php");
      die();
   }
   // else {
   //   header("location:index.php");.
   // }
?>

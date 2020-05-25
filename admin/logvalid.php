<?php
include("../base/conexion.php");
session_start();
?>
<?php
$nombreusuario = $_POST['usuario'];
$clave = $_POST['clave'];

// echo $nombreusuario. " y ". $clave;

$sql = "SELECT id FROM administrador WHERE usuario = '$nombreusuario' and clave = '$clave'";
$result=mysqli_query($db, $sql);
// $mostrar=mysqli_fetch_array($result);
 // $result = mysqli_query($conexion,$sql);
 $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
 $active = $row['active'];

 $count = mysqli_num_rows($result);

 // If result matched $myusername and $mypassword, table row must be 1 row

 if($count == 1) {
    // echo "Usuario ".$nombreusuario;
    // session_register("nombreusuario");
    $_SESSION['login_user'] = $nombreusuario;
    header("location: index.php");
 }else {
   echo "Usuario o Contraseña invalida";
    $error = "Your Login Name or Password is invalid";
 }
?>

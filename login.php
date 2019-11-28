<?php

include 'database/db.php';

$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

$query = "SELECT * FROM usuario WHERE usuario = '$usuario' and senha = '$senha'";

$consulta = mysqli_query($conexao, $query);

if(mysqli_num_rows($consulta) == 1){
  session_start();
  $_SESSION['login'] = true;
  $_SESSION['usuario'] = $usuario;
  header('location:index.php');
} else {
  header('location:index.php?erro');
}

?>

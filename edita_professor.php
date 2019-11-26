<?php

include 'database/db.php';

$id_professor = $_POST['id_professor'];
$nome_professor = $_POST['nome_professor'];
$cpf = $_POST['cpf'];
$data_nascimento = $_POST['data_nascimento'];
$telefone = $_POST['telefone'];
$email = $_POST['email'];

$query = "UPDATE professor SET nome_professor = '$nome_professor', cpf = '$cpf', data_nascimento = '$data_nascimento', telefone = '$telefone', email = '$email'  WHERE id_professor = $id_professor";

mysqli_query($conexao, $query);
header('location:index.php?pagina=professor');
?>

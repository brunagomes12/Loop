<?php

include 'database/db.php';

$id_aluno = $_POST['id_aluno'];
$nome_aluno = $_POST['nome_aluno'];
$cpf = $_POST['cpf'];
$data_nascimento = $_POST['data_nascimento'];
$telefone = $_POST['telefone'];
$email = $_POST['email'];

$query = "UPDATE aluno SET nome_aluno = '$nome_aluno', cpf = '$cpf', data_nascimento = '$data_nascimento', telefone = '$telefone', email = '$email'  WHERE id_aluno = $id_aluno";

mysqli_query($conexao, $query);
header('location:index.php?pagina=aluno');
?>

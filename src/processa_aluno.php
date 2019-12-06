<?php

include 'database/db.php';

$nome_aluno = $_POST['nome_aluno'];
$cpf = $_POST['cpf'];
$data_nascimento = $_POST['data_nascimento'];
$telefone = $_POST['telefone'];
$email = $_POST['email'];

$query = "INSERT INTO aluno(nome_aluno, cpf, data_nascimento, telefone, email) VALUES('$nome_aluno', '$cpf', '$data_nascimento', '$telefone', '$email')";

mysqli_query($conexao, $query);

header('location:index.php?pagina=aluno');

<?php

include 'database/db.php';

$nome_professor = $_POST['nome_professor'];
$cpf = $_POST['cpf'];
$data_nascimento = $_POST['data_nascimento'];
$telefone = $_POST['telefone'];
$email = $_POST['email'];

$query = "INSERT INTO professor(nome_professor, cpf, data_nascimento, telefone, email) VALUES('$nome_professor', '$cpf', '$data_nascimento', '$telefone', '$email')";

mysqli_query($conexao, $query);

header('location:index.php?pagina=professor');

<?php

include 'database/db.php';
$nome_curso = $_POST['nome_curso'];
$carga_horaria = $_POST['carga_horaria'];

$query = "INSERT INTO curso(nome_curso, carga_horaria) VALUES('$nome_curso', $carga_horaria)";

mysqli_query($conexao, $query);

header('location:index.php?pagina=curso');

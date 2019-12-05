<?php

include 'database/db.php';
$nome_curso = $_POST['nome_curso'];
$carga_horaria = $_POST['carga_horaria'];
$id_professor = $_POST['escolha_professor'];

$query = "INSERT INTO curso(nome_curso, carga_horaria, id_professor) VALUES('$nome_curso', $carga_horaria, $id_professor)";

mysqli_query($conexao, $query);

header('location:index.php?pagina=curso');

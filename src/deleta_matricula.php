<?php

include 'database/db.php';

$id_aluno_curso = $_GET['id_matricula'];

$query = "DELETE FROM aluno_curso WHERE id_aluno_curso = $id_aluno_curso";

mysqli_query($conexao, $query);

header('location:index.php?pagina=matricula');

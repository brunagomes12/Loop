<?php

include 'database/db.php';

$id_aluno = $_GET['id_aluno'];

$query = "DELETE FROM aluno WHERE id_aluno = $id_aluno";

mysqli_query($conexao, $query);

header('location:index.php?pagina=aluno');

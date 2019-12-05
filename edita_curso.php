<?php

include 'database/db.php';

$id_curso = $_POST['id_curso'];
$nome_curso = $_POST['nome_curso'];
$carga_horaria = $_POST['carga_horaria'];
$id_professor = $_POST['escolha_professor'];

$query = "UPDATE curso SET nome_curso = '$nome_curso', carga_horaria = $carga_horaria, id_professor = $id_professor WHERE id_curso = $id_curso";
mysqli_query($conexao, $query);
header('location:index.php?pagina=curso');
?>

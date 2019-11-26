<?php

$servidor = "localhost";
$usuario = "root";
$senha = "";
$db = "solutions_agile";

$conexao = mysqli_connect($servidor, $usuario, $senha, $db);

$query = "SELECT * FROM curso";
$consulta_curso = mysqli_query($conexao, $query);

$query = "SELECT * FROM aluno";
$consulta_aluno = mysqli_query($conexao, $query);

$query = "SELECT * FROM professor";
$consulta_professor = mysqli_query($conexao, $query);

$query = "SELECT aluno_curso.id_aluno_curso, aluno.nome_aluno, curso.nome_curso
          FROM aluno, curso, aluno_curso
          WHERE aluno_curso.id_aluno = aluno.id_aluno
          AND aluno_curso.id_curso = curso.id_curso";
$consulta_matricula = mysqli_query($conexao, $query);

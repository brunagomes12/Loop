<?php

# Base de dados
include 'database/db.php';

# Cabeçalho
include 'header.php';

# Conteúdo da página

if(isset($_GET['pagina'])){
  $pagina = $_GET['pagina'];
}else{
  $pagina = 'home';
}

switch ($pagina) {
  case 'curso':
    include 'views/curso.php';
    break;
  case 'aluno':
    include 'views/aluno.php';
    break;
  case 'professor':
    include 'views/professor.php';
    break;
  case 'quem_somos':
    include 'views/quem_somos.php';
    break;
  case 'matricula':
    include 'views/matricula.php';
    break;
  case 'inserir_curso':
    include 'views/inserir_curso.php';
    break;
  case 'inserir_aluno':
    include 'views/inserir_aluno.php';
    break;
  case 'inserir_professor':
    include 'views/inserir_professor.php';
    break;
  case 'inserir_matricula':
    include 'views/inserir_matricula.php';
    break;
  default:
    include 'views/home.php';
    break;
}

# Rodapé
include 'footer.php';

<?php

#Iniciar sessão
session_start();

# Base de dados
include 'database/db.php';

# Cabeçalho
include 'header.php';

# Conteúdo da página
if(isset($_SESSION['login'])){
  if(isset($_GET['pagina'])){
    $pagina = $_GET['pagina'];
  }else{
    $pagina = 'home';
  }
} else {
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
    include 'controllers/inserir_curso.php';
    break;
  case 'inserir_aluno':
    include 'controllers/inserir_aluno.php';
    break;
  case 'inserir_professor':
    include 'controllers/inserir_professor.php';
    break;
  case 'inserir_matricula':
    include 'controllers/inserir_matricula.php';
    break;
  default:
    include 'views/home.php';
    break;
}

# Rodapé
include 'footer.php';

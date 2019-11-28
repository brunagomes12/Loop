<!DOCTYPE html>
<html>
<head>
  <title>Cusos PHP&MYSQL</title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
  <script src="https://kit.fontawesome.com/987434ab31.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="css/estilo.css">
</head>
<body>
  <header>
    <div class="container">
      <a href="?pagina=home"><img src="image/logo_pequeno.png" title="Logo" alt="Logo">
      <div id="menu"></a>
        <a href="?pagina=curso"> Cursos&Treinamentos</a>
        <a href="?pagina=aluno">Alunos</a>
        <a href="?pagina=professor">Professores</a>
        <a href="?pagina=quem_somos">Quem Somos</a>
        <a href="?pagina=matricula">Matrículas</a>
        <?php if (isset($_SESSION['login'])) { ?>
          <a href="logout.php"><?php echo $_SESSION['usuario']; ?> (sair)</a>
        <?php } ?>
      </div>
    </div>
  </header>
  <div id="conteudo" class="container">

<h1 style="text-align:center">Bem vindo ao LOOP Couses&Training</h1>
<?php if (!isset($_SESSION['login'])) { ?>
  <form method="post" action="login.php">
    <label>Usuário:</label>
    <input type="text" name="usuario" placeholder="Nome do usuário" class="form-control">
    <br>
    <label>Senha:</label>
    <input type="password" name="senha" placeholder="Digite sua senha" class="form-control">
    <br>
    <input type="submit" value="Entrar" class="btn btn-success">
  </form>
  <?php if(isset($_GET['erro'])){ ?>
    <br>
    <div class="alert alert-danger" role="alert">
      Usuário e/ou senha inválidos!
    </div>
  <?php } ?>
<?php } ?>

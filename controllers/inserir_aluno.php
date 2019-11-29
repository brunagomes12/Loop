<?php if(!isset($_GET['editar'])){ ?>
<h1>Inserir novo aluno</h1>
<form method="post" action="models/processa_aluno.php">
  <br>
  <label>Nome do aluno:</label>
  <input type="text" class="form-control" name="nome_aluno" placeholder="Insira o nome">
  <br>
  <label>CPF:</label>
  <input type="text" class="form-control" name="cpf" placeholder="Insira o CPF">
  <br>
  <label>Data de nascimento:</label>
  <input type="date" class="form-control" name="data_nascimento" placeholder="Insira a data de nascimento">
  <br>
  <label>Telefone:</label>
  <input type="text" class="form-control" name="telefone" placeholder="Insira o telefone">
  <br>
  <label>E-mail:</label>
  <input type="email" class="form-control" name="email" placeholder="Insira o e-mail">
  <br>
  <input type="submit" class="btn btn-success" value="Cadastrar aluno">
</form>

<?php } else { ?>
  <?php while($linha = mysqli_fetch_array($consulta_aluno)){ ?>
    <?php if($linha['id_aluno'] == $_GET['editar']){ ?>
      <h1>Editar aluno</h1>
        <form method="post" action="models/edita_aluno.php">
          <input type="hidden" name="id_aluno" value="<?php echo $linha['id_aluno']; ?>">
          <br>
          <label>Nome do aluno:</label>
          <input type="text" class="form-control" name="nome_aluno" placeholder="Insira o nome" value="<?php echo $linha['nome_aluno']; ?>">
          <br>
          <label>CPF:</label>
          <input type="text" class="form-control" name="cpf" placeholder="Insira o CPF" value="<?php echo $linha['cpf']; ?>">
          <br>
          <label>Data de nascimento:</label>
          <input type="date" class="form-control" name="data_nascimento" placeholder="Insira a data de nascimento"  value="<?php echo $linha['data_nascimento']; ?>">
          <br>
          <label>Telefone:</label>
          <input type="text" class="form-control" name="telefone" placeholder="Insira o telefone" value=" <?php echo $linha['telefone']; ?>">
          <br>
          <label>E-mail:</label>
          <input type="email" class="form-control" name="email" placeholder="Insira o e-mail" value=" <?php echo $linha['email']; ?>">
          <br>
          <input type="submit" class="btn btn-success" value="Editar aluno">
        </form>
    <?php } ?>
  <?php } ?>
<?php } ?>

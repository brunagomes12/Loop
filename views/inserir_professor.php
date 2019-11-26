<?php if(!isset($_GET['editar'])){ ?>
<h1>Inserir novo professor</h1>
<form method="post" action="processa_professor.php">
  <br>
  <label>Nome do professor:</label>
  <input type="text" name="nome_professor" placeholder="Insira o nome">
  <br>
  <label>CPF:</label>
  <input type="text" name="cpf" placeholder="Insira o CPF">
  <br>
  <label>Data de nascimento:</label>
  <input type="date" name="data_nascimento" placeholder="Insira a data de nascimento">
  <br>
  <label>Telefone:</label>
  <input type="text" name="telefone" placeholder="Insira o telefone">
  <br>
  <label>E-mail:</label>
  <input type="email" name="email" placeholder="Insira o e-mail">
  <br>
  <input type="submit" value="Cadastrar professor">
</form>

<?php } else { ?>
  <?php while($linha = mysqli_fetch_array($consulta_professor)){ ?>
    <?php if($linha['id_professor'] == $_GET['editar']){ ?>
      <h1>Editar professor</h1>
        <form method="post" action="edita_professor.php">
          <input type="hidden" name="id_professor" value="<?php echo $linha['id_professor']; ?>">
          <br>
          <label>Nome do professor:</label>
          <input type="text" name="nome_professor" placeholder="Insira o nome" value="<?php echo $linha['nome_professor']; ?>">
          <br>
          <label>CPF:</label>
          <input type="text" name="cpf" placeholder="Insira o CPF" value="<?php echo $linha['cpf']; ?>">
          <br>
          <label>Data de nascimento:</label>
          <input type="date" name="data_nascimento" placeholder="Insira a data de nascimento" value="<?php echo $linha['data_nascimento']; ?>">
          <br>
          <label>Telefone:</label>
          <input type="text" name="telefone" placeholder="Insira o telefone" value=" <?php echo $linha['telefone']; ?>">
          <br>
          <label>E-mail:</label>
          <input type="email" name="email" placeholder="Insira o e-mail" value=" <?php echo $linha['email']; ?>">
          <br>
          <input type="submit" value="Editar professor">
        </form>
    <?php } ?>
  <?php } ?>
<?php } ?>

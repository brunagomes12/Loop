<h1>Inserir nova matrícula</h1>

<br><br>
<form method="post" action="models/processa_matricula.php">
  <p>Selecione o aluno:</p>
  <select name="escolha_aluno" class="form-control">
    <option>Selecione um aluno</option>
    <?php
    while($linha = mysqli_fetch_array($consulta_aluno)){
      echo '<option value="'.$linha['id_aluno'].'">'.$linha['nome_aluno'].'</option>';
    }
    ?>
  </select>
  <br><br>
  <p>Selecione o curso:</p>
  <select name="escolha_curso" class="form-control">
    <option>Selecione um curso</option>
    <?php
    while($linha = mysqli_fetch_array($consulta_curso)){
      echo '<option value="'.$linha['id_curso'].'">'.$linha['nome_curso'].'</option>';
    }
    ?>
  </select>
  <br><br>
  <input type="submit" class="btn btn-success" value="Matricular aluno no curso">
</form>

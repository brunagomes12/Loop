<table class="table table-hover table-striped" id="matricula">
  <thead>
    <tr>
      <th>Nome do aluno</th>
      <th>Nome do curso</th>
      <th>Deletar</th>
    </tr>
  </thead>
  <tbody>
    <?php
      while ($linha = mysqli_fetch_array($consulta_matricula)) {
        echo '<tr><td>'.$linha['nome_aluno'].'</td>';
        echo '<td>'.$linha['nome_curso'].'</td>';
    ?>
     <td><a href="deleta_matricula.php?id_aluno_curso=<?php echo $linha['id_aluno_curso']; ?>">
       <i class="far fa-trash-alt"></i>
     </a></td></tr>
   <?php
     }
   ?>
  </tbody>
</table>

<a class="btn btn-success" href="?pagina=inserir_matricula">Inserir nova matricula</a>

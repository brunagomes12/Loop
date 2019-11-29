<br>
<table class="table table-hover table-striped" id="aluno">
  <thead>
    <tr>
      <th>Nome do aluno</th>
      <th>Data de nascimento</th>
      <th>Editar</th>
      <th>Deletar</th>
      <th>Visualizar</th>
    </tr>
  </thead>
  <tbody>
    <?php
      while ($linha = mysqli_fetch_array($consulta_aluno)) {
        echo '<tr><td>'.$linha['nome_aluno'].'</td>';
        echo '<td>'.$linha['data_nascimento'].'</td>';
    ?>
     <td><a href="?pagina=inserir_aluno&editar=<?php echo $linha['id_aluno']; ?>">
       <i class="fas fa-user-edit"></i>
     </a></td>
     <td><a href="models/deleta_aluno.php?id_aluno=<?php echo $linha['id_aluno']; ?>">
       <i class="fas fa-trash"></i>
     </a></td>
     <td><a>
       <i class="fas fa-eye"></i>
     </a></td></tr>
    <?php
     }
    ?>
  </tbody>
</table>
<a class="btn btn-success" href="?pagina=inserir_aluno">Inserir aluno</a>

<br>
<table class="table table-hover table-striped" id="professor">
  <thead>
    <tr>
      <th>Nome do professor</th>
      <th>Data de nascimento</th>
      <th>Editar</th>
      <th>Deletar</th>
      <th>Visualizar</th>
    </tr>
  </thead>
  <tbody>
    <?php
      while ($linha = mysqli_fetch_array($consulta_professor)) {
        echo '<tr><td>'.$linha['nome_professor'].'</td>';
        echo '<td>'.$linha['data_nascimento'].'</td>';
    ?>
     <td><a href="?pagina=inserir_professor&editar=<?php echo $linha['id_professor']; ?>">
       <i class="fas fa-user-edit"></i>
     </a></td>
     <td><a href="deleta_professor.php?id_professor=<?php echo $linha['id_professor']; ?>">
       <i class="fas fa-trash"></i>
     </a></td>
     <td><a>
       <i class="fas fa-eye"></i>
     </a></td></tr>
   <?php
     }
   ?>
</table>
<a class="btn btn-success" href="?pagina=inserir_professor">Inserir professor</a>

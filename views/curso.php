<a href="?pagina=inserir_curso">Inserir curso</a>

<table style="border:1px solid #ccc; width: 100%">
  <tr>
    <th>Nome do curso</th>
    <th>Carga horária</th>
    <th>Ações</th>
  </tr>

  <?php
    while($linha = mysqli_fetch_array($consulta_curso)){
      echo '<tr><td>'.$linha['nome_curso'].'</td>';
      echo '<td>'.$linha['carga_horaria'].'</td>';
   ?>
    <td><a href="?pagina=inserir_curso&editar=<?php echo $linha['id_curso']; ?>">Editar</a></td>
    <td><a href="deleta_curso.php?id_curso=<?php echo $linha['id_curso']; ?>">Deletar</a></td></tr>
  <?php
    }
  ?>
</table>

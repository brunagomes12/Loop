<a href="?pagina=inserir_professor">Inserir professor</a>
<br>
<table style="border:1px solid #ccc; width:100%">
  <tr>
    <th>Nome do professor</th>
    <th>Data de nascimento</th>
    <th>Ações</th>
  </tr>
  <?php
    while ($linha = mysqli_fetch_array($consulta_professor)) {
      echo '<tr><td>'.$linha['nome_professor'].'</td>';
      echo '<td>'.$linha['data_nascimento'].'</td>';
  ?>
   <td><a href="?pagina=inserir_professor&editar=<?php echo $linha['id_professor']; ?>">Editar</a></td>
   <td><a href="deleta_professor.php?id_professor=<?php echo $linha['id_professor']; ?>">Deletar</a></td></tr>
  <?php
   }
  ?>
</table>

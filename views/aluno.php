<a href="?pagina=inserir_aluno">Inserir aluno</a>
<br>
<table style="border:1px solid #ccc; width:100%">
  <tr>
    <th>Nome do aluno</th>
    <th>Data de nascimento</th>
    <th>Ações</th>
  </tr>
  <?php
    while ($linha = mysqli_fetch_array($consulta_aluno)) {
      echo '<tr><td>'.$linha['nome_aluno'].'</td>';
      echo '<td>'.$linha['data_nascimento'].'</td>';
  ?>
   <td><a href="?pagina=inserir_aluno&editar=<?php echo $linha['id_aluno']; ?>">Editar</a></td>
   <td><a href="deleta_aluno.php?id_aluno=<?php echo $linha['id_aluno']; ?>">Deletar</a></td></tr>
  <?php
   }
  ?>
</table>

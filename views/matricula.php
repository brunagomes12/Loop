<table style="border:1px solid #ccc; width:100%">
  <tr>
    <th>Nome do aluno</th>
    <th>Nome do curso</th>
  </tr>
  <?php
    while ($linha = mysqli_fetch_array($consulta_matricula)) {
      echo '<tr><td>'.$linha['nome_aluno'].'</td>';
      echo '<td>'.$linha['nome_curso'].'</td>';
  ?>
   <td><a href="deleta_matricula.php?id_aluno_curso=<?php echo $linha['id_aluno_curso']; ?>">Deletar</a></td></tr>
 <?php
   }
 ?>
</table>

<a class="btn btn-sucess" href="?pagina=inserir_matricula">Inserir nova matricula</a>

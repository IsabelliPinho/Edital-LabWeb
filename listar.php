<?php
require_once "conectar.php";


$sql = "SELECT * FROM aluno";

$resultado = mysqli_query($conn,$sql);

echo "<table>";
echo "<tr> <th>Nome Completo</th> <th>Concorrência</th> <th>Nome Social</th>  <th>Endereço</th>  <th>Município</th>  <th>Bairro</th>  <th>Estado</th>  <th>CPF</th>
<th>CEP</th>  <th>RG</th>  <th>Data de Nascimento</th>   <th>Deficiência</th>  <th>Gênero</th>  <th>Curso</th>  <th>Português 6°ano</th>  <th>Português 7°ano</th> 
 <th>Português 8°ano</th>  <th>Português 9°ano</th>  <th>Matemática 6°ano</th> <th>Matemática 7°ano</th>  <th>Matemática 8°ano</th>  <th>Matemática 9°ano</th> 
 <th>Ciências 6°ano</th>  <th>Ciências 7°ano</th>  <th>Ciências 8°ano</th> <th>Ciências 9°ano</th> <th>História 6°ano</th>  <th>História 7°ano</th>  <th>História 8°ano</th> <th>História 9°ano</th>  <th>Geografia 6°ano</th>  <th>Geografia 7°ano</th> <th>Geografia 8°ano</th>  <th>Geografia 9°ano</th>  <th>Inglês 6°ano</th> <th>Inglês 7°ano</th>  <th>Inglês 8°ano</th>  <th>Inglês 9°ano</th> <th>Artes 6°ano</th>  <th>Artes 7°ano</th>  <th>Artes 8°ano</th> <th>Artes 9°ano</th>
 <th>E.Física 6°ano</th>  <th>E.Física 7°ano</th>  <th>E.Física 8°ano</th> <th>E.Física 9°ano</th>  </tr>";
 
 while($row = mysqli_fetch_assoc($resultado)) {
     echo'<tr>';
     echo'<td>'.$row['nome_completo'].'</td>';
     echo'<td>'.$row['concorrencia'].'</td>';
     echo'<td>'.$row['nome_social'].'</td>';
     echo'<td>'.$row['endereco'].'</td>';
     echo'<td>'.$row['municipio'].'</td>';
     echo'<td>'.$row['bairro'].'</td>';
     echo'<td>'.$row['estado'].'</td>';
     echo'<td>'.$row['cpf'].'</td>';
     echo'<td>'.$row['cep'].'</td>';
     echo'<td>'.$row['rg'].'</td>';
     echo'<td>'.$row['data_nasc'].'</td>';
     echo'<td>'.$row['deficiencia'].'</td>';
     echo'<td>'.$row['genero'].'</td>';
     echo'<td>'.$row['curso'].'</td>';
     echo'<td>'.$row['portugues6'].'</td>';
     echo'<td>'.$row['portugues7'].'</td>';
     echo'<td>'.$row['portugues8'].'</td>';
     echo'<td>'.$row['portugues9'].'</td>';
     echo'<td>'.$row['matematica6'].'</td>';
     echo'<td>'.$row['matematica7'].'</td>';
     echo'<td>'.$row['matematica8'].'</td>';
     echo'<td>'.$row['matematica9'].'</td>';
     echo'<td>'.$row['ciencias6'].'</td>';
     echo'<td>'.$row['ciencias7'].'</td>';
     echo'<td>'.$row['ciencias8'].'</td>';
     echo'<td>'.$row['ciencias9'].'</td>';
     echo'<td>'.$row['historia6'].'</td>';
     echo'<td>'.$row['historia7'].'</td>';
     echo'<td>'.$row['historia8'].'</td>';
     echo'<td>'.$row['historia9'].'</td>';
     echo'<td>'.$row['geografia6'].'</td>';
     echo'<td>'.$row['geografia7'].'</td>';
     echo'<td>'.$row['geografia8'].'</td>';
     echo'<td>'.$row['geografia9'].'</td>';
     echo'<td>'.$row['ingles6'].'</td>';
     echo'<td>'.$row['ingles7'].'</td>';
     echo'<td>'.$row['ingles8'].'</td>';
     echo'<td>'.$row['ingles9'].'</td>';
     echo'<td>'.$row['artes6'].'</td>';
     echo'<td>'.$row['artes7'].'</td>';
     echo'<td>'.$row['artes8'].'</td>';
     echo'<td>'.$row['artes9'].'</td>';
     echo'<td>'.$row['edfisica6'].'</td>';
     echo'<td>'.$row['edfisica7'].'</td>';
     echo'<td>'.$row['edfisica8'].'</td>';
     echo'<td>'.$row['edfisica9'].'</td>';
     
     echo"<td>'<a href = 'editar.php?id=".$row["nome_completo"]."'>Editar</a></td>";
     
     echo'</tr>';
 }
 echo '</table>';
 mysqli_close($conn);
 ?>

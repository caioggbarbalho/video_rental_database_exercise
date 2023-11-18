<?php

include_once('connection.php');

$query = mysqli_query($connection, "select * from film_table order by id");

if (!$query) {
  die('Query Inválida: ' . @mysqli_error($connection));  
}

echo "<table border='1px'>";
echo "<tr><th width='30px' align='center'>Id</th>
      <th width='100px'>Título</th>
      <th width='100px'>Gênero</th>
      <th width='400px'>Sinopse</th>
      <th width='100px'>Diretor</th>
      <th width='100px'>Data</th>
      <th width='100px'>Nota</th>
      <th width='200px'>Poster</th>
      </tr>";

while($data=mysqli_fetch_array($query)) {
  echo "<tr>";
  echo "<td align='center'>". $data['id']."</td>";
  echo "<td>". $data['nome']."</td>";
  echo "<td>". $data['genero']."</td>";
  echo "<td>". $data['sinopse']."</td>";
  echo "<td>". $data['diretor']."</td>";
  echo "<td>". $data['data']."</td>";
  echo "<td>". $data['nota']."</td>";		
  // buscando na pasta imagem
  echo "<td> <img src='img/".$data['imagem']."'></td>";
  echo "</tr>";
}

echo "</table>";
	
	mysqli_close($connection);
?>
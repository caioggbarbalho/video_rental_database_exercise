<?php

include_once('connection.php');

$query = mysqli_query($connection, "select * from film_table order by id");

if (!$query) {
  die('Query Inválida: ' . @mysqli_error($connection));  
}

echo "<div class='card-slider'>";

while ($data = mysqli_fetch_array($query)) {
  echo "<div class='card' data-id='" . $data['id'] . "' data-nome='" . $data['nome'] . "' data-genero='" . $data['genero'] . "' data-sinopse='" . $data['sinopse'] . "' data-diretor='" . $data['diretor'] . "' data-data='" . $data['data'] . "' data-nota='" . $data['nota'] . "' data-imagem='" . $data['imagem'] . "'>";
  
  echo "<h2>" . "ID " .$data['id'] . " - " . $data['nome'] . "</h2>";

  echo "<div class='info'>";
  echo "<h4>" . $data['genero'] . "</h4>";
  echo "<p>" . "Nota <strong>" . $data['nota'] . "</strong></p>";
  echo "</div>";

  echo "<h5>" . $data['diretor'] . " - " . $data['data'] . "</h5>";
  echo "<p>" . $data['sinopse'] . "</p>";
  echo "<img src='img/" . $data['imagem'] . "' alt='Movie Poster'>";

  echo "<div class='alugar'>";
  echo "<input type='button' value='Alugar' onclick=\"window.open('http://www.pirate-bays.net/search?q=" . urlencode($data['nome']) . "')\">";
  echo "</div>";
  
  echo "</div>";

 
}


echo "</div>";

mysqli_close($connection);
?>
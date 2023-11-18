<?php

include_once('connection.php');

$query = mysqli_query($connection, "select * from film_table order by id");

if (!$query) {
  die('Query Inválida: ' . @mysqli_error($connection));  
}

echo "<div class='card-slider'>";

while ($data = mysqli_fetch_array($query)) {
    echo "<div class='card' data-id='" . $data['id'] . "' data-nome='" . $data['nome'] . "' data-genero='" . $data['genero'] . "' data-sinopse='" . $data['sinopse'] . "' data-diretor='" . $data['diretor'] . "' data-data='" . $data['data'] . "' data-nota='" . $data['nota'] . "' data-imagem='" . $data['imagem'] . "'>";
    echo "<img src='img/" . $data['imagem'] . "' alt='Movie Poster'>";
    echo "<h2>" . $data['nome'] . "</h2>";
    echo "<p>" . $data['sinopse'] . "</p>";
    echo "</div>";
}

echo "</div>";

mysqli_close($connection);
?>
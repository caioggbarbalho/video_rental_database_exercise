<?php
	$host = "localhost"; 			
	$user = "root"; 
	$pass = ""; 
	$table = "sql_exercise";
		
	$connection = @mysqli_connect($host, $user, $pass, $table ) 
	or die ("Problemas com a conexão do Banco de Dados");
?>
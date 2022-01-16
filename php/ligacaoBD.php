<?php

//definição de variáveis com as especificações de ligação à base de dados
$servername = "localhost";
$user = "root";
$pass = "";
$db = "fsjoalharia";


//criação da ligação, associando essa ligação à variável $liga
$liga = mysqli_connect($servername,$user,$pass,$db);
//implementar esta linha por causa dos caracteres especiais provenientes da base de dados
mysqli_query($liga,"SET CHARACTER SET 'utf8'");

//caso a ligação não seja bem sucedida, termina essa ligação e mostra a mensagem de erro
if(!$liga){
	die("A Ligação Falhou. ".mysqli_connect_error());
}
//echo "Ligação estabelecida com sucesso!";


?>
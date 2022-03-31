<?php

//receber os valores que são enviados pelo formulário de registo de utilizador

//$id = $_GET['iduser'];
$nome = $_POST['nome'];
$login = $_POST['login'];
$email = $_POST['email'];
$password = $_POST['password'];

//incluir o ficheiro de ligação à base de dados, para que a variável $liga possa ser utilizada
include "ligacaoBD.php";

//construção da query de inserção do registo na base de dados
$query = "INSERT INTO utilizador (iduser, email, login, nome, password) VALUES (NULL, '$email', '$login', '$nome', '$password')";

//se a query estiver correta, executa e mostra mensagem de registo adicionado
if(mysqli_query($liga,$query))
{
	$mesg = "Registo Inserido com Sucesso";
	echo "<script>alert('$mesg')</script>";
	echo "<a href='lista-utilizador.php'>voltar</a>";
}
else
{   //caso a query falhe, mostra mensagemd e erro
	echo "Erro: ".$query."<br>".mysqli_error($liga);
}
//no final deve ser desligada a ligação
mysqli_close($liga);

?>
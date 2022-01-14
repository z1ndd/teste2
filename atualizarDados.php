<?php

//receber os valores que são enviados pelo formulário de registo de utilizador

$id = $_GET['id'];
$nome = $_POST['nome'];
$login = $_POST['login'];
$email = $_POST['mail'];
$password = $_POST['pass'];

//incluir o ficheiro de ligação à base de dados, para que a variável $liga possa ser utilizada
include "ligacaoBD.php";

//construção da query de inserção do registo na base de dados
$query = "UPDATE utilizador SET login ='$login', nome='$nome', email='$email',password='$password' WHERE iduser = $id";

//se a query estiver correta, executa e mostra mensagem de registo adicionado
if(mysqli_query($liga,$query ))
{
	$mesg = "Registo Alterado com Sucesso";
	echo "<script>alert('$mesg')</script>";
	/* header("location: listaUsers.php"); */
	echo "<a href='listaUtilizadores.php'>voltar</a>";
}
else
{   //caso a query falhe, mostra mensagemd e erro
	echo "Erro: ".$query."<br>".mysqli_error($liga);
}
//no final deve ser desligada a ligação
mysqli_close($liga);

?>
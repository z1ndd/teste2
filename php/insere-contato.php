<?php

//receber os valores que são enviados pelo formulário de registo de utilizador

$nome = $_POST['name'];
$email = $_POST['email'];
$comentario = $_POST['comment'];

//incluir o ficheiro de ligação à base de dados, para que a variável $liga possa ser utilizada
include "ligacaoBD.php";

//construção da query de inserção do registo na base de dados
$query = "INSERT INTO contactos (nome, email, comentario) VALUES ('$nome', '$email', '$comentario')";
//$query = "INSERT INTO contactos (id, nome, email, comentario) VALUES ('uuid()','$nome', '$email', '$comentario')";

//se a query estiver correta, executa e mostra mensagem de registo adicionado
if(mysqli_query($liga,$query ))
{
	$mesg = "Comentário Enviado.";
	echo "<script>alert('$mesg')</script>";
    echo "<a href='contactos.php'><button>Voltar</button></a>";
}
else
{   //caso a query falhe, mostra mensagemd e erro
	echo "Erro: ".$query."<br>".mysqli_error($liga);
}
//no final deve ser desligada a ligação
mysqli_close($liga);

?>
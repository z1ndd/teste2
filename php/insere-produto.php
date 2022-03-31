<?php

//receber os valores que são enviados pelo formulário de registo de utilizador

$nome = $_POST['nome'];
$categoria = $_POST['categoria'];

//incluir o ficheiro de ligação à base de dados, para que a variável $liga possa ser utilizada
include "ligacaoBD.php";

//construção da query de inserção do registo na base de dados
$query = "INSERT INTO produtos (id, nome, categoria) VALUES (NULL, '$nome', '$categoria')";

//se a query estiver correta, executa e mostra mensagem de registo adicionado
if(mysqli_query($liga,$query))
{
	$mesg = "Registo Alterado com Sucesso";
	echo "<script>alert('$mesg')</script>";
	echo "<a href='lista-produto.php'>Voltar</a>";
}
else
{   //caso a query falhe, mostra mensagemd e erro
	echo "Erro: ".$query."<br>".mysqli_error($liga);
}
//no final deve ser desligada a ligação
mysqli_close($liga);

?>
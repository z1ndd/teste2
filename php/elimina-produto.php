<?php

//inicialmente devemos obter o valor que é passado no url para saber qual o id do user a eliminar
$id = $_GET['id'];

//construção da query de eliminação do registo especifico
$query = "DELETE FROM produtos WHERE id=$id";

//inclusão do ficheiro de ligação à base de dados, para a utilização da variável $liga
include "ligacaoBD.php";

//se a query for executada com sucesso
if(mysqli_query($liga, $query)){
	$mesg = "Utilizador eliminado com sucesso.";
	echo "<script>alert('$mesg')</script>";
    echo "<a href='./lista-produto.php'><button>Voltar</button></a>";
}else{ //caso contrário, mostra o erro
	echo "Erro: ".$query."<br>".mysqli_error($liga);
}
//término da ligação à base de dados
mysqli_close($liga);

?>
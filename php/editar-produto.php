<?php $title = 'Editar Produto';
$currentPage = 'edita-produto';
include('../elements/head-admin.php');
include('../elements/navbar-admin.php'); ?>

<body>
	<?php

	if (!isset($_GET['id'])) {
		header("location: lista-produto.php");
	} else {
		$id = $_GET['id'];
	}
	include "ligacaoBD.php";

	$query = "SELECT * FROM produto WHERE id =$id";
	$resultado = mysqli_query($liga, $query);	
	if (mysqli_num_rows($resultado) > 0) {
		$row = mysqli_fetch_assoc($resultado);
	?>
		<form class="col-md-6 w-50" style="margin-left:25%" action="insere-produto.phpid=<?php echo $row['id']; ?>" method="POST" id="form1">
			<div class="form-group">
				<label for="nome">Nome do Produto</label>
				<input type="text" name="nome" class="form-control" id="nome" placeholder="Insira o nome do produto" minlength="8" maxlength="45" value="<?php echo $row['nome']; ?>" required>
			</div>
			<div class="form-group">
				<label for="categoria">Categoria</label>
				<input type="text" name="categoria" class="form-control" id="categoria" placeholder="Insira a categoria do produto" minlength="8" maxlength="45" value="<?php echo $row['categoria']; ?>" required>
			</div>
			<center><br><button type="submit" class="btn btn-primary">Atualizar Dados</button></center>
		</form>

	<?php
	} else {
		echo "Não há resultados";
	}

	?>
	<script>
		$("#form1").validate({
			rules: {
				repass: {
					equalTo: "#pass"
				}
			}
		});
	</script>
</body>
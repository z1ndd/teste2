<?php $title = 'Editar Utilizador';
$currentPage = 'edita-utilizador';
include('../elements/head-admin.php');
include('../elements/navbar-admin.php'); ?>

<body>
	<?php

	if (!isset($_GET['id'])) {
		header("location: lista-utilizador.php");
	} else {
		$id = $_GET['id'];
	}
	include "ligacaoBD.php";

	$query = "SELECT * FROM utilizador WHERE iduser =$id";
	$resultado = mysqli_query($liga, $query);
	if (mysqli_num_rows($resultado) > 0) {
		$row = mysqli_fetch_assoc($resultado);
	?>
		<form class="col-md-6 w-50" style="margin-left:25%" action="edita-utilizador.php?id=<?php echo $row['iduser']; ?>" method="POST" id="form1">
			<div class="form-group">
				<label for="nome" style="text-align: left;">Nome</label>
				<input type="text" name="nome" class="form-control" id="nome" placeholder="Insira o seu nome" minlength="8" maxlength="45" value="<?php echo $row['nome']; ?>" required>
			</div>
			<div class="form-group">
				<label for="login">Login</label>
				<input type="text" name="login" class="form-control" id="login" placeholder="Insira o seu login" value="<?php echo $row['login']; ?>" required>
			</div>
			<div class="form-group">
				<label for="mail">Email</label>
				<input type="email" name="email" class="form-control" id="email" placeholder="Insira o seu email" value="<?php echo $row['email']; ?>" required>
			</div>
			<div class="form-group">
				<label for="pass">Password</label>
				<input type="password" name="pass" class="form-control" id="pass" placeholder="Insira a sua password" value="<?php echo $row['password']; ?>" required>
			</div>
			<div class="form-group">
				<label for="repass">Repetir Password</label>
				<input type="password" name="repass" class="form-control" id="repass" placeholder="Confirme a password" value="<?php echo $row['password']; ?>" required>
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
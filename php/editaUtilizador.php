<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <title>Inserir Dados</title>
</head>

<body> 
	
	<!-- navbar Admin -->
	<nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="../index.php">FSJoalharia</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-link active" aria-current="page" href="../index.php">Home</a>
          <a class="nav-link" href="inserirUtilizador.php">Inserir utilizador</a>
          <a class="nav-link" href="listaUtilizadores.php">Listar/Alterar/Eliminar utilizadores</a>
          <a class="nav-link" href="#">Inserir produtos</a>
          <a class="nav-link" href="#">Listar produtos</a>
          <a class="nav-link" href="listaContactos.php">Listar contactos</a>
        </div>
        </div>
      </div>
    </nav>
	<!-- fim navbar -->
	<br>
	<br>
	<br>
	<br>
    <?php

	if (!isset($_GET['id'])) {
		header("location: listaUtilizadores.php");
	} else {
		$id = $_GET['id'];
	}
	include "ligacaoBD.php";

	$query = "SELECT * FROM utilizador WHERE iduser =$id";
	$resultado = mysqli_query($liga, $query);
	if (mysqli_num_rows($resultado) > 0) {
		$row = mysqli_fetch_assoc($resultado);
	?>
		<form class="col-md-6 w-50" style="margin-left:25%" action="atualizarDados.php?id=<?php echo $row['iduser']; ?>" method="POST" id="form1">
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
				<input type="email" name="mail" class="form-control" id="mail" placeholder="Insira o seu email" value="<?php echo $row['email']; ?>" required>
			</div>
			<div class="form-group">
				<label for="pass">Password</label>
				<input type="password" name="pass" class="form-control" id="pass" placeholder="Insira a sua password" value="<?php echo $row['password']; ?>" required>
			</div>
			<div class="form-group">
				<label for="repass">Password</label>
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

	</center>
</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>


	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Inserir</title>
</head>

<body> 		
<header class="navbar navbar-default navbar-static-top">
    <nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="./index.php">FSJoalharia</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                <div class="navbar-nav">
                    <a class="nav-link" href="index.php">Home</a>
                    <a class="nav-link" href="inserirUtilizador.php">Inserir Utilizador</a>
                    <a class="nav-link" href="listaUtilizador.php">Listar/Alterar/Eliminar Utilizadores</a>
                    <a class="nav-link" href="#">Inserir produtos</a>
                    <a class="nav-link" href="#">Listar produtos</a>
                    <a class="nav-link" href="#">Listar contactos</a>
                </div>
            </div>
        </div>
    </nav><br><br><br>
</header>
	<!-- inserir user --> 

	<?php
	
	if (!isset($_GET['id'])) {
		header("location: listaUtilizador.php");
	} else {
		$id = $_GET['id'];
	} 
	include "ligacaoBD.php"; 

	$query = "SELECT * FROM utilizador WHERE iduser =$id";
	$resultado = mysqli_query($liga, $query);
	if (mysqli_num_rows($resultado) > 0) {
		$row = mysqli_fetch_assoc($resultado);

	?>
	
	<form class="col-md-6 w-50" style="margin-left:25%" action="atualizaDados.php?id=<?php echo $row['iduser']; ?>" method="POST" id="form1">
		<div class="form-group">
			<label for="nome" style="text-align: left;">Nome</label>
			<input type="text" name="nome" class="form-control" id="nome" placeholder="Insira o seu nome" minlength="8" maxlength="45" required>
		</div>
		<div class="form-group">
			<label for="login">Login</label>
			<input type="text" name="login" class="form-control" id="login" placeholder="Insira o seu login"  required>
		</div>
		<div class="form-group">
			<label for="mail">Email</label>
			<input type="email" name="mail" class="form-control" id="mail" placeholder="Insira o seu email" required>
		</div>
		<div class="form-group">
			<label for="pass">Password</label>
			<input type="password" name="password" class="form-control" id="password" placeholder="Insira a sua password" required>
		</div>
		<div class="form-group">
			<label for="repass">Password</label>
			<input type="password" name="repass" class="form-control" id="repass" placeholder="Confirme a password" required>
		</div>
		<center><br><button type="submit" class="btn btn-primary">Inserir Dados</button></center>

	</form>

	<?php
	
	} else {
		echo "Não há resultados";
	}

	?>
</body>

</html>

<?php   $title = 'Inserir Utilizador';
        $currentPage = 'inserirUtilizador';
        include('./elements/head.php');
        include('./elements/navbar.php'); ?>

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
          <a class="nav-link" href="inserirUtilizador.php">Inserir Utilizador</a>
          <a class="nav-link" href="listaUtilizadores.php">Listar/Alterar/Eliminar Utilizadores</a>
          <a class="nav-link" href="#">Inserir Produtos</a>
          <a class="nav-link" href="#">Listar Produtos</a>
          <a class="nav-link" href="#">Listar Contatos</a>
        </div>
        </div>
      </div>
    </nav>
	<!-- fim navbar -->
	<br>
	<br>
	<br>
	<br>	
	<!-- inserir user --> 

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
	
	<form class="col-md-6 w-50" style="margin-left:25%" action="../php/atualizaDados.php?id=<?php echo $row['iduser']; ?>" method="POST" id="form1">
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

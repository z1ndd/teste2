<?php   $title = 'Inserir Utilizador';
        $currentPage = 'inserir-utilizador';
        include('../elements/head-admin.php');
        include('../elements/navbar-admin.php'); ?>
	<!-- inserir user --> 
<body>
	
	<?php
	/*
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
*/
	?>
	
	<form class="col-md-6 w-50" style="margin-left:25%" action="insere-dados.php?id=<?php echo $row['iduser']; ?>" method="POST" id="form1">
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
	/*
	} else {
		echo "Não há resultados";
	}
*/
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

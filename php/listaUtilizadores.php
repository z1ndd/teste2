<!DOCTYPE html>
<html>

<head>
	<title>Lista Utilizadores</title>

    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>


	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
          <a class="nav-link" href="#">Listar contactos</a>
        </div>
        </div>
      </div>
    </nav>
	<!-- fim navbar -->

    <br>
    <br>
    <br>

	<center>
		<table class="table" style="width: 75%">
			<!--	<table class="table table-sm table-dark"> -->
			<thead>
				<th scope="col">ID</th>
				<th scope="col">Nome</th>
				<th scope="col">Email</th>
				<th scope="col">Login</th>
				<th scope="col">Opções</th>
			</thead>

			<?php

			//incluir o ficheiro para que a variável $liga seja reconhecida
			include "ligacaoBD.php";
			//query de consulta de todos os users registados
			$query = "SELECT * FROM utilizador";

			//recuperação dos dados devolvidos pela consulta
			$resultado = mysqli_query($liga, $query);
			if (mysqli_num_rows($resultado) > 0) {
				//se devolver 1 ou mais resultados, vai preencher as linhas da tabela
				while ($row = mysqli_fetch_assoc($resultado)) {
					//enquanto houver resultados, procede-se com o preenchimento da tabela de dados
			?>

					<tr>
						<th scope="row"><?php echo $row['iduser']; ?></th>
						<td><?php echo $row['nome']; ?></td>
						<td><?php echo $row['email']; ?></td>
						<td><?php echo $row['login']; ?></td>
						<td><a href="editaUser.php?id=<?php echo $row['iduser']; ?>"><i class="fa fa-pencil"></i></a>&nbsp;&nbsp;&nbsp;<a href="eliminaUser.php?id=<?php echo $row['iduser']; ?>"><i class="fa fa-trash"></i></a></td>
					</tr>

			<?php
				}
			} else {
				echo "não há registos!";
			}

			?>
		</table>
	</center>
</body>

</html>
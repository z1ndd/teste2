<?php   $title = 'Lista de Utilizadores';
        $currentPage = 'lista-utilizador';
        include('../elements/head-admin.php');
        include('../elements/navbar-admin.php'); ?>

<body>
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
						<td><?php echo $row['login']; ?></td>
						<td><?php echo $row['email']; ?></td>
						<td><a href="editar-utilizador.php?id=<?php echo $row['iduser']; ?>"><i class="fa fa-pencil"></i></a>&nbsp;&nbsp;&nbsp;<a href="elimina-utilizador.php?id=<?php echo $row['iduser']; ?>"><i class="fa fa-trash"></i></a></td>
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
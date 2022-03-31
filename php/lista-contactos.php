<?php   $title = 'Lista Contactos';
        $currentPage = 'lista contactos';
        include('../elements/head-admin.php');
        include('../elements/navbar-admin.php'); ?>
<body>
    <br>

	<center>
		<table class="table" style="width: 75%">
			<!--	<table class="table table-sm table-dark"> -->
			<thead>
				<th scope="col">Nome</th>
				<th scope="col">Email</th>
				<th scope="col">Comentário</th>
			</thead>

			<?php

			//incluir o ficheiro para que a variável $liga seja reconhecida
			include "ligacaoBD.php";
			//query de consulta de todos os users registados
			$query = "SELECT * FROM contactos";

			//recuperação dos dados devolvidos pela consulta
			$resultado = mysqli_query($liga, $query);
			if (mysqli_num_rows($resultado) > 0) {
				//se devolver 1 ou mais resultados, vai preencher as linhas da tabela
				while ($row = mysqli_fetch_assoc($resultado)) {
					//enquanto houver resultados, procede-se com o preenchimento da tabela de dados
			?>

					<tr>
						<th scope="row"><?php echo $row['nome']; ?></th>
						<td><?php echo $row['email']; ?></td>
						<td><?php echo $row['comentario']; ?></td>
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
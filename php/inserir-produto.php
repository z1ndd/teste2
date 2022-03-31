<?php   $title = 'Inserir Produto';
        $currentPage = 'adminProduto';
        include('../elements/head-admin.php');
        include('../elements/navbar-admin.php'); ?>

<body>
		
	<form class="col-md-6 w-50" style="margin-left:25%" action="insere-produto.php" method="POST" id="form1">
		<div class="form-group">
			<label for="nome">Nome do Produto</label>
			<input type="text" name="nome" class="form-control" id="nome" placeholder="Insira o nome do produto"  required>
		</div>
		<div class="form-group">
			<label for="categoria">Categoria</label>
			<input type="text" name="categoria" class="form-control" id="categoria" placeholder="Insira a categoria do produto" required>
		</div>
		<center><br><button type="submit" class="btn btn-primary">Inserir Dados</button></center>
	</form>

</body>
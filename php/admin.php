<?php   $title = 'Admin';
        $currentPage = 'admin';
        include('../elements/head-admin.php');
        include('../elements/navbar-admin.php'); ?>

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

Página de admin

<?php include "../elements/footer.php"; ?>
</body>
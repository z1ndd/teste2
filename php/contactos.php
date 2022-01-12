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
    <title>Contacte-nos</title>
</head>
<body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="../index.php">FSJoalharia</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
            <div class="navbar-nav">
              <a class="nav-link active" aria-current="page" href="../index.php">Home</a>
              <a class="nav-link" href="galeria.php">Galeria</a>
              <a class="nav-link" href="produtos.php">Produtos</a>
              <a class="nav-link" href="sobrenos.php">Sobre Nós</a>
              <a class="nav-link" href="#">Contactos</a>
              <a class="nav-link" href="admin.php">Admin</a>
              <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Pesquise aqui...." aria-label="Search">
                <button class="btn btn-dark" type="submit">Pesquisa</button>
              </form>
            </div>
          </div>
        </div>
    </nav>
    <!-- fim navbar -->
    <br>
    <br>
    <br>
    <center>
    <div class="row" style="width: 75%;margin-left: 12.5%;">
        <div class="col-md-5">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Apoio ao Cliente</h5>
                    <p class="card-text"><b>Telefone:</b>
                        221 234 456
                        <br>
                        <b>Email:</b>
                        info@fsjoalharia.com
                    </p>
                </div>
            </div>
        </div>
        <div class="col-md-5">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Links Úteis</h5>
                    <p class="card-text">
                        <a href="https://www.livroreclamacoes.pt/">Livro de Reclamações</a>
                        <br>
                        <a href="https://policies.google.com/privacy?hl=pt-PT">Politica de privacidade</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
    </center>
    <br>
    <!-- Formulário -->
    <center>
    <div class="row" style="width: 150%;margin-left: 19%;">
        <div class="col-md-5">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Contacte-nos diretamente:</h5>
                    <form method="post" action="registaContacto.php">
                    Nome: <input type="text" name="name">
                    <br><br>
                    E-mail: <input type="text" name="email">
                    <br><br>
                    <textarea name="comment" rows="5" cols="40" placeholder="Insira aqui o seu comentário"></textarea>
                    <br>
                    <button type="submit" class="btn btn-primary">Submeter</button> 
                    </form>
                </div>
            </div>
        </div>
    </div>
    
    <br>
    </center>
    <?php include "../html/footer.html"; ?>
</body>
</html>
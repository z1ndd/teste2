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
    <title>Sobre nós</title>
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
              <a class="nav-link" href="#">Galeria</a>
              <a class="nav-link" href="./sobrenos.php">Sobre Nós</a>
              <a class="nav-link" href="#">Contactos</a>
              <a class="nav-link" href="#">Admin</a>
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
    <div class="row" style="width: 75%;margin-left: 12.5%;">
        <div class="col-md-5">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Apoio ao Cliente</h5>
                    <p class="card-text">Telefone:
                        221 234 456
                        <br>
                        Email:
                        info@fsjoalharia.com
                    </p>
                    <div class="collapse" id="collapseExample1">
                        <div class="card card-body">
                            Situada junto à Ria de Aveiro, esta casa tem capacidade para alojar 6 pessoas. Dispõe de 1 cozinha bem equipada, 2 casas de banho, uma sala e 2 quaros, com camas de casal, a sala acomoda 2 pessoas. Tem varanda com churrasqueira
                        </div>
                    </div>
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
                    <div class="collapse" id="collapseExample1">
                        <div class="card card-body">
                            Situada junto à Ria de Aveiro, esta casa tem capacidade para alojar 6 pessoas. Dispõe de 1 cozinha bem equipada, 2 casas de banho, uma sala e 2 quaros, com camas de casal, a sala acomoda 2 pessoas. Tem varanda com churrasqueira
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <?php include "../html/footer.html"; ?>
</body>
</html>
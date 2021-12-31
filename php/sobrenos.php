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
              <a class="nav-link" href="#">Sobre Nós</a>
              <a class="nav-link" href="./contactos.php">Contactos</a>
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
    <section class="about-us" style="width: 75%; margin-left: 12.5%">
        <h1 id="about_us">Sobre nós</h1>
        <p>
            Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC. Richard McClintock looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word
            in classical literature, discovered the undoubtable source.
            <br /><br /> Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC. Richard McClintock looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through
            the cites of the word in classical literature, discovered the undoubtable source. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Fugit exercitationem accusantium dolorum est dolor iusto nisi itaque repellendus in sunt, fuga architecto
            quisquam nemo totam delectus animi eos.
        </p>


        <center>
            <table class="table" style="width: 75%">
                <thead>
                    <tr>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><img src="../img/AboutUs1.jpg" alt="Diamante1" style="width:50%" class="rounded float-end" alt="..."> </td>
                        <td><img src="../img/AboutUs3.jpg" alt="Diamante2" style="width:50%" class="rounded float-end" alt="..."></td>
                        <td><img src="../img/AboutUs2.jpg" alt="Diamante3" style="width:50%" class="rounded float-end" alt="..."></td>
                        </tr>
                </tbody>
            </table>
        </center>
        <p>
            Architecto, rerum? Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum facere impedit dolor ea hic, earum autem. Et nam explicabo ea qui! Esse cumque quaerat ut est repellat asperiores perferendis assumenda necessitatibus debitis nisi atque,
            repellendus quod excepturi, tenetur nesciunt quo? Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis eum rem ratione possimus eaque, quibusdam consequatur doloribus reiciendis nesciunt nisi molestias temporibus sunt explicabo
            facilis facere odio maiores suscipit, laudantium expedita laboriosam tenetur eligendi. Voluptatum molestiae aliquam dignissimos omnis quos aspernatur veritatis, debitis facilis hic maiores dicta nesciunt ut nam deserunt id sed placeat fugiat
            dolore? Tempore, quae? </p>
    </section>

    <br>
    <?php include "../html/footer.html"; ?>
</body>
</html>
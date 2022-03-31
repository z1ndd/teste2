
<?php   $title = 'Homepage';
        $currentPage = 'index';
        include('elements/head-index.php');
        include('elements/navbar-index.php'); ?>


<body>
    <!-- Carousel -->
    <center>
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    
    <div class="carousel-inner">
        <div class="carousel-item active">
        <img src="./img/img1.jpg" class="d-block w-10" alt="...">
        <div class="carousel-caption d-none d-md-block">
            <h2>Aneis</h2>
            <p>Pode encontrar o seu tipo de anel favorito na nossa galeria.</p>
        </div>
        </div>
        <div class="carousel-item">
        <img src="./img/img2.jpg" class="d-block w-10" alt="...">
        <div class="carousel-caption d-none d-md-block">
            <h2>Colares</h2>
            <p>Dispomos de uma variedade de colares disponiveis.</p>
        </div>
        </div>
        <div class="carousel-item">
        <img src="./img/img3.jpg" class="d-block w-10" alt="...">
        <div class="carousel-caption d-none d-md-block">
            <h2>Jóias</h2>
            <p>Aqui encontra tudo o que procura.</p>
        </div>
        </div>
    </div>
    
    <button class="carousel-control-prev w-50" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next w-50" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
    </div>
    </center>
    <!-- Card tiles -->
    
    <br>
    <div class="row" style="width: 75%;margin-left: 12.5%;">

        <div class="col-md-3">
            <div class="card">
                <img class="card-img-top" src="img/anel-de-prata-lightning.jpg" alt="Anel de prata lightning">
                <div class="card-body">
                    <h5 class="card-title">Anel de Prata - Lightning</h5>
                    
                        <a class="btn btn-primary" data-bs-toggle="collapse" href="#collapseExample1" role="button" aria-expanded="false" aria-controls="collapseExample">
                            Info...
                        </a>
                        <a class="btn btn-primary" href="./php/produtos.php" role="button">
                            Ver mais produtos...
                        </a>
                    </p>
                    <div class="collapse" id="collapseExample1">
                        <div class="card card-body">
                        <p>Da coleção Deuses Gregos. Inspirado na arma de Zeus, o raio.

                        Zeus é o Deus dos Deuses. O seu raio era algo que o acompanhava sempre pelo seu poder. Com esta peça quisemos mostrar de uma forma simples e clara esta poderosa arma que acompanhava sempre Zeus.

                        <p>      
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card">
                <img class="card-img-top" src="./img/Pulseira-de-prata-trident.jpg" alt="Pulseira de prata trident">
                <div class="card-body">
                    <h5 class="card-title">Pulseira de prata - Trident</h5>
                
                        <a class="btn btn-primary" data-bs-toggle="collapse" href="#collapseExample2" role="button" aria-expanded="false" aria-controls="collapseExample">
                            Info...
                        </a>
                        <a class="btn btn-primary" href="./php/produtos.php" role="button">
                            Ver mais produtos...
                        </a>
                    </p>
                    <div class="collapse" id="collapseExample2">
                        <div class="card card-body">
                        <p>Da coleção Deuses Gregos. Inspirado na arma de Zeus, o raio.

                        Zeus é um dos Deuses mais importantes do olimpo.  O seu Raio acompanha-o sempre pelo seu poder. Com esta pulseira quisemos fazer uma mistura de simplicidade e contraste, fazendo um padrão com contraste de cores.</p>
                        <p>
                       </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="col-md-3">
            <div class="card">
                <img class="card-img-top" src="./img/anel-de-prata-poseidon2.jpg" alt="Anel de prata poseidon">
                <div class="card-body">
                    <h5 class="card-title">Anel de prata - Poseidon</h5>
                    
                        <a class="btn btn-primary" data-bs-toggle="collapse" href="#collapseExample3" role="button" aria-expanded="false" aria-controls="collapseExample">
                            Info...
                        </a>
                        <a class="btn btn-primary" href="./php/produtos.php" role="button">
                            Ver mais produtos...
                        </a>
                    </p>
                    <div class="collapse" id="collapseExample3">
                        <div class="card card-body">
                        <p>Da coleção Deuses Gregos. Inspirado na arma de Poseidon, o tridente.
                        Poseidon sendo o Deus do Mar e um dos principais deuses do Olimpo é um Deus de Guerra na mitologia grega e por isso demos um toque rústico com textura mais agressiva para criar a ilusão de ser uma peça de batalha, uma peça que Poseidon levaria para o combate.</p>
                        <p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card">
                <img class="card-img-top" src="./img/Colar-de-prata-pegasus.jpg" alt="Colar de Prata pegasus">
                <div class="card-body">
                    <h5 class="card-title">Colar de prata - Pegasus</h5>
                    
                        <a class="btn btn-primary" data-bs-toggle="collapse" href="#collapseExample4" role="button" aria-expanded="false" aria-controls="collapseExample">
                            Info...
                        </a>
                        <a class="btn btn-primary" href="./php/produtos.php" role="button">
                            Ver mais produtos...
                        </a>
                    </p>
                    <div class="collapse" id="collapseExample4">
                        <div class="card card-body">
                        <p>Inspirado no cavalo de combate de Zeus. Pegasus é na realida filho de Poseidon e Medusa. Medusa estava amaldiçoada por estar gravida de poseidon. Quando medusa morreu pegasus foi um dos filhos que nasceu dessa maldição.</p>
                  
                        <p>
                       </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
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
                        <td><img src="./img/AboutUs1.jpg" alt="Diamante1" style="width:50%" class="rounded float-end" alt="..."> </td>
                        <td><img src="./img/AboutUs3.jpg" alt="Diamante2" style="width:50%" class="rounded float-end" alt="..."></td>
                        <td><img src="./img/AboutUs2.jpg" alt="Diamante3" style="width:50%" class="rounded float-end" alt="..."></td>
                    </tr>
                </tbody>
            </table>
        </center>
        <p>
            Architecto, rerum? Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum facere impedit dolor ea hic, earum autem. Et nam explicabo ea qui! Esse cumque quaerat ut est repellat asperiores perferendis assumenda necessitatibus debitis nisi atque,
            repellendus quod excepturi, tenetur nesciunt quo? Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis eum rem ratione possimus eaque, quibusdam consequatur doloribus reiciendis nesciunt nisi molestias temporibus sunt explicabo
            facilis facere odio maiores suscipit, laudantium expedita laboriosam tenetur eligendi. Voluptatum molestiae aliquam dignissimos omnis quos aspernatur veritatis, debitis facilis hic maiores dicta nesciunt ut nam deserunt id sed placeat fugiat
            dolore? Tempore, quae? </p>
            <a href="./php/sobre-nos.php">
                <button>Mais Info...</button></a>
            </p>
    </section>
    
    <br>
    <?php include "elements/footer.php"; ?>
</body>
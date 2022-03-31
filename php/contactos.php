<?php $title = 'Contactos';
      $currentPage = 'contactos';
      include('../elements/head.php');
      include('../elements/navbar.php'); ?>

<body>    
    <center>
    <div class="row" style="width: 75%;margin-left: 12.5%;">
        <div class="col-md-5">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Apoio ao Cliente</h5>
                    <p class="card-text">
                        <b>Telefone:</b>221 234 456
                        <br>
                        <b>Email:</b>info@fsjoalharia.com
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
                    <form method="post" action="insere-contato.php">
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
    </center>

    <?php include "../elements/footer.php"; ?>
</body>
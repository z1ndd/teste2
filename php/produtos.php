<?php $title = 'Produtos';
$currentPage = 'produtos';
include('../elements/head.php');
include('../elements/navbar.php');?>

<body>
  <center>
    <h1>A Nossa Coleção</h1><br><br>
<hr>
<h3>Anéis de Casamento</h3><br>
    <div class="container">
      <div class="row">
        <div class="col">
          <img src="../img/casamento/charming_1.jpg" alt="charming" style="width:50%" data-bs-toggle="modal" data-bs-target="#reg-modal1" alt="...">
          <p>Charming</p>
          <p>272,00€ | Preço por par</p>
          <div class="modal" id="reg-modal1" tabindex="-1" aria-labelledby="modal-title" aria-hideden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-body">
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="close"></button>
                </div>
                <div class="modal-body">
                  <?php include('../carousel/charming.php');?>         
                  <h5 class="modal-title" id="modal-title">Charming</h5>
                  <p>272,00€ | Preço por par</p>
                  <a class="btn btn-primary" href="charming.php" role="button">Abrir</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <img src="../img/casamento/classic_1.jpg" alt="classic" style="width:50%" data-bs-toggle="modal" data-bs-target="#reg-modal2" alt="...">
          <p>Classic</p>
          <p>168,00€ | Preço por par</p>
          <div class="modal" id="reg-modal2" tabindex="-1" aria-labelledby="modal-title" aria-hideden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-body">
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="close"></button>
                </div>
                <div class="modal-body">
                  <?php include('../carousel/classic.php');?>        
                  <h5 class="modal-title" id="modal-title">Classic</h5>
                  <p>168,00€ | Preço por par</p>
                  <a class="btn btn-primary" href="classic.php" role="button">Abrir</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <img src="../img/casamento/gracious_1.jpg" alt="gracious" style="width:50%" data-bs-toggle="modal" data-bs-target="#reg-modal3" alt="...">
          <p>Gracious</p>
          <p>785,00€ | Preço por par</p>
          <div class="modal" id="reg-modal3" tabindex="-1" aria-labelledby="modal-title" aria-hideden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-body">
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="close"></button>
                </div>
                <div class="modal-body">
                  <?php include('../carousel/gracious.php');?>         
                  <h5 class="modal-title" id="modal-title">Gracious</h5>
                  <p>785,00€ | Preço por par</p>
                  <a class="btn btn-primary" href="gracious.php" role="button">Abrir</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div><br><br>
      <div class="row">
      <div class="col">
          <img src="../img/casamento/immortal_1.jpg" alt="immortal" style="width:50%" data-bs-toggle="modal" data-bs-target="#reg-modal4" alt="...">
          <p>Immortal</p>
          <p>489,00€ | Preço por par</p>
          <div class="modal" id="reg-modal4" tabindex="-1" aria-labelledby="modal-title" aria-hideden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-body">
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="close"></button>
                </div>
                <div class="modal-body">
                  <?php include('../carousel/immortal.php');?>         
                  <h5 class="modal-title" id="modal-title">Immortal</h5>
                  <p>489,00€ | Preço por par</p>
                  <a class="btn btn-primary" href="immortal.php" role="button">Abrir</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <img src="../img/casamento/pure_1.jpg" alt="pure" style="width:50%" data-bs-toggle="modal" data-bs-target="#reg-modal5" alt="...">
          <p>Pure</p>
          <p>150,00€ | Preço por par</p>
          <div class="modal" id="reg-modal5" tabindex="-1" aria-labelledby="modal-title" aria-hideden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-body">
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="close"></button>
                </div>
                <div class="modal-body">
                  <?php include('../carousel/pure.php');?>         
                  <h5 class="modal-title" id="modal-title">Pure</h5>
                  <p>150,00€ | Preço por par</p>
                  <a class="btn btn-primary" href="pure.php" role="button">Abrir</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <img src="../img/casamento/sense_1.jpg" alt="sense" style="width:50%" data-bs-toggle="modal" data-bs-target="#reg-modal6" alt="...">
          <p>Sense</p>
          <p>493,00€ | Preço por par</p>
          <div class="modal" id="reg-modal6" tabindex="-1" aria-labelledby="modal-title" aria-hideden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-body">
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="close"></button>
                </div>
                <div class="modal-body">
                  <?php include('../carousel/sense.php');?>         
                  <h5 class="modal-title" id="modal-title">Sense</h5>
                  <p>493,00€ | Preço por par</p>
                  <a class="btn btn-primary" href="sense.php" role="button">Abrir</a>
                </div>
              </div>
            </div>
          </div>
        </div>       
      </div>
    </div>
  
  <br><hr><br>
  <h3>Jóias</h3>
  <div class="container">
      <div class="row">
        <div class="col">
          <img src="../img/anel-de-prata-lightning.jpg" alt="charming" style="width:50%" data-bs-toggle="modal" data-bs-target="#reg-modal7" alt="...">
          <p>Lighting</p>
          <p>47,50€ | Preço Un.</p>
          <div class="modal" id="reg-modal7" tabindex="-1" aria-labelledby="modal-title" aria-hideden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-body">
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="close"></button>
                </div>
                <div class="modal-body">    
                <img src="../img/anel-de-prata-lightning.jpg" width="50%">   
                  <h5 class="modal-title" id="modal-title">Lighting</h5>
                  <p>47,50€ | Preço Un.</p>
                  <a class="btn btn-primary" href="lightning.php" role="button">Abrir</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <img src="../img/Pulseira-de-prata-trident.jpg" alt="classic" style="width:50%" data-bs-toggle="modal" data-bs-target="#reg-modal8" alt="...">
          <p>Trident</p>
          <p>65,00€ | Preço Un.</p>
          <div class="modal" id="reg-modal8" tabindex="-1" aria-labelledby="modal-title" aria-hideden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-body">
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="close"></button>
                </div>
                <div class="modal-body">      
                <img src="../img/Pulseira-de-prata-trident.jpg" width="50%">  
                  <h5 class="modal-title" id="modal-title">Trident</h5>
                  <p>65,00€ | Preço Un.</p>
                  <a class="btn btn-primary" href="trident.php" role="button">Abrir</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <img src="../img/anel-de-prata-poseidon2.jpg" alt="gracious" style="width:50%" data-bs-toggle="modal" data-bs-target="#reg-modal9" alt="...">
          <p>Poseidon</p>
          <p>47,50€ | Preço Un.</p>
          <div class="modal" id="reg-modal9" tabindex="-1" aria-labelledby="modal-title" aria-hideden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-body">
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="close"></button>
                </div>
                <div class="modal-body">   
                <img src="../img/anel-de-prata-poseidon2.jpg" width="50%"    > 
                  <h5 class="modal-title" id="modal-title">Poseidon</h5>
                  <p>47,50€ | Preço Un.</p>
                  <a class="btn btn-primary" href="poseidon.php" role="button">Abrir</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <img src="../img/Colar-de-prata-pegasus.jpg" alt="immortal" style="width:50%" data-bs-toggle="modal" data-bs-target="#reg-modal10" alt="...">
          <p>Pegasus</p>
          <p>62,50€ | Preço Un.</p>
          <div class="modal" id="reg-modal10" tabindex="-1" aria-labelledby="modal-title" aria-hideden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-body">
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="close"></button>
                </div> 
                <div class="modal-body">         
                  <img src="../img/Colar-de-prata-pegasus.jpg" width="50%"> 
                  <h5 class="modal-title" id="modal-title">Pegasus</h5>
                  <p>62,50€ | Preço Un.</p>
                  <a class="btn btn-primary" href="pegasus.php" role="button">Abrir</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div><br><br>
    </div>
    </center>

  <?php include "../elements/footer.php"; ?>
</body>
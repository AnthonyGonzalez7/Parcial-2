<div class="container-fluid">
    <br><br>
        <div class="row">
            
            <?php
                foreach(automoviles_controllers::Mostrar() as $autos){         
                     $id = $autos->getid_producto()                   
                ?>
            <Link href="#">

                <div class="card mx-auto d-block mb-4" style="width: 18rem;">
                    <img src="<?php echo $autos->getPoster()?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $autos->getTitlecar() ?></h5>
                        <p class="card-text">Aceleración: <?php echo $autos->getAceleration() ?></p>
                        <p class="card-text">Tracción: <?php echo $autos->getBodyWork() ?></p>
                        <a href="<?php echo "index.php?c=".seg::codificar("car")."&m=".seg::codificar("car")."&id=".seg::codificar($id) ?>" class="btn btn-outline-dark rounded mx-auto d-block" type="button">Ver Automóvil</a>
                    </div>
                </div>

            </Link>
            <?php       
                }?>  
        </div>
</div>
<br>
<br>
<br>



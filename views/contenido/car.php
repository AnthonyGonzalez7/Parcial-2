<br />
<?php foreach(automoviles_controllers::Mostrar() as $autos){  
    $id_comparacion = $autos->getid_producto()?>
    <?php if(seg::decodificar($id) == $id_comparacion){
    ?>
                <h1 class="text-center"><?php echo $autos->getTitlecar()?></h1>
                <div class="container ml-20 animate__animated animate__fadeInRight">
                
                    <div class="row">
                        <div class="col-12">
                        <div class="row">
                            <a href="<?php echo $autos->getPoster()?>" data-toggle="lightbox" data-gallery="example-gallery" class="col-lg-3 col-md-4 col-6 my-3 hvr-grow"width="100" height="100">
                                <img src="<?php echo $autos->getPoster()?>" class="img-fluid card">
                            </a>
                            <a href="<?php echo $autos->getPoster2()?>" data-toggle="lightbox" data-gallery="example-gallery" class="col-lg-3 col-md-4 col-6 my-3 hvr-grow"width="100" height="100">
                                <img src="<?php echo $autos->getPoster2()?>" class="img-fluid card">
                            </a>
                            <a href="<?php echo $autos->getPoster3()?>" data-toggle="lightbox" data-gallery="example-gallery" class="col-lg-3 col-md-4 col-6 my-3 hvr-grow"width="100" height="100">
                                <img src="<?php echo $autos->getPoster3()?>" class="img-fluid card">
                            </a>
                            <a href="<?php echo $autos->getPoster4()?>" data-toggle="lightbox" data-gallery="example-gallery" class="col-lg-3 col-md-4 col-6 my-3 hvr-grow"width="100" height="100">
                                <img src="<?php echo $autos->getPoster4()?>" class="img-fluid card">
                            </a>
                        </div>
                    </div>
                </div>

                </div>
                <div class="container ml-20 animate__animated animate__fadeInRight">
                    <div class="row">
                        <div class="col-sm-9">

                        <h4>Motor: <?php echo $autos->getEngine()?></h4>
                        <br />
                        <h4>Transmisión: <?php echo $autos->getTransmissions()?></h4>
                        <br />
                        <h4>Carroceria: <?php echo $autos->getBodyWork()?></h4>
                        <br />
                        <h4>Tracción: <?php echo $autos->getTraction()?></h4>
                        <br />
                        <h4>Aceleración: <?php echo $autos->getAceleration()?></h4>
                        <br />
                        <h4>Descripcion: </h4>
                        <div class="d-flex justify-content-evenly">
                        <div class="p-2"><h4><?php echo $autos->getdescripcion()?></h4></div>
                        </div>
                        <br />

                        </div>
                        <div class="col-3">
                            <?php if(isset($_SESSION["correo"])) {?>
                            <a href="<?php echo "index.php?c=".seg::codificar("compra")."&m=".seg::codificar("compra")."&id=".seg::codificar($id_comparacion ) ?>"><button type="button" class="btn btn-outline-dark rounded position-fixed top-0 end-0 w-25" >Comprar <i class="bi bi-bag"></i></button></a>
                            <br>
                            <?php }else{?>
                                <a href="<?php echo "index.php?c=".seg::codificar("login")."&m=".seg::codificar("login") ?>"><button type="button" class="btn btn-outline-dark rounded position-fixed top-0 end-0 w-25" >Login <i class="bi bi-person"></i></button></a>
                                <span><br><br>Debera iniciar sesion antes de emitir una compra</span>
                            <?php } ?>
                            <br>
                            <h3 class="display-5">Precio: $<?php echo $autos->getcosto_compra()?></h3>
                            <h5>Cantidad existente: <?php echo $autos->getcantidad_en_existencia()?></h5>      
                        </div>
                    </div>  
                </div>

                </div>
                
<?php }}?>
<br><br>
           
<br />
<?php foreach(automoviles_controllers::Mostrar() as $autos){  
    $id_comparacion = $autos->getid()?>
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
                    <div class="text-justify ...">
                    <h4><?php echo $autos->getContext()?></h4>
                    </div>
                    <br />
                </div>
                </div>
                
<?php }}?>
<br><br>
<footer><script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.0.0/mdb.min.js"></script></footer>              
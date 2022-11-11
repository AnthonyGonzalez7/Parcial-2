<div class="container-sm">
    <br><br><br>
        <div class="row">
           <center>
                <div class="card border-light animate__animated animate__fadeInDown animate__delay-1s w-50">
                  <div class="card-body">
                  <?php if($msg != "") {?>
                    <div class="alert alert-danger" role="alert">
                        <?php echo seg::decodificar($msg) ?>
                    </div>
                    <?php }?>
                    <form action="<?php echo "index.php?c=".seg::codificar("busqueda")."&m=".seg::codificar("busqueda_de_producto") ?>"  method="post">
                    <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Ingrese el automóvil a buscar</label>
                            <input type="text" class="form-control w-25" id="inlineFormInputGroupUsername" aria-describedby="emailHelp" placeholder="ID" name="txtBuscar">
                        </div>
                        <input type="hidden" value="<?php echo seg::getToken() ?>" name="token"/>
                        <button type="submit"
                        class="btn btn-outline-dark rounded animate__animated animate__fadeInDown animate__delay-1s" >
                        Buscar Automóvil
                        </button>
                    </form>
                    
                
                  </div>
                </div>  
            </center>
        </div>
        
    </div>
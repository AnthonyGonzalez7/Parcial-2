<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid w-100">
    <a href="<?php echo "index.php?c=".seg::codificar("principal")."&m=".seg::codificar("principal") ?>">
    <img class="navbar-brand"  src="resource\logonav.png" width="150" height="45"/>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active text-secondary" aria-current="page" href="<?php echo "index.php?c=".seg::codificar("principal")."&m=".seg::codificar("principal") ?>">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-secondary" href="<?php echo "index.php?c=".seg::codificar("contenido")."&m=".seg::codificar("contenido") ?>">Automóviles</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-secondary" href="<?php echo "index.php?c=".seg::codificar("contacto")."&m=".seg::codificar("contacto") ?>">Contacto</a>
        </li>
        <?php if(isset($_SESSION["correo"])) {?>
          <li class="nav-item">
            <a class="nav-link text-secondary" href="<?php echo "index.php?c=".seg::codificar("busqueda")."&m=".seg::codificar("busqueda") ?>">Busqueda</a>
          </li>
        <?php }else{?>
          
        <?php } ?>
      </ul>
    </div>
    
    <?php if(isset($_SESSION["correo"])) {?>
      <div>
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item dropdown position-end ">
          <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false"><?php echo $_SESSION["nombre"] ?> <i class="bi bi-person-circle bg-black"></i></a>
          <ul class="dropdown-menu dropdown-menu dropdown-menu-lg-end">
            <li><span class="dropdown-item-text disabled"><?php  echo $_SESSION["correo"] ?></span></li>
            <hr>
            <li><a class="dropdown-item" href="<?php echo "index.php?c=".seg::codificar("login")."&m=".seg::codificar("cerrar_sesion") ?>">Cerrar Sesión</a></li>
          </ul>
        </li>
      </ul>
    </div>
    <?php }else{?>
          <a class="nav-link text-secondary" href="<?php echo "index.php?c=".seg::codificar("login")."&m=".seg::codificar("login") ?>">Login</a>
    <?php } ?>
  </div>
</nav>
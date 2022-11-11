<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid w-100">
    <img class="navbar-brand" src="resource\logonav.png" width="150" height="45"/>
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
        <li class="nav-item">
          <a class="nav-link text-secondary" href="<?php echo "index.php?c=".seg::codificar("busqueda")."&m=".seg::codificar("busqueda") ?>">Busqueda</a>
        </li>
      </ul>
    </div>
    <div>
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item dropdown position-end ">
          <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false"><?php  echo seg::decodificar($_SESSION["nombre"]) ?><i class="bi bi-person-circle bg-black"></i></a>
          <ul class="dropdown-menu dropdown-menu dropdown-menu-lg-end">
            <li><span class="dropdown-item-text disabled"><?php  echo seg::decodificar($_SESSION["correo"]) ?></span></li>
            <hr>
            <li><a class="dropdown-item" href="<?php echo "index.php?c=".seg::codificar("login")."&m=".seg::codificar("cerrar_sesion") ?>" id="cerrar_sesionvar" value="1" name="cerrar_sesionvar">Cerrar Sesión</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>
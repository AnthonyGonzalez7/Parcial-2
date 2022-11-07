<?php
    session_start();
    require_once("controllers/principal_controllers.php");
    require_once("controllers/login_controllers.php");
    require_once("controllers/contenido_controllers.php");
    require_once("controllers/contacto_controllers.php");
    require_once("controllers/car_controllers.php");
    require_once("utils/seg.php");
    if (count($_GET)==0)
        call_user_func("principal_controllers::principal");
    else{
        $controlador = seg::decodificar($_GET["c"]);
        $metodo = seg::decodificar($_GET["m"]);
        call_user_func($controlador."_controllers::".$metodo);
    }
    
?>



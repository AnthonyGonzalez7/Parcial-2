<?php
require_once("controllers/automoviles_controllers.php");
require_once("models/users_models.php");
    class compra_controllers{
        public static function compra(){
            $id = $_GET["id"];
            $title =  "Factura | ";
            require_once("views/estructuras/headercompra.php");
            require_once("views/estructuras/nav_compra.php");
            require_once("views/contenido/compra.php");
            require_once("views/estructuras/footercompra.php");
        }
    }
?>
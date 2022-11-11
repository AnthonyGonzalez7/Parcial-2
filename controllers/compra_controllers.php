<?php
require_once("models/users_models.php");
    class compra_controllers{
        public static function compra(){
            $id = $_GET["id"];
            require_once("views/contenido/compra.php");
        }
    }
?>
<?php
    class compra_controllers{
        public static function compra(){
            $id = $_GET["id"];
            require_once("views/contenido/compra.php");
        }
    }
?>
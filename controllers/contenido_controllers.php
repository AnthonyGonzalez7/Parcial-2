<?php
require_once("controllers/automoviles_controllers.php");
    class contenido_controllers{
        public static function contenido(){
            
            $title = "Automóviles | Laboratorio 5";
            require_once("views/estructuras/header.php");   
            require_once("views/estructuras/nav.php");
            require_once("views/contenido/automovilescards.php");
            require_once("views/estructuras/footer.php");

        }
    }
?>
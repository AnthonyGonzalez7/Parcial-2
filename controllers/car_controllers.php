<?php
require_once("controllers/automoviles_controllers.php");
require_once("models/users_models.php");
    class car_controllers{
        public static function car(){
            $id = $_GET["id"];
            $title =  "Automoviles | Laboratorio 5";
            require_once("views/estructuras/header.php");   
            require_once("views/estructuras/nav.php");
            require_once("views/contenido/car.php");
            require_once("views/estructuras/footer.php");

        }
    }
?>
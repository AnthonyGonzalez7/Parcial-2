<?php

    class principal_controllers{

        public static function principal(){          
            $title = "Welcome | Laboratorio 5";
            require_once("views/estructuras/header.php");
            require_once("views/estructuras/navlogin.php");  
            require_once("views/pagina_principal/index.php"); 
            require_once("views/estructuras/footer2.php");

        }

    }
?>
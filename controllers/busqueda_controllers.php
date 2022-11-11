<?php
    require_once("models/productos_models.php");
    class busqueda_controllers{
        public static function busqueda(){
            $msg = isset($_GET["msg"])?$_GET["msg"]:"";
            $title = "Busqueda | Parcial 2";
            require_once("views/estructuras/header.php");
            require_once("views/estructuras/nav.php");
            require_once("views/contenido/busqueda.php");
            require_once("views/estructuras/footer.php");
        }

        public static function busqueda_de_producto(){
            if($_POST){
                $token= filter_var($_POST["token"],FILTER_SANITIZE_FULL_SPECIAL_CHARS);
                $_SESSION["token"] = $token;

                if (!isset($token) || !seg::validaSesion($token)) {
                    echo "Acceso restringido";
                    exit();
                }
                $buscar_id= filter_var($_POST["txtBuscar"], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
                $obj = new productos_models($buscar_id,"","","","","","","","","","","","","","");
                $buscar = $obj->valida_productos();
                if(count($buscar)>0){
                    $mostrar = $buscar["id_producto"];   
                    header("location:index.php?c=".seg::codificar("car")."&m=".seg::codificar("car")."&id=".seg::codificar($mostrar));
                }else
                    header("location:index.php?c=".seg::codificar("busqueda")."&m=".seg::codificar("busqueda")."&msg=".seg::codificar("ID No Encontrada o No Existe"));
                }
        }
    }
?>
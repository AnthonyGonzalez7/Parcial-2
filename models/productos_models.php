<?php

    class productos_models{
        private $Titlecar, $Engine, $Transmissions, $BodyWork, $Traction, $Aceleration, $descripcion, $id_producto, $Poster, $Poster2, $Poster3, $Poster4, $costo_compra, $precio_venta, $cantidad_en_existencia;


        public function __construct($Titlecar, $Engine, $Transmissions, $BodyWork, $Traction, $Aceleration, $descripcion, $id_producto, $Poster, $Poster2, $Poster3, $Poster4, $costo_compra, $precio_venta, $cantidad_en_existencia){
            $this->Titlecar=$Titlecar;
            $this->Engine=$Engine;
            $this->Transmissions=$Transmissions;
            $this->BodyWork=$BodyWork;
            $this->Traction=$Traction;
            $this->Aceleration=$Aceleration;
            $this->descripcion=$descripcion;
            $this->id_producto=$id_producto;
            $this->Poster=$Poster;
            $this->Poster2=$Poster2;
            $this->Poster3=$Poster3;
            $this->Poster4=$Poster4;
            $this->costo_compra=$costo_compra;
            $this->precio_venta=$precio_venta;
            $this->cantidad_en_existencia=$cantidad_en_existencia;
        }

        public function setTitlecar($Titlecar){
            $this->Titlecar=$Titlecar;
        }
        public function setEngine($Engine){
            $this->Engine=$Engine;
        }
        public function setTransmissions($Transmissions){
            $this->Transmissions=$Transmissions;
        }
        public function setBodyWork($BodyWork){
            $this->BodyWork=$BodyWork;
        }
        public function setTraction($Traction){
            $this->Traction=$Traction;
        }
        public function setAceleration($Aceleration){
            $this->Aceleration=$Aceleration;
        }
        public function setdescripcion($descripcion){
            $this->descripcion=$descripcion;
        }
        public function setid_producto($id_producto){
            $this->id_producto=$id_producto;
        }
        public function setPoster($Poster){
            $this->Poster=$Poster;
        }
        public function setPoster2($Poster2){
            $this->Poster2=$Poster2;
        }
        public function setPoster3($Poster3){
            $this->Poster3=$Poster3;
        }
        public function setPoster4($Poster4){
            $this->Poster4=$Poster4;
        }
        public function setcosto_compra($costo_compra){
            $this->costo_compra=$costo_compra;
        }
        public function setprecio_venta($precio_venta){
            $this->precio_venta=$precio_venta;
        }
        public function setcantidad_en_existencia($cantidad_en_existencia){
            $this->cantidad_en_existencia=$cantidad_en_existencia;
        }

        
        public function getTitlecar(){
            return $this->Titlecar;
        }
        public function getEngine(){
            return $this->Engine;
        }
        public function getTransmissions(){
            return $this->Transmissions;
        }
        public function getBodyWork(){
            return $this->BodyWork;
        }
        public function getTraction(){
            return $this->Traction;
        }
        public function getAceleration(){
            return $this->Aceleration;
        }
        public function getdescripcion(){
            return $this->descripcion;
        }
        public function getid_producto(){
            return $this->id_producto;
        }
        public function getPoster(){
            return $this->Poster;
        }
        public function getPoster2(){
            return $this->Poster2;
        }
        public function getPoster3(){
            return $this->Poster3;
        }
        public function getPoster4(){
            return $this->Poster4;
        }
        public function getcosto_compra(){
            return $this->costo_compra;
        }
        public function getprecio_venta(){
            return $this->precio_venta;
        }
        public function getcantidad_en_existencia(){
            return $this->cantidad_en_existencia;
        }
    }


?>
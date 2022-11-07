<?php

    class automoviles_models{
        private $Titlecar, $Engine, $Transmissions, $BodyWork, $Traction, $Aceleration, $Context, $id, $Poster, $Poster2, $Poster3, $Poster4;


        public function __construct($Titlecar, $Engine, $Transmissions, $BodyWork, $Traction, $Aceleration, $Context, $id, $Poster, $Poster2, $Poster3, $Poster4){
            $this->Titlecar=$Titlecar;
            $this->Engine=$Engine;
            $this->Transmissions=$Transmissions;
            $this->BodyWork=$BodyWork;
            $this->Traction=$Traction;
            $this->Aceleration=$Aceleration;
            $this->Context=$Context;
            $this->id=$id;
            $this->Poster=$Poster;
            $this->Poster2=$Poster2;
            $this->Poster3=$Poster3;
            $this->Poster4=$Poster4;
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
        public function setContext($Context){
            $this->Context=$Context;
        }
        public function setid($id){
            $this->id=$id;
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
        public function getContext(){
            return $this->Context;
        }
        public function getid(){
            return $this->id;
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
    }


?>
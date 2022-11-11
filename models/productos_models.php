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
        public function valida_productos(){
            $autos[] = ["Titlecar"=>"Acura Integra 2023",
            "Engine"=>"1.5 litros 4 Cilindros turbo (200 hp)",
            "Transmissions"=>"Manual de 6 velocidades o CVT",
            "BodyWork"=>"Sedan",
            "Traction"=>"Tracción Delantera",
            "Aceleration"=>"7.1 Segundos",
            "descripcion"=>"Acura revivió el nombre Integra, utilizado por última vez en 2001, para un nuevo hatchback de cuatro puertas de lujo de nivel de entrada para reemplazar al mediocre ILX dentro de la línea de marcas de lujo de Honda. Al igual que hace dos décadas, el Integra sirve como una versión de lujo del Honda Civic. Descubrimos que el nuevo Integra es un automóvil capaz y divertido de conducir, con buena eficiencia de combustible y controles fáciles de usar.",
            "id_producto"=>0,
            "Poster"=>"https://thumbnails-photos.amazon.com/v1/thumbnail/eXQEKe_CQwKvcraQ7LuBng?ownerId=A1QEVSPQ7BVTWR&viewBox=934%2C700&groupShareToken=bQKQ-6UkQCKNT-qBT4lK-A.rWQjHsAtnJjme3uclO6aM1",
            "Poster2"=>"https://thumbnails-photos.amazon.com/v1/thumbnail/pahLE8YSTvq3JoxcIqR8FA?ownerId=A1QEVSPQ7BVTWR&viewBox=934%2C700&groupShareToken=EiVfoVVZQym7O8t9Trjfhw.i55zhqA0ihWhtCF0r5-OaM",
            "Poster3"=>"https://thumbnails-photos.amazon.com/v1/thumbnail/gvztfZX8T3azbrYUrpYbEQ?ownerId=A1QEVSPQ7BVTWR&viewBox=934%2C700&groupShareToken=PCURlbCYTKmNA9FszaQiYA.dYieabBICiVlXVOUWg-D-Y",
            "Poster4"=>"https://thumbnails-photos.amazon.com/v1/thumbnail/fNnI0B3TTfmQNxUqjGqEeQ?ownerId=A1QEVSPQ7BVTWR&viewBox=934%2C700&groupShareToken=MelqkUAOSoukgGDu61IkTw.-yi3XAYegxrBzIOTPLrp5I",
            "costo_compra"=>35000, 
            "precio_venta"=>39999, 
            "cantidad_en_existencia"=>10];

            $autos[] = ["Titlecar"=>"Toyota 86 2022", 
            "Engine"=>"2.4 litros 4 (228 hp)", 
            "Transmissions"=>"Manual de 6 velocidades o Automática 6 velocidades", 
            "BodyWork"=>"Coupe", 
            "Traction"=>"Tracción Trasera", 
            "Aceleration"=>"5.8 Segundos", 
            "descripcion"=>"Toyota se ha asociado nuevamente con Subaru para este asequible automóvil deportivo de segunda generación. Llamado GR86 esta vez, este cupé de baja altura utiliza un motor de cuatro cilindros y 2.4 litros de origen Subaru y una transmisión manual o automática de seis velocidades. De cualquier manera, el poder ahora es más accesible que antes.", 
            "id_producto"=>1, 
            "Poster"=>"https://thumbnails-photos.amazon.com/v1/thumbnail/I251ae7gSyuayv0C2Dpn4Q?ownerId=A1QEVSPQ7BVTWR&viewBox=934%2C700&groupShareToken=wHqEjrD4Qm6QWSeUm4mlFw.5ZpikLBo2ROAcejDW0lf1t", 
            "Poster2"=>"https://thumbnails-photos.amazon.com/v1/thumbnail/Jqj7wSFqS-6WSxmyzWifAQ?ownerId=A1QEVSPQ7BVTWR&viewBox=934%2C700&groupShareToken=joH-CgaZRd-O-PGEl7okcw.BjD-JR3G1UMp-Z4bqAMYEd",
            "Poster3"=>"https://thumbnails-photos.amazon.com/v1/thumbnail/G4y2wIpgSTaU78YGLSeU9g?ownerId=A1QEVSPQ7BVTWR&viewBox=934%2C700&groupShareToken=GZpNgPq4T1ejoOdd_JzOfg.HZObrW81krxPDbp57KSRlS",
            "Poster4"=>"https://thumbnails-photos.amazon.com/v1/thumbnail/xJaqemQKQ86KzfjevfJvJw?ownerId=A1QEVSPQ7BVTWR&viewBox=934%2C700&groupShareToken=UgR-f3joRIeVg3ShLiQJHg.8Q3xMnC-_OTxWA0YbztBK-",
            "costo_compra"=>27700, 
            "precio_venta"=>30999, 
            "cantidad_en_existencia"=>8];

            $autos[] = ["Titlecar"=>"Nissan 400Z 2023",
            "Engine"=>"3 litros V6 turbo (400 hp)",
            "Transmissions"=>"Manual de 6 velocidades o Automático de 9 velocidades",
            "BodyWork"=>"Coupe",
            "Traction"=>"Tracción Trasera",
            "Aceleration"=>"4.8 Segundos",
            "descripcion"=>"El auto deportivo Nissan Z 2023 rediseñado tiene el clásico capó largo e inclinado y amplios flancos traseros que evocan las primeras versiones de esta famosa placa de identificación. El Z de dos asientos y tracción trasera tiene un V6 biturbo turboalimentado de 3.0 litros y 400 hp, lo que marca un aumento significativo de 50 hp con respecto a la producción del 370Z anterior. Esa planta de energía ardiente se puede combinar con una opción de manual de seis velocidades o automática de nueve velocidades con paletas de cambio.",
            "id_producto"=>2,
            "Poster"=>"https://thumbnails-photos.amazon.com/v1/thumbnail/FWl6ykdCQjCx0w8XEUxN_w?ownerId=A1QEVSPQ7BVTWR&viewBox=934%2C700&groupShareToken=RaKK-Tt-SO6nGtHQjXprww.rwgL7ZHh5qCeCtOCYmDY-G",
            "Poster2"=>"https://thumbnails-photos.amazon.com/v1/thumbnail/QlzE8olERx6_-kJP2044cA?ownerId=A1QEVSPQ7BVTWR&viewBox=934%2C700&groupShareToken=XXVSE7nKTk-CryiooK6YYw.42nGo7wed3-Q9Azo0cZsQ7",
            "Poster3"=>"https://thumbnails-photos.amazon.com/v1/thumbnail/jli7o2CARVClmooXvbjclA?ownerId=A1QEVSPQ7BVTWR&viewBox=934%2C700&groupShareToken=MOc9_2mtSTWm0nHcL6ksjg.saopdAGO9hQxbJgL2YNawY",
            "Poster4"=>"https://thumbnails-photos.amazon.com/v1/thumbnail/JYrHQ1laSx-yWgN7GrOD_g?ownerId=A1QEVSPQ7BVTWR&viewBox=934%2C700&groupShareToken=UHu2Az9NTXGHeg1VdY6KSA._yZwtaY8cAa0xgUC7XCnsS",
            "costo_compra"=>39990, 
            "precio_venta"=>44500, 
            "cantidad_en_existencia"=>6];

            $autos[] = ["Titlecar"=>"Toyota Supra 2022",
            "Engine"=>"2 litros 4 Cilindros turbo (255 CV) o 3 litros 6 turbo (382 CV)",
            "Transmissions"=>"Automático de 8 velocidades",
            "BodyWork"=>"Coupe",
            "Traction"=>"Tracción Trasera",
            "Aceleration"=>"3.9 Segundos",
            "descripcion"=>"El Toyota Supra regresó al mercado después de una ausencia de dos décadas con reflejos más agudos, estilo extrovertido, sistemas de seguridad avanzados y tecnología moderna de información y entretenimiento. Este cupé de quinta generación tiene el ADN de BMW, extrayendo gran parte del hardware del roadster Z4 y del contenedor de piezas del fabricante de automóviles alemán. Pero el Supra eclipsa a su primo europeo, gracias a la puesta a punto única de Toyota.",
            "id_producto"=>3,
            "Poster"=>"https://thumbnails-photos.amazon.com/v1/thumbnail/OUwZA9cJRE2qDse7VjUmrQ?ownerId=A1QEVSPQ7BVTWR&viewBox=934%2C700&groupShareToken=Ri9ThJImTI2Ub-JRrwy-cQ.iQ8egGwv-ThRLpicMUzifD",
            "Poster2"=>"https://thumbnails-photos.amazon.com/v1/thumbnail/_WryoDY2S6WhlRR8Mn85yQ?ownerId=A1QEVSPQ7BVTWR&viewBox=934%2C700&groupShareToken=DY_9d31gQEqA277AOsyN4A.14UiGBvrGTV3-F7AQvYy_G",
            "Poster3"=>"https://thumbnails-photos.amazon.com/v1/thumbnail/b2APMexBQs6rNzdTFd75Hg?ownerId=A1QEVSPQ7BVTWR&viewBox=934%2C700&groupShareToken=TTm8eaxWS628mmmzV4BEHg.avQVwr9hX_tEsuOrPAAW5V",
            "Poster4"=>"https://thumbnails-photos.amazon.com/v1/thumbnail/PcPHjjR_StKOW_04kDW9_Q?ownerId=A1QEVSPQ7BVTWR&viewBox=934%2C700&groupShareToken=kc_uGuxkR4mopGM55T2Ruw.JJdM7lX8bR0Lyo9rkzO_Ca",
            "costo_compra"=>43540, 
            "precio_venta"=>47500, 
            "cantidad_en_existencia"=>5];

            $autos[] = ["Titlecar"=>"Subaru WRX 2022",
            "Engine"=>"2.4 litros 4 Cilindros turbo (271 cv)",
            "Transmissions"=>"Manual de 6 velocidades o CVT",
            "BodyWork"=>"Sedan",
            "Traction"=>"AWD",
            "Aceleration"=>"5.5 Segundos",
            "descripcion"=>"El WRX rediseñado se apega a la fórmula inspirada en los autos de rally que estableció hace 20 años, brindando a los conductores un sedán de cuatro puertas con un potente motor turboalimentado, suspensión que se adapta a la carretera y tracción total. Es una maravilla conducir por una carretera secundaria estrecha y sinuosa, pero el enfoque de Subaru en el rendimiento se produce a expensas de la habitabilidad diaria, gracias a su andar rígido y su cabina ruidosa.",
            "id_producto"=>4,
            "Poster"=>"https://thumbnails-photos.amazon.com/v1/thumbnail/w6rZrIHnRzWMlpm3z4pD8w?ownerId=A1QEVSPQ7BVTWR&viewBox=934%2C700&groupShareToken=MB_IeN_kTuO2lhBmsbmQRg.g0rc0vFOYE44UaIjw8bagI",
            "Poster2"=>"https://thumbnails-photos.amazon.com/v1/thumbnail/9NYObks3TfCOpLM2EGGFdw?ownerId=A1QEVSPQ7BVTWR&viewBox=934%2C700&groupShareToken=AyR8lVLWSfW-UfG3h4lBmw.0jF6sPf0QuS5U3EXODHQg9",
            "Poster3"=>"https://thumbnails-photos.amazon.com/v1/thumbnail/cnWwwYUKRpe7aW8SZ464Qw?ownerId=A1QEVSPQ7BVTWR&viewBox=934%2C700&groupShareToken=OeqMFa4BSfe9WakP3-FC2w.B4AGgOyeFzGij4OyUSaOto",
            "Poster4"=>"https://thumbnails-photos.amazon.com/v1/thumbnail/HsdtLzmYR-mXBkOJygFY_w?ownerId=A1QEVSPQ7BVTWR&viewBox=934%2C700&groupShareToken=HcWLK4khQFSLc8Jj8aVBgQ.Di8W-_FujbdddYJyjio2An",
            "costo_compra"=>29605, 
            "precio_venta"=>34500, 
            "cantidad_en_existencia"=>6];

            $autos[] = ["Titlecar"=>"Acura NSX 2022",
            "Engine"=>"Híbrido V6 de 3.5 litros (600 hp)",
            "Transmissions"=>"Secuencial de 9 velocidades",
            "BodyWork"=>"Coupe",
            "Traction"=>"AWD",
            "Aceleration"=>"3.2 Segundos",
            "descripcion"=>"El superdeportivo de motor central de Acura tiene un estilo vanguardista y un sistema de propulsión híbrido. Su corazón es un V6 biturbo de 75 grados y una transmisión de doble embrague de nueve velocidades, junto con tres motores eléctricos. Uno se encuentra entre el motor y las ruedas motrices traseras, para aumentar la aceleración y el frenado. Los otros dos están colocados en cada rueda delantera para proporcionar tracción total y una respuesta más rápida del acelerador con una mejor distribución del par.",
            "id_producto"=>5,
            "Poster"=>"https://thumbnails-photos.amazon.com/v1/thumbnail/oGWfzf3GQAyNErOYOJZmJg?ownerId=A1QEVSPQ7BVTWR&viewBox=934%2C700&groupShareToken=T06YpJQ7T_aGpgZH5aNGkA.3oMnAvYvaaRhsWobgYMRQ7",
            "Poster2"=>"https://thumbnails-photos.amazon.com/v1/thumbnail/b0XWsW6KSIG_kHW00dK46g?ownerId=A1QEVSPQ7BVTWR&viewBox=934%2C700&groupShareToken=y3v6v0PVQrCjmQ71MOUzaw.l5XET4dZIMpqEtl7ViosXx",
            "Poster3"=>"https://thumbnails-photos.amazon.com/v1/thumbnail/TDGgxdy0ThCZ7HiTa7cMhQ?ownerId=A1QEVSPQ7BVTWR&viewBox=934%2C700&groupShareToken=Zgjlc49ASbqmcGFAm-ZVWg.pkkTW30nHWbHJ2Q8m7XCoH",
            "Poster4"=>"https://thumbnails-photos.amazon.com/v1/thumbnail/4s8PfpRDTZeNgaECAVZNmQ?ownerId=A1QEVSPQ7BVTWR&viewBox=934%2C700&groupShareToken=KmWz8WfgR5u0atwbvepNyw.lyJs559VreVKQ1dWUXR4kq",
            "costo_compra"=>169500, 
            "precio_venta"=>174500, 
            "cantidad_en_existencia"=>2];

            $autos[] = ["Titlecar"=>"Alfa Romeo Giulia",
            "Engine"=>"2 litros 4 Cilindros turbo (280 CV) o 2.9 litros V6 turbo (505 hp)",
            "Transmissions"=>"Automático de 8 velocidades",
            "BodyWork"=>"Sedan",
            "Traction"=>"Tracción Trasera o AWD",
            "Aceleration"=>"5.1 Segundos",
            "descripcion"=>"El Giulia es la entrada de Alfa en el segmento de sedán deportivo compacto de lujo, con el objetivo de combinar rendimiento y calidad superior para servir como una alternativa al BMW Serie 3. Este sedán italiano rebosa estilo y carácter, y gracias a su manejo súper ágil, es divertido de conducir. Descubrimos que era rápido y eficiente en combustible.",
            "id_producto"=>6,
            "Poster"=>"https://thumbnails-photos.amazon.com/v1/thumbnail/Z9LX946CTe-rKW7pgo_aZg?ownerId=A1QEVSPQ7BVTWR&viewBox=934%2C700&groupShareToken=HCnLvgOERLmk2MnCdhzOfA.AFwdz4AdxlDGx2eldwDELJ",
            "Poster2"=>"https://thumbnails-photos.amazon.com/v1/thumbnail/hrFSQd8ZSnaeOKSptFjRcA?ownerId=A1QEVSPQ7BVTWR&viewBox=934%2C700&groupShareToken=gb1Ye8RhRlqdY6UA_gX5Ew.Uy9q-zddAj_kNf262qVeL6",
            "Poster3"=>"https://thumbnails-photos.amazon.com/v1/thumbnail/FucJoe81RSGoxrM4v2U67g?ownerId=A1QEVSPQ7BVTWR&viewBox=934%2C700&groupShareToken=5FjvtcoGREOY3vGImpwruA.495a63UV3I1CrHmBSmZqYe",
            "Poster4"=>"https://thumbnails-photos.amazon.com/v1/thumbnail/qjlmgdfgR4yr21q_8TKZDQ?ownerId=A1QEVSPQ7BVTWR&viewBox=934%2C700&groupShareToken=5FWKk_hMQ0axPVIc0d6EWQ.EfT9so-PmVNmVsEwHJ3Mzu",
            "costo_compra"=>43350, 
            "precio_venta"=>47500, 
            "cantidad_en_existencia"=>2];

            $autos[] = ["Titlecar"=>"Toyota 4Runner 2022",
            "Engine"=>"V6 de 4 litros (270 CV)",
            "Transmissions"=>"Automático de 5 velocidades",
            "BodyWork"=>"SUV 4X4",
            "Traction"=>"Tracción Trasera o 4WD",
            "Aceleration"=>"7.7 Segundos",
            "descripcion"=>"Si bien casi todos los demás SUV medianos se han movido a la construcción basada en automóviles, el 4Runner sigue siendo un SUV de carrocería sobre bastidor de la vieja escuela, bueno para todoterreno pero no mucho más. El viaje es inestable y el manejo es torpe. Fuera de la carretera es donde sobresale la 4Runner. La distancia al suelo es generosa y las placas protectoras debajo de la carrocería son estándar.",
            "id_producto"=>7,
            "Poster"=>"https://thumbnails-photos.amazon.com/v1/thumbnail/jXt-emuJTqGzckQud04xcw?ownerId=A1QEVSPQ7BVTWR&viewBox=934%2C700&groupShareToken=tI5oO2UeSxuVF7BnriTf7w.eekqabgOhcws-3IZqveC3a",
            "Poster2"=>"https://thumbnails-photos.amazon.com/v1/thumbnail/JhKRMDPKTFa1r1ltlj5LNQ?ownerId=A1QEVSPQ7BVTWR&viewBox=934%2C700&groupShareToken=vdJpuG0LSomS-kbuNcljKA.pOqwbbccsL6ldJyII-hYNO",
            "Poster3"=>"https://thumbnails-photos.amazon.com/v1/thumbnail/FQLqKZT_RpysWMb_0rSBCw?ownerId=A1QEVSPQ7BVTWR&viewBox=934%2C700&groupShareToken=IB0MALcVThyGJBG5i6Z4hg.EbQAkN6au8cAV6DogPt0KZ",
            "Poster4"=>"https://thumbnails-photos.amazon.com/v1/thumbnail/JqQf9-0BRjOWLafxk17_eQ?ownerId=A1QEVSPQ7BVTWR&viewBox=934%2C700&groupShareToken=MPMGEEiJTGaEBeVrazZ3kQ.8Z1vXRM1jRKrL2z7K6sR7H",
            "costo_compra"=>38105, 
            "precio_venta"=>43000, 
            "cantidad_en_existencia"=>6];

            $autos[] = ["Titlecar"=>"Audi R8 Spyder 2022",
            "Engine"=>"V10 de 5,2 litros (562 CV) o V10 de 5,2 litros (602 CV)",
            "Transmissions"=>"Secuencial de 7 velocidades",
            "BodyWork"=>"Coupe o Convertible",
            "Traction"=>"AWD o Tracción Trasera",
            "Aceleration"=>"3.2 Segundos",
            "descripcion"=>"El superdeportivo de Audi es un biplaza de motor central que comparte componentes con el Lamborghini Gallardo. El R8 es rápido y liviano, impulsado por un V10 de 5.2 litros que genera 562 hp o un V10 Performance con 602 hp. Una secuencial de siete velocidades es estándar. Hay disponibles tracción trasera y en las cuatro ruedas, coupé y convertible. Las capacidades de aceleración y frenado son impresionantes, y la marcha es muy firme pero no demasiado dura.",
            "id_producto"=>8,
            "Poster"=>"https://thumbnails-photos.amazon.com/v1/thumbnail/09zycp37RHOU-etOGmM0-Q?ownerId=A1QEVSPQ7BVTWR&viewBox=934%2C700&groupShareToken=DiqZIfZ0RG2ONlxTFH4hBw.8XnvmwCuth4IchpDOBQTZM",
            "Poster2"=>"https://thumbnails-photos.amazon.com/v1/thumbnail/OG1IPGK9RHqefBX6qn1jkg?ownerId=A1QEVSPQ7BVTWR&viewBox=934%2C700&groupShareToken=I6sX5oH5TJiD0izarsZq9w.mLMkgqUhgevwygjt9myCSw",
            "Poster3"=>"https://thumbnails-photos.amazon.com/v1/thumbnail/PU88ihlxSDyvcrvXo6qRAA?ownerId=A1QEVSPQ7BVTWR&viewBox=934%2C700&groupShareToken=LeqOq4juQjKL68luE5jyWg.Qid-FCzxWMpJo2eE_oXrBe",
            "Poster4"=>"https://thumbnails-photos.amazon.com/v1/thumbnail/3-b07shJTSSmzWv9sI4JwA?ownerId=A1QEVSPQ7BVTWR&viewBox=934%2C700&groupShareToken=KDn1eF1AR3mXxDFMZkyU0g.2mmXxv24jObz-ZjwcOS75-",
            "costo_compra"=>148700, 
            "precio_venta"=>156500, 
            "cantidad_en_existencia"=>2];

            $autos[] =  ["Titlecar"=>"Nissan Frontier 2022",
            "Engine"=>"V6 de 3,8 litros (310 CV)",
            "Transmissions"=>"Automático de 9 velocidades",
            "BodyWork"=>"Pick Up",
            "Traction"=>"4WD O Tracción Trasera",
            "Aceleration"=>"7.3 Segundos",
            "descripcion"=>"Después de 16 años sin una actualización importante, la Frontier finalmente obtuvo un rediseño para el año modelo 2022. La nueva versión se beneficia de un fuerte tren motriz y un moderno sistema de infoentretenimiento, pero aún sufre de un manejo difícil.",
            "id_producto"=>9,
            "Poster"=>"https://thumbnails-photos.amazon.com/v1/thumbnail/X_xwmPpASZq3kiMpKDSm1A?ownerId=A1QEVSPQ7BVTWR&viewBox=934%2C700&groupShareToken=e0c5mDQrTYKdHJbSSLv3yA.e_PHKGotF0wdXHK6-Cd8hT",
            "Poster2"=>"https://thumbnails-photos.amazon.com/v1/thumbnail/txWqgpo2Soy_T3vPbDIKfg?ownerId=A1QEVSPQ7BVTWR&viewBox=934%2C700&groupShareToken=M1ebQcBgTJiOBelBIKuZ6w.QHEtMdj08mraYEzg7FtQb-",
            "Poster3"=>"https://thumbnails-photos.amazon.com/v1/thumbnail/LGqPmIo1SRqHe3taacxVuA?ownerId=A1QEVSPQ7BVTWR&viewBox=934%2C700&groupShareToken=BnqcI_MlRUK8XkqI1Ckr9g.M3zeUw5n_JOoJR7Y1mdmxh",
            "Poster4"=>"https://thumbnails-photos.amazon.com/v1/thumbnail/KRUz2v1jQaCEMtoXqC_-yw?ownerId=A1QEVSPQ7BVTWR&viewBox=934%2C700&groupShareToken=_qElXFSfRjyo56Za6XgQLA.aF2__b4GEiw2GYywSxUTov",
            "costo_compra"=>28690, 
            "precio_venta"=>32500, 
            "cantidad_en_existencia"=>5];

            $autos[] = ["Titlecar"=>"Dodge Viper 2017",
            "Engine"=>"V10 de 8,4 litros (645 CV)",
            "Transmissions"=>"Manual de 6 velocidades",
            "BodyWork"=>"Coupe",
            "Traction"=>"Tracción Trasera",
            "Aceleration"=>"3.5 Segundos",
            "descripcion"=>"El Viper en su cara recibió recientemente un ligero aumento de potencia a 645 hp del V10 de 8.4 litros totalmente de aluminio, aunque la transmisión manual de seis velocidades no ha cambiado. Esta generación del Viper está diseñada para atraer a compradores de autos deportivos de dos asientos de $ 100,000 que desean un rendimiento superalto de una manera ruidosa y descarada. Las versiones que se ofrecen son: SRT, GT, GTC, GTS y ACR, un auto de carrera apenas disimulado.",
            "id_producto"=>10,
            "Poster"=>"https://thumbnails-photos.amazon.com/v1/thumbnail/9xStZN2LRgWnU-WYqR_RBg?ownerId=A1QEVSPQ7BVTWR&viewBox=934%2C700&groupShareToken=3h9UPhEiQfCWtfBdZXOjFw.MSID9hOPkl-nrDpT8Vqu3h",
            "Poster2"=>"https://thumbnails-photos.amazon.com/v1/thumbnail/c_O9bCwARTSZw-CbVY9vDw?ownerId=A1QEVSPQ7BVTWR&viewBox=934%2C700&groupShareToken=cIhEXrPnQDqqkLPpU1S9Hg.U2cV88jiWI3gKNt-imsYjY",
            "Poster3"=>"https://thumbnails-photos.amazon.com/v1/thumbnail/U8Mt1kPYSB-fRFRd3dBIaQ?ownerId=A1QEVSPQ7BVTWR&viewBox=934%2C700&groupShareToken=zjhU2U2HT7i6TJEZkMMU9w.JAN_nNLQcgpKs9PDxjZiBA",
            "Poster4"=>"https://thumbnails-photos.amazon.com/v1/thumbnail/DIFafKNDSsimX5RDSTG4VQ?ownerId=A1QEVSPQ7BVTWR&viewBox=934%2C700&groupShareToken=c628Csc2SzyvkPMviQQ-GA.uoFsMc-4HuNJk7nkZ3BB2a",
            "costo_compra"=>87895, 
            "precio_venta"=>100000, 
            "cantidad_en_existencia"=>1];

            $autos[] = ["Titlecar"=>"Porsche Panamera 2022",
            "Engine"=>"2.9 litros V6 turbo (325 hp) o Híbrido V6 de 2.9 litros (552 hp)",
            "Transmissions"=>"Secuencial de 8 velocidades",
            "BodyWork"=>"Hatchback",
            "Traction"=>"AWD o Tracción Trasera",
            "Aceleration"=>"3.5 Segundos",
            "descripcion"=>"El gran automóvil de lujo Panamera de cuatro puertas se esconde debajo de una silueta de cupé y conserva su configuración de hatchback versátil. Los nuevos motores V6 y V8 turboalimentados brindan mucha motivación, y se ofrecen tres trenes motrices híbridos con diversos grados de potencia. También están disponibles una suspensión neumática opcional y características de seguridad activa.",
            "id_producto"=>11,
            "Poster"=>"https://thumbnails-photos.amazon.com/v1/thumbnail/aluw3u2PTlm8fCkGw4VKCA?ownerId=A1QEVSPQ7BVTWR&viewBox=934%2C700&groupShareToken=Gjqu7GkhT5W4QineNAQtKw.FDrIMvi23Og5jTDKh5hCuN",
            "Poster2"=>"https://thumbnails-photos.amazon.com/v1/thumbnail/sOTMIFKZRyCeDhf3eHAYkA?ownerId=A1QEVSPQ7BVTWR&viewBox=934%2C700&groupShareToken=QhCe_ZZITAq06p-dsAJbUQ.usDgJeM5tMmztPw-ZTfb72",
            "Poster3"=>"https://thumbnails-photos.amazon.com/v1/thumbnail/JnAPzIlZSyO8V97zP-WmNA?ownerId=A1QEVSPQ7BVTWR&viewBox=934%2C700&groupShareToken=RDVRKCyRTsmzOkALthDEaw.Q1djr1KN_v1R8feoSyVxkx",
            "Poster4"=>"https://thumbnails-photos.amazon.com/v1/thumbnail/J79RD4XeT0ilB7YFgjmE_A?ownerId=A1QEVSPQ7BVTWR&viewBox=934%2C700&groupShareToken=hh-8IFZpTme1mwtyE-K89Q.I5bqoibB4rNndQUpXVHAiT",
            "costo_compra"=>88400, 
            "precio_venta"=>92522, 
            "cantidad_en_existencia"=>3];

            foreach($autos as $t)
            {
                if($this->id_producto == $t["id_producto"])
                    return $t;
            }
            return [];
        
        }
    }


?>
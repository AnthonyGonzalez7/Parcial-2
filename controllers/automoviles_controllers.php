<?php
    require_once("models\productos_models.php");
    class automoviles_controllers{
        
        
        public static function Mostrar(){

            $autos[] = new productos_models ("Acura Integra 2023",
             "1.5 litros 4 Cilindros turbo (200 hp)",
             "Manual de 6 velocidades o CVT",
             "Sedan",
             "Tracción Delantera",
             "7.1 Segundos",
             "Acura revivió el nombre Integra, utilizado por última vez en 2001, para un nuevo hatchback de cuatro puertas de lujo de nivel de entrada para reemplazar al mediocre ILX dentro de la línea de marcas de lujo de Honda. Al igual que hace dos décadas, el Integra sirve como una versión de lujo del Honda Civic. Descubrimos que el nuevo Integra es un automóvil capaz y divertido de conducir, con buena eficiencia de combustible y controles fáciles de usar.",
             0,
             "https://thumbnails-photos.amazon.com/v1/thumbnail/eXQEKe_CQwKvcraQ7LuBng?ownerId=A1QEVSPQ7BVTWR&viewBox=934%2C700&groupShareToken=bQKQ-6UkQCKNT-qBT4lK-A.rWQjHsAtnJjme3uclO6aM1",
             "https://thumbnails-photos.amazon.com/v1/thumbnail/pahLE8YSTvq3JoxcIqR8FA?ownerId=A1QEVSPQ7BVTWR&viewBox=934%2C700&groupShareToken=EiVfoVVZQym7O8t9Trjfhw.i55zhqA0ihWhtCF0r5-OaM",
             "https://thumbnails-photos.amazon.com/v1/thumbnail/gvztfZX8T3azbrYUrpYbEQ?ownerId=A1QEVSPQ7BVTWR&viewBox=934%2C700&groupShareToken=PCURlbCYTKmNA9FszaQiYA.dYieabBICiVlXVOUWg-D-Y",
             "https://thumbnails-photos.amazon.com/v1/thumbnail/fNnI0B3TTfmQNxUqjGqEeQ?ownerId=A1QEVSPQ7BVTWR&viewBox=934%2C700&groupShareToken=MelqkUAOSoukgGDu61IkTw.-yi3XAYegxrBzIOTPLrp5I",
             35000, 
             39999, 
             10);

            $autos[] = new productos_models ("Toyota 86 2022", 
             "2.4 litros 4 (228 hp)", 
             "Manual de 6 velocidades o Automática 6 velocidades", 
             "Coupe", 
             "Tracción Trasera", 
             "5.8 Segundos", 
             "Toyota se ha asociado nuevamente con Subaru para este asequible automóvil deportivo de segunda generación. Llamado GR86 esta vez, este cupé de baja altura utiliza un motor de cuatro cilindros y 2.4 litros de origen Subaru y una transmisión manual o automática de seis velocidades. De cualquier manera, el poder ahora es más accesible que antes.", 
             1, 
             "https://thumbnails-photos.amazon.com/v1/thumbnail/I251ae7gSyuayv0C2Dpn4Q?ownerId=A1QEVSPQ7BVTWR&viewBox=934%2C700&groupShareToken=wHqEjrD4Qm6QWSeUm4mlFw.5ZpikLBo2ROAcejDW0lf1t", 
             "https://thumbnails-photos.amazon.com/v1/thumbnail/Jqj7wSFqS-6WSxmyzWifAQ?ownerId=A1QEVSPQ7BVTWR&viewBox=934%2C700&groupShareToken=joH-CgaZRd-O-PGEl7okcw.BjD-JR3G1UMp-Z4bqAMYEd",
             "https://thumbnails-photos.amazon.com/v1/thumbnail/G4y2wIpgSTaU78YGLSeU9g?ownerId=A1QEVSPQ7BVTWR&viewBox=934%2C700&groupShareToken=GZpNgPq4T1ejoOdd_JzOfg.HZObrW81krxPDbp57KSRlS",
             "https://thumbnails-photos.amazon.com/v1/thumbnail/xJaqemQKQ86KzfjevfJvJw?ownerId=A1QEVSPQ7BVTWR&viewBox=934%2C700&groupShareToken=UgR-f3joRIeVg3ShLiQJHg.8Q3xMnC-_OTxWA0YbztBK-",
             27700, 
             30999, 
             8);

            $autos[] = new productos_models ("Nissan 400Z 2023",
             "3 litros V6 turbo (400 hp)",
             "Manual de 6 velocidades o Automático de 9 velocidades",
             "Coupe",
             "Tracción Trasera",
             "4.8 Segundos",
             "El auto deportivo Nissan Z 2023 rediseñado tiene el clásico capó largo e inclinado y amplios flancos traseros que evocan las primeras versiones de esta famosa placa de identificación. El Z de dos asientos y tracción trasera tiene un V6 biturbo turboalimentado de 3.0 litros y 400 hp, lo que marca un aumento significativo de 50 hp con respecto a la producción del 370Z anterior. Esa planta de energía ardiente se puede combinar con una opción de manual de seis velocidades o automática de nueve velocidades con paletas de cambio.",
             2,
             "https://thumbnails-photos.amazon.com/v1/thumbnail/FWl6ykdCQjCx0w8XEUxN_w?ownerId=A1QEVSPQ7BVTWR&viewBox=934%2C700&groupShareToken=RaKK-Tt-SO6nGtHQjXprww.rwgL7ZHh5qCeCtOCYmDY-G",
             "https://thumbnails-photos.amazon.com/v1/thumbnail/QlzE8olERx6_-kJP2044cA?ownerId=A1QEVSPQ7BVTWR&viewBox=934%2C700&groupShareToken=XXVSE7nKTk-CryiooK6YYw.42nGo7wed3-Q9Azo0cZsQ7",
             "https://thumbnails-photos.amazon.com/v1/thumbnail/jli7o2CARVClmooXvbjclA?ownerId=A1QEVSPQ7BVTWR&viewBox=934%2C700&groupShareToken=MOc9_2mtSTWm0nHcL6ksjg.saopdAGO9hQxbJgL2YNawY",
             "https://thumbnails-photos.amazon.com/v1/thumbnail/JYrHQ1laSx-yWgN7GrOD_g?ownerId=A1QEVSPQ7BVTWR&viewBox=934%2C700&groupShareToken=UHu2Az9NTXGHeg1VdY6KSA._yZwtaY8cAa0xgUC7XCnsS",
             39990, 
             44500, 
             6);

            $autos[] = new productos_models ( "Toyota Supra 2022",
             "2 litros 4 Cilindros turbo (255 CV) o 3 litros 6 turbo (382 CV)",
             "Automático de 8 velocidades",
             "Coupe",
             "Tracción Trasera",
             "3.9 Segundos",
             "El Toyota Supra regresó al mercado después de una ausencia de dos décadas con reflejos más agudos, estilo extrovertido, sistemas de seguridad avanzados y tecnología moderna de información y entretenimiento. Este cupé de quinta generación tiene el ADN de BMW, extrayendo gran parte del hardware del roadster Z4 y del contenedor de piezas del fabricante de automóviles alemán. Pero el Supra eclipsa a su primo europeo, gracias a la puesta a punto única de Toyota.",
             3,
             "https://thumbnails-photos.amazon.com/v1/thumbnail/OUwZA9cJRE2qDse7VjUmrQ?ownerId=A1QEVSPQ7BVTWR&viewBox=934%2C700&groupShareToken=Ri9ThJImTI2Ub-JRrwy-cQ.iQ8egGwv-ThRLpicMUzifD",
             "https://thumbnails-photos.amazon.com/v1/thumbnail/_WryoDY2S6WhlRR8Mn85yQ?ownerId=A1QEVSPQ7BVTWR&viewBox=934%2C700&groupShareToken=DY_9d31gQEqA277AOsyN4A.14UiGBvrGTV3-F7AQvYy_G",
             "https://thumbnails-photos.amazon.com/v1/thumbnail/b2APMexBQs6rNzdTFd75Hg?ownerId=A1QEVSPQ7BVTWR&viewBox=934%2C700&groupShareToken=TTm8eaxWS628mmmzV4BEHg.avQVwr9hX_tEsuOrPAAW5V",
             "https://thumbnails-photos.amazon.com/v1/thumbnail/PcPHjjR_StKOW_04kDW9_Q?ownerId=A1QEVSPQ7BVTWR&viewBox=934%2C700&groupShareToken=kc_uGuxkR4mopGM55T2Ruw.JJdM7lX8bR0Lyo9rkzO_Ca",
             43540, 
             47500, 
             5);

            $autos[] = new productos_models ( "Subaru WRX 2022",
             "2.4 litros 4 Cilindros turbo (271 cv)",
             "Manual de 6 velocidades o CVT",
             "Sedan",
             "AWD",
             "5.5 Segundos",
             "El WRX rediseñado se apega a la fórmula inspirada en los autos de rally que estableció hace 20 años, brindando a los conductores un sedán de cuatro puertas con un potente motor turboalimentado, suspensión que se adapta a la carretera y tracción total. Es una maravilla conducir por una carretera secundaria estrecha y sinuosa, pero el enfoque de Subaru en el rendimiento se produce a expensas de la habitabilidad diaria, gracias a su andar rígido y su cabina ruidosa.",
             4,
             "https://thumbnails-photos.amazon.com/v1/thumbnail/w6rZrIHnRzWMlpm3z4pD8w?ownerId=A1QEVSPQ7BVTWR&viewBox=934%2C700&groupShareToken=MB_IeN_kTuO2lhBmsbmQRg.g0rc0vFOYE44UaIjw8bagI",
             "https://thumbnails-photos.amazon.com/v1/thumbnail/9NYObks3TfCOpLM2EGGFdw?ownerId=A1QEVSPQ7BVTWR&viewBox=934%2C700&groupShareToken=AyR8lVLWSfW-UfG3h4lBmw.0jF6sPf0QuS5U3EXODHQg9",
             "https://thumbnails-photos.amazon.com/v1/thumbnail/cnWwwYUKRpe7aW8SZ464Qw?ownerId=A1QEVSPQ7BVTWR&viewBox=934%2C700&groupShareToken=OeqMFa4BSfe9WakP3-FC2w.B4AGgOyeFzGij4OyUSaOto",
             "https://thumbnails-photos.amazon.com/v1/thumbnail/HsdtLzmYR-mXBkOJygFY_w?ownerId=A1QEVSPQ7BVTWR&viewBox=934%2C700&groupShareToken=HcWLK4khQFSLc8Jj8aVBgQ.Di8W-_FujbdddYJyjio2An",
             29605, 
             34500, 
             6);

            $autos[] = new productos_models (  "Acura NSX 2022",
             "Híbrido V6 de 3.5 litros (600 hp)",
             "Secuencial de 9 velocidades",
             "Coupe",
             "AWD",
             "3.2 Segundos",
             "El superdeportivo de motor central de Acura tiene un estilo vanguardista y un sistema de propulsión híbrido. Su corazón es un V6 biturbo de 75 grados y una transmisión de doble embrague de nueve velocidades, junto con tres motores eléctricos. Uno se encuentra entre el motor y las ruedas motrices traseras, para aumentar la aceleración y el frenado. Los otros dos están colocados en cada rueda delantera para proporcionar tracción total y una respuesta más rápida del acelerador con una mejor distribución del par.",
             5,
             "https://thumbnails-photos.amazon.com/v1/thumbnail/oGWfzf3GQAyNErOYOJZmJg?ownerId=A1QEVSPQ7BVTWR&viewBox=934%2C700&groupShareToken=T06YpJQ7T_aGpgZH5aNGkA.3oMnAvYvaaRhsWobgYMRQ7",
             "https://thumbnails-photos.amazon.com/v1/thumbnail/b0XWsW6KSIG_kHW00dK46g?ownerId=A1QEVSPQ7BVTWR&viewBox=934%2C700&groupShareToken=y3v6v0PVQrCjmQ71MOUzaw.l5XET4dZIMpqEtl7ViosXx",
             "https://thumbnails-photos.amazon.com/v1/thumbnail/TDGgxdy0ThCZ7HiTa7cMhQ?ownerId=A1QEVSPQ7BVTWR&viewBox=934%2C700&groupShareToken=Zgjlc49ASbqmcGFAm-ZVWg.pkkTW30nHWbHJ2Q8m7XCoH",
             "https://thumbnails-photos.amazon.com/v1/thumbnail/4s8PfpRDTZeNgaECAVZNmQ?ownerId=A1QEVSPQ7BVTWR&viewBox=934%2C700&groupShareToken=KmWz8WfgR5u0atwbvepNyw.lyJs559VreVKQ1dWUXR4kq",
             169500, 
             174500, 
             2);

            $autos[] = new productos_models ("Alfa Romeo Giulia",
             "2 litros 4 Cilindros turbo (280 CV) o 2.9 litros V6 turbo (505 hp)",
             "Automático de 8 velocidades",
             "Sedan",
             "Tracción Trasera o AWD",
             "5.1 Segundos",
             "El Giulia es la entrada de Alfa en el segmento de sedán deportivo compacto de lujo, con el objetivo de combinar rendimiento y calidad superior para servir como una alternativa al BMW Serie 3. Este sedán italiano rebosa estilo y carácter, y gracias a su manejo súper ágil, es divertido de conducir. Descubrimos que era rápido y eficiente en combustible.",
             6,
             "https://thumbnails-photos.amazon.com/v1/thumbnail/Z9LX946CTe-rKW7pgo_aZg?ownerId=A1QEVSPQ7BVTWR&viewBox=934%2C700&groupShareToken=HCnLvgOERLmk2MnCdhzOfA.AFwdz4AdxlDGx2eldwDELJ",
             "https://thumbnails-photos.amazon.com/v1/thumbnail/hrFSQd8ZSnaeOKSptFjRcA?ownerId=A1QEVSPQ7BVTWR&viewBox=934%2C700&groupShareToken=gb1Ye8RhRlqdY6UA_gX5Ew.Uy9q-zddAj_kNf262qVeL6",
             "https://thumbnails-photos.amazon.com/v1/thumbnail/FucJoe81RSGoxrM4v2U67g?ownerId=A1QEVSPQ7BVTWR&viewBox=934%2C700&groupShareToken=5FjvtcoGREOY3vGImpwruA.495a63UV3I1CrHmBSmZqYe",
             "https://thumbnails-photos.amazon.com/v1/thumbnail/qjlmgdfgR4yr21q_8TKZDQ?ownerId=A1QEVSPQ7BVTWR&viewBox=934%2C700&groupShareToken=5FWKk_hMQ0axPVIc0d6EWQ.EfT9so-PmVNmVsEwHJ3Mzu",
             43350, 
             47500, 
             2);

            $autos[] = new productos_models ("Toyota 4Runner 2022",
             "V6 de 4 litros (270 CV)",
             "Automático de 5 velocidades",
             "SUV 4X4",
             "Tracción Trasera o 4WD",
             "7.7 Segundos",
             "Si bien casi todos los demás SUV medianos se han movido a la construcción basada en automóviles, el 4Runner sigue siendo un SUV de carrocería sobre bastidor de la vieja escuela, bueno para todoterreno pero no mucho más. El viaje es inestable y el manejo es torpe. Fuera de la carretera es donde sobresale la 4Runner. La distancia al suelo es generosa y las placas protectoras debajo de la carrocería son estándar.",
             7,
             "https://thumbnails-photos.amazon.com/v1/thumbnail/jXt-emuJTqGzckQud04xcw?ownerId=A1QEVSPQ7BVTWR&viewBox=934%2C700&groupShareToken=tI5oO2UeSxuVF7BnriTf7w.eekqabgOhcws-3IZqveC3a",
             "https://thumbnails-photos.amazon.com/v1/thumbnail/JhKRMDPKTFa1r1ltlj5LNQ?ownerId=A1QEVSPQ7BVTWR&viewBox=934%2C700&groupShareToken=vdJpuG0LSomS-kbuNcljKA.pOqwbbccsL6ldJyII-hYNO",
             "https://thumbnails-photos.amazon.com/v1/thumbnail/FQLqKZT_RpysWMb_0rSBCw?ownerId=A1QEVSPQ7BVTWR&viewBox=934%2C700&groupShareToken=IB0MALcVThyGJBG5i6Z4hg.EbQAkN6au8cAV6DogPt0KZ",
             "https://thumbnails-photos.amazon.com/v1/thumbnail/JqQf9-0BRjOWLafxk17_eQ?ownerId=A1QEVSPQ7BVTWR&viewBox=934%2C700&groupShareToken=MPMGEEiJTGaEBeVrazZ3kQ.8Z1vXRM1jRKrL2z7K6sR7H",
             38105, 
             43000, 
             6);

            $autos[] = new productos_models ("Audi R8 Spyder 2022",
             "V10 de 5,2 litros (562 CV) o V10 de 5,2 litros (602 CV)",
             "Secuencial de 7 velocidades",
             "Coupe o Convertible",
             "AWD o Tracción Trasera",
             "3.2 Segundos",
             "El superdeportivo de Audi es un biplaza de motor central que comparte componentes con el Lamborghini Gallardo. El R8 es rápido y liviano, impulsado por un V10 de 5.2 litros que genera 562 hp o un V10 Performance con 602 hp. Una secuencial de siete velocidades es estándar. Hay disponibles tracción trasera y en las cuatro ruedas, coupé y convertible. Las capacidades de aceleración y frenado son impresionantes, y la marcha es muy firme pero no demasiado dura.",
             8,
             "https://thumbnails-photos.amazon.com/v1/thumbnail/09zycp37RHOU-etOGmM0-Q?ownerId=A1QEVSPQ7BVTWR&viewBox=934%2C700&groupShareToken=DiqZIfZ0RG2ONlxTFH4hBw.8XnvmwCuth4IchpDOBQTZM",
             "https://thumbnails-photos.amazon.com/v1/thumbnail/OG1IPGK9RHqefBX6qn1jkg?ownerId=A1QEVSPQ7BVTWR&viewBox=934%2C700&groupShareToken=I6sX5oH5TJiD0izarsZq9w.mLMkgqUhgevwygjt9myCSw",
             "https://thumbnails-photos.amazon.com/v1/thumbnail/PU88ihlxSDyvcrvXo6qRAA?ownerId=A1QEVSPQ7BVTWR&viewBox=934%2C700&groupShareToken=LeqOq4juQjKL68luE5jyWg.Qid-FCzxWMpJo2eE_oXrBe",
             "https://thumbnails-photos.amazon.com/v1/thumbnail/3-b07shJTSSmzWv9sI4JwA?ownerId=A1QEVSPQ7BVTWR&viewBox=934%2C700&groupShareToken=KDn1eF1AR3mXxDFMZkyU0g.2mmXxv24jObz-ZjwcOS75-",
             148700, 
             156500, 
             2);

            $autos[] = new productos_models ("Nissan Frontier 2022",
             "V6 de 3,8 litros (310 CV)",
             "Automático de 9 velocidades",
             "Pick Up",
             "4WD O Tracción Trasera",
             "7.3 Segundos",
             "Después de 16 años sin una actualización importante, la Frontier finalmente obtuvo un rediseño para el año modelo 2022. La nueva versión se beneficia de un fuerte tren motriz y un moderno sistema de infoentretenimiento, pero aún sufre de un manejo difícil.",
             9,
             "https://thumbnails-photos.amazon.com/v1/thumbnail/X_xwmPpASZq3kiMpKDSm1A?ownerId=A1QEVSPQ7BVTWR&viewBox=934%2C700&groupShareToken=e0c5mDQrTYKdHJbSSLv3yA.e_PHKGotF0wdXHK6-Cd8hT",
             "https://thumbnails-photos.amazon.com/v1/thumbnail/txWqgpo2Soy_T3vPbDIKfg?ownerId=A1QEVSPQ7BVTWR&viewBox=934%2C700&groupShareToken=M1ebQcBgTJiOBelBIKuZ6w.QHEtMdj08mraYEzg7FtQb-",
             "https://thumbnails-photos.amazon.com/v1/thumbnail/LGqPmIo1SRqHe3taacxVuA?ownerId=A1QEVSPQ7BVTWR&viewBox=934%2C700&groupShareToken=BnqcI_MlRUK8XkqI1Ckr9g.M3zeUw5n_JOoJR7Y1mdmxh",
             "https://thumbnails-photos.amazon.com/v1/thumbnail/KRUz2v1jQaCEMtoXqC_-yw?ownerId=A1QEVSPQ7BVTWR&viewBox=934%2C700&groupShareToken=_qElXFSfRjyo56Za6XgQLA.aF2__b4GEiw2GYywSxUTov",
             28690, 
             32500, 
             5);

            $autos[] = new productos_models ("Dodge Viper 2017",
             "V10 de 8,4 litros (645 CV)",
             "Manual de 6 velocidades",
             "Coupe",
             "Tracción Trasera",
             "3.5 Segundos",
             "El Viper en su cara recibió recientemente un ligero aumento de potencia a 645 hp del V10 de 8.4 litros totalmente de aluminio, aunque la transmisión manual de seis velocidades no ha cambiado. Esta generación del Viper está diseñada para atraer a compradores de autos deportivos de dos asientos de $ 100,000 que desean un rendimiento superalto de una manera ruidosa y descarada. Las versiones que se ofrecen son: SRT, GT, GTC, GTS y ACR, un auto de carrera apenas disimulado.",
             10,
             "https://thumbnails-photos.amazon.com/v1/thumbnail/9xStZN2LRgWnU-WYqR_RBg?ownerId=A1QEVSPQ7BVTWR&viewBox=934%2C700&groupShareToken=3h9UPhEiQfCWtfBdZXOjFw.MSID9hOPkl-nrDpT8Vqu3h",
             "https://thumbnails-photos.amazon.com/v1/thumbnail/c_O9bCwARTSZw-CbVY9vDw?ownerId=A1QEVSPQ7BVTWR&viewBox=934%2C700&groupShareToken=cIhEXrPnQDqqkLPpU1S9Hg.U2cV88jiWI3gKNt-imsYjY",
             "https://thumbnails-photos.amazon.com/v1/thumbnail/U8Mt1kPYSB-fRFRd3dBIaQ?ownerId=A1QEVSPQ7BVTWR&viewBox=934%2C700&groupShareToken=zjhU2U2HT7i6TJEZkMMU9w.JAN_nNLQcgpKs9PDxjZiBA",
             "https://thumbnails-photos.amazon.com/v1/thumbnail/DIFafKNDSsimX5RDSTG4VQ?ownerId=A1QEVSPQ7BVTWR&viewBox=934%2C700&groupShareToken=c628Csc2SzyvkPMviQQ-GA.uoFsMc-4HuNJk7nkZ3BB2a",
             87895, 
             100000, 
             1);

            $autos[] = new productos_models ("Porsche Panamera 2022",
             "2.9 litros V6 turbo (325 hp) o Híbrido V6 de 2.9 litros (552 hp)",
             "Secuencial de 8 velocidades",
             "Hatchback",
             "AWD o Tracción Trasera",
             "3.5 Segundos",
             "El gran automóvil de lujo Panamera de cuatro puertas se esconde debajo de una silueta de cupé y conserva su configuración de hatchback versátil. Los nuevos motores V6 y V8 turboalimentados brindan mucha motivación, y se ofrecen tres trenes motrices híbridos con diversos grados de potencia. También están disponibles una suspensión neumática opcional y características de seguridad activa.",
             11,
             "https://thumbnails-photos.amazon.com/v1/thumbnail/aluw3u2PTlm8fCkGw4VKCA?ownerId=A1QEVSPQ7BVTWR&viewBox=934%2C700&groupShareToken=Gjqu7GkhT5W4QineNAQtKw.FDrIMvi23Og5jTDKh5hCuN",
             "https://thumbnails-photos.amazon.com/v1/thumbnail/sOTMIFKZRyCeDhf3eHAYkA?ownerId=A1QEVSPQ7BVTWR&viewBox=934%2C700&groupShareToken=QhCe_ZZITAq06p-dsAJbUQ.usDgJeM5tMmztPw-ZTfb72",
             "https://thumbnails-photos.amazon.com/v1/thumbnail/JnAPzIlZSyO8V97zP-WmNA?ownerId=A1QEVSPQ7BVTWR&viewBox=934%2C700&groupShareToken=RDVRKCyRTsmzOkALthDEaw.Q1djr1KN_v1R8feoSyVxkx",
             "https://thumbnails-photos.amazon.com/v1/thumbnail/J79RD4XeT0ilB7YFgjmE_A?ownerId=A1QEVSPQ7BVTWR&viewBox=934%2C700&groupShareToken=hh-8IFZpTme1mwtyE-K89Q.I5bqoibB4rNndQUpXVHAiT",
             88400, 
             92522, 
             3);



             return $autos;
        }


    }


?>
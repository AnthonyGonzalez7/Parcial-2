<head>
    <link
        rel="stylesheet"
        href="resource/css/loginr.css"
    />
</head>
<div class="container-fluid ">   
    <div class="container position-absolute top-50 start-50 translate-middle">
    
        <div class="left">
        <form action="<?php echo "index.php?c=".seg::codificar("login")."&m=".seg::codificar("validar") ?>" method="post">
        <div class="login">Login</div>
        <div class="eula">Al iniciar sesión, acepta los términos ridículamente largos que no se molestó en leer</div>
        </div>
        <div class="right">
        <svg viewBox="0 0 320 300">
            <defs>
            <linearGradient
                            inkscape:collect="always"
                            id="linearGradient"
                            x1="13"
                            y1="193.49992"
                            x2="307"
                            y2="193.49992"
                            gradientUnits="userSpaceOnUse">
                <stop
                    style="stop-color:#ff00ff;"
                    offset="0"
                    id="stop876" />
                <stop
                    style="stop-color:#ff0000;"
                    offset="1"
                    id="stop878" />
            </linearGradient>
            </defs>
            <path d="m 40,120.00016 239.99984,-3.2e-4 c 0,0 24.99263,0.79932 25.00016,35.00016 0.008,34.20084 -25.00016,35 -25.00016,35 h -239.99984 c 0,-0.0205 -25,4.01348 -25,38.5 0,34.48652 25,38.5 25,38.5 h 215 c 0,0 20,-0.99604 20,-25 0,-24.00396 -20,-25 -20,-25 h -190 c 0,0 -20,1.71033 -20,25 0,24.00396 20,25 20,25 h 168.57143" />
        </svg>
        <div class="form">
            <label for="email">Correo</label>
            <input type="email" id="txtcorreo" name="txtcorreo" value="usuario1@hotmail.com">
            <label for="password">Contraseña</label>
            <input type="password" id="password" name="txtpassword" value="12345">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="1" name="ck_check" id="form2Example34" checked />
                <label class="form-check-label" for="form2Example34"> Remember me </label>
            </div>
            <input type="submit" id="submit" value="Submit">
        </div>
        </form>
        </div>
    
    </div> 
</div>
<footer><script type="text/javascript" src="resource\js\login.js"></script></footer>



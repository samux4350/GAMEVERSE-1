<?php
session_start();

$loggedIn = isset($_SESSION['nombreUsuario']);

if (isset($_POST['logout'])) {
    echo '<script type="text/javascript">
            document.addEventListener("DOMContentLoaded", function() {
                document.getElementById("confirmation-popup").style.display = "block";
            });
          </script>';
}

if (isset($_POST['confirm-logout'])) {
    session_destroy();
    header("Location: index.php");
    exit();
}

?>  
<?php
error_reporting (0);

$conexion = mysqli_connect("127.0.0.1", "root", "", "gameverse");

$nombreUsuario = $_SESSION['nombreUsuario'];

$consulta = "SELECT Rol FROM usuarios WHERE nombre = '$nombreUsuario'";

$resultado = mysqli_query($conexion, $consulta);

if ($resultado) {
   
    $fila = mysqli_fetch_assoc($resultado);

    if ($fila) {
        $rol = $fila['Rol'];
        
    } 

    mysqli_free_result($resultado);
} else {
    echo "Error en la consulta: " . mysqli_error($conexion);
}

?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gameverse</title>
    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
    <link rel="stylesheet" href="./css/stylegameverse.css">
</head>
<body>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        document.querySelector('.spinner-overlay').style.display = 'block';
    });

    window.addEventListener('load', function() {
        document.querySelector('.spinner-overlay').style.display = 'none';
    });

   
    window.addEventListener('beforeunload', function(event) {
        
        document.querySelector('.spinner-overlay').style.display = 'none';
    });
        </script>

    </div>
</div>



<div class="modal" id="confirmation-popup">
        <div class="modal-content">
            <p>¿Estás seguro de que deseas cerrar sesión?</p>
            <form method="post">
                <button type="submit" name="confirm-logout" id="confirm-button">Sí</button>
                <button type="button" id="cancel-button" onclick="hideConfirmationModal();">No</button>
            </form>
        </div>
</div>


<header class="main-header">
    <div class="button-container">
        <?php if (!$loggedIn): ?>
        <button class="btn-login"><a href="./Login.php">Iniciar Sesión</a></button>
        <button class="btn-register"><a href="./register.html">Registrarse</a></button>
        <?php else: ?>
        <div class="button" id="settingsBtn">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" viewBox="0 0 20 20" height="20" fill="none" class="svg-icon">
                <g stroke-width="1.5" stroke="#5d41de">
                    <circle r="2.5" cy="10" cx="10"></circle>
                    <path fill-rule="evenodd" d="m8.39079 2.80235c.53842-1.51424 2.67991-1.51424 3.21831-.00001.3392.95358 1.4284 1.40477 2.3425.97027 1.4514-.68995 2.9657.82427 2.2758 2.27575-.4345.91407.0166 2.00334.9702 2.34248 1.5143.53842 1.5143 2.67996 0 3.21836-.9536.3391-1.4047 1.4284-.9702 2.3425.6899 1.4514-.8244 2.9656-2.2758 2.2757-.9141-.4345-2.0033.0167-2.3425.9703-.5384 1.5142-2.67989 1.5142-3.21831 0-.33914-.9536-1.4284-1.4048-2.34247-.9703-1.45148.6899-2.96571-.8243-2.27575-2.2757.43449-.9141-.01669-2.0034-.97028-2.3425-1.51422-.5384-1.51422-2.67994.00001-3.21836.95358-.33914 1.40476-1.42841.97027-2.34248-.68996-1.45148.82427-2.9657 2.27575-2.27575.91407.4345 2.00333-.01669 2.34247-.97026z" clip-rule="evenodd"></path>
                </g>
            </svg>
            <span class="label">Configuracion</span>
            <div class="settings-popup" id="settingsPopup">
                <a href="./perfil.php"><button>Perfil</button></a>
                <a href="./perfilajus.php"><button>Editar perfil</button></a>
                <a href="./Report.php"><button>Reporte bugs</button></a>

                <?php if ($rol === 'Admin'): ?>
                <a href="admin.php"><button>Administrador</button></a>
                <?php endif; ?>
                <form method="post">
                    <button type="submit" name="logout" onclick="showConfirmationModal();">Cerrar sesión</button>
                </form>
 
            </div>
        </div>
        <?php endif; ?>
    </div>

    <header class="main-header">
        <label for="btn-nav" class="btn-nav"><i class="fas fa-bars"></i>
            <span class="icon">
                <svg viewBox="0 0 175 80" width="60" height="40">
                    <rect width="80" height="15" fill="#f0f0f0" rx="10"></rect>
                    <rect y="30" width="80" height="15" fill="#f0f0f0" rx="10"></rect>
                    <rect y="60" width="80" height="15" fill="#f0f0f0" rx="10"></rect>
                </svg>
            </span>
            <span class="text">MENU</span>
        </label>    
        <input type="checkbox" id="btn-nav"> 
    
        <nav>
            <ul class="navigation">
                <li><a href="./index.php">HOME</a></li>
                <li><a href="tienda.html">TIENDA</a></li>
                <li><a href="./marketplace.html">MARKETPLACE</a></li>
            </ul>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <aside>
                <a href="https://www.facebook.com/"><img src="./img/facebook-logo-3-1.png" alt="facebook-logo-3-1" width="50px"></a>
                <a href="https://twitter.com/"><img src="./img/Logo_of_Twitter.svg.png" alt="Logo_of_Twitter" width="70px"></a>
                <a href="https://www.instagram.com/?hl=en"><img src="./img/Instagram-Logosu.png" alt="Instagram-Logosu" width="80px"></a>
            </aside>
        </nav>
    </header>
    </div>
    <center><img src="./img/gameverse.jpg"/></center>
    <div style="background-color: #0A1850;">
        <br>
        <h2 class="h2" ><center>Nuevos títulos y descuentos</center></h2>
        <br>
        <div class="carousel"
            data-flickity='{ "wrapAround": true }'
            style="background-color: #0A1850;">
            <div>
                <center><img class="carousel-cell" src="https://gmedia.playstation.com/is/image/SIEPDC/spider-man-2-keyart-01-en-31may23?$1600px$"/></center>
                <h1 class="h2"><center>Marvel&#39;s Spider-Man 2</center></h1>
                <h2 class="h1"><center>¡Cuelga de rascacielos, balancea entre edificios y enfrenta villanos en Spider-Man 2!<br>¡Conviértete en el héroe que Nueva York necesita! <br>¿Estás listo para la acción?</center></h2>
                <br>
                <div>
                    <center><button class="button-gameverse">Descubrir</button></center>
                </div>
                <br>
                <br>
            </div>

            <div>
                <center><img class="carousel-cell" src="./img/last3.jpg"/></center>
                <h1 class="h2"><center>The Last of Us - Part II</center></h1>
                <h2 class="h1"><center>¡Sumérgete en el apocalipsis!<BR> Acompaña a Ellie en su viaje lleno de emociones<br>enfrenta decisiones desgarradoras y sobrevive en un mundo postapocalíptico implacable.</center></h2>
                <br>
                <div>
                    <center><button class="button-gameverse">Descubrir</button></center>
                </div>
                <br>
                <br>
            </div>

            <div>
                <center><img class="carousel-cell" src="https://gmedia.playstation.com/is/image/SIEPDC/god-of-war-ragnarok-keyart-01-en-07sep21?$1600px$"/></center>
                <h1 class="h2"><center>God of War: Ragnarok</center></h1>
                <h2 class="h1"><center>¡Prepárate para la furia de los dioses!<br>Embárcate en una odisea mitológica, enfrenta y desafía a los dioses nórdicos.<br>Kratos regresa para enfrentar su destino en la batalla definitiva.</center></h2>
                <br>
                <div>
                    <center><button class="button-gameverse">Descubrir</button></center>
                </div>
                <br>
                <br>
            </div>

            <div>
                <center><img class="carousel-cell" src="./img/gta.jpg"/></center>
                <h1 class="h2"><center>Grand Theft Auto V</center></h1>
                <h2 class="h1"><center>¡Explora Los Santos y sumérgete en el caos urbano!<br>Conviértete en un criminal de élite, planea atracos épicos.<br>y vive la vida en el lado salvaje</center></h2>
                <br>
                <div>
                    <center><button class="button-gameverse">Descubrir</button></center>
                </div>
                <br>
                <br>
            </div>

            <div>
                <center><img class="carousel-cell" src="./img/zelda3.jpg"/></center>
                <h1 class="h2"><center>The legend of zelda: Totk</center></h1>
                <h2 class="h1"><center>¡Embárcate en una épica aventura! <br>Explora misteriosos reinos y enfrenta a antiguos enemigos. <br>Conviértete en el héroe que restaurará la paz en Hyrule</center></h2>
                <br>
                <div>
                    <center><button class="button-gameverse">Descubrir</button></center>
                </div>
                <br>
                <br>
            </div>
        </div>


    <br>
    <br>
    </div>
    <div style="background-color: #E17349">
        <br><br>
        <h2 class="h2" ><center>Las novedades más recientes</center></h2>
        <br>
        <div class="carousel-2"
            data-flickity='{ "wrapAround": true }'>
            <div class="carousel-2-cell" style="background-color: #E5D6D0">
                <center><img class= "carousel-2 img" src="./img/gods.jpg"/><center>
                <h1><center>God of war-ragnarok:<br>valhalla</center></h1>
                <br><br>
                <h2><center>Tras los eventos de Ragnarök, Kratos descubre un rumbo que nunca creyó posible seguir y que lo lleva a las costas del Valhala.<br>Junto a Mimir, Kratos emprende un viaje íntimo y reflexivo que lo llevará a perfeccionar su cuerpo y mente, pues tendrá que enfrentarse a los desafíos del Valhala en una aventura trepidante y rejugable que combina el reconocido estilo de combate de God of War Ragnarök con nuevos elementos inspirados en el género roguelite.</center></h2>
                <br><br>
            </div>
            <div class="carousel-2-cell" style="background-color: #E5D6D0">
                <center><img class= "carousel-2 img" src="./img/devil.jpg"/></center>
                <h1><center>Devil May Cry:<br>Peak of Combat</center></h1>
                <br>
                <h2><center>Es un hack and slash desarrollado por NebulaJoy y publicado por Capcom para dispositivos móviles iOS y Android. La clásica saga de acción protagonizada por el cazador de demonios Dante llega con una nueva entrega gratuita y exclusiva para teléfonos móviles, en la que podemos controlar a varios personajes de la saga y que ofrece los espectaculares combates de acción acrobática a los que estamos acostumbrados en la saga pero en la palma de nuestra mano.</center></h2>
                <br><br>
            </div>
            <div class="carousel-2-cell" style="background-color: #E5D6D0">
                <center><img class= "carousel-2 img" src="./img/prince.jpg"/><center>
                <h1><center>Principe de Persia:<br>The Lost Crown</center></h1>
                <br>
                <h2><center>el retorno de Prince of Persia a los sistemas de entretenimiento, ratifica que algo está cambiando en Ubisoft. Tras unos cuantos años obcecada en los juegos como servicio, la multinacional francesa ha decidido honrar a sus franquicias insignia bajo esquemas de juego clásicos. Al sobresaliente 'Mario + Rabbids: Sparks of Hope' le siguió un 'Assassin's Creed Mirage' que nos supo a gloria; aunque con las suficientes actualizaciones en materia de calidad de vida.</center></h2>
                <br><br>
            </div>
            <div class="carousel-2-cell" style="background-color: #E5D6D0">
                <center><img class= "carousel-2 img" src="./img/mariop.jpg"/></center>
                <h1><center>Paper Mario:<br>La Puerta Milenaria</center></h1>
                <br>
                <h2><center>es un RPG desarrollado por Intelligent Systems y publicado por Nintendo para Switch. Un remake del genial juego lanzado para GameCube en 2004, una divertidísima y colorida aventura con un ingenioso sistema de combate por turnos que para muchos es la mejor entrega de la saga Paper Mario.<br> la entrega sigue sin confirmar su fecha de lanzamiento y solamente está apuntado para algún momento del próximo año. lo que da una pista de que puede estar cerca.</center></h2>
                <br><br>
            </div>
            <div class="carousel-2-cell" style="background-color: #E5D6D0">
                <center><img class= "carousel-2 img" src="./img/f.jpg"/></center>
                <h1><center>Fortnite</center></h1>
                <br>
                <h2><center>Ampere Analysis asegura que los jugadores han estado más tiempo en Fortnite que en Call of Duty HQ, EA Sports FC 24, GTA V y Roblox juntos. Cabe destacar, sin embargo, que esta información alude únicamente popularidad de los juegos en consolas PlayStation y Xbox; la cosa podría cambiar mucho si se dieran asimismo los datos de PC y otras plataformas.
                Pero, en resumidas cuentas, el aumento de popularidad de Fortnite es más que evidente. Siguiendo con el informe, se indica que el número de horas invertidas en la entrega de Epic Games creció un 146% el pasado mes de noviembre.</center></h2>
                <br><br>
            </div>
            <br>
        </div>
        <br><br><br>     
    </div>
    
  </div>

    <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
    
    <footer style="background-color: #07113B";>
        <center>
        <h3 class="h2">Copyright 2023 Gameverse</h3>
        <div class="img-container">
        <img src="./img/twitter.jpg" alt="Twitter">
        <img src="./img/fb.jpg" alt="Facebook">
        <img src="./img/insta.jpg" alt="Instagram">
        </div>
        </center>
        <br>
    </footer>

</body>
</html> 
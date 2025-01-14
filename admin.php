
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/admin.css">
    <title>Panel de Administración</title>
</head>
<body>
<div class="spinner-overlay">
    <div class="spinner">
    


        <style>

        .spinner:before {
        transform: rotateX(60deg) rotateY(45deg) rotateZ(45deg);
        animation: 750ms rotateBefore infinite linear reverse;
        }

        .spinner:after {
        transform: rotateX(240deg) rotateY(45deg) rotateZ(45deg);
        animation: 750ms rotateAfter infinite linear;
        }

        .spinner:before,
        .spinner:after {
        box-sizing: border-box;
        content: '';
        display: block;
        position: absolute;
        margin-top: -5em;
        margin-left: -5em;
        width: 10em;
        height: 10em;
        transform-style: preserve-3d;
        transform-origin: 50%;
        transform: rotateY(50%);
        perspective-origin: 50% 50%;
        perspective: 300px;
        background-size: 10em 10em;
        background-image: url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9Im5vIj8+Cjxzdmcgd2lkdGg9IjI2NnB4IiBoZWlnaHQ9IjI5N3B4IiB2aWV3Qm94PSIwIDAgMjY2IDI5NyIgdmVyc2lvbj0iMS4xIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIiB4bWxuczpza2V0Y2g9Imh0dHA6Ly93d3cuYm9oZW1pYW5jb2RpbmcuY29tL3NrZXRjaC9ucyI+CiAgICA8dGl0bGU+c3Bpbm5lcjwvdGl0bGU+CiAgICA8ZGVzY3JpcHRpb24+Q3JlYXRlZCB3aXRoIFNrZXRjaCAoaHR0cDovL3d3dy5ib2hlbWlhbmNvZGluZy5jb20vc2tldGNoKTwvZGVzY3JpcHRpb24+CiAgICA8ZGVmcz48L2RlZnM+CiAgICA8ZyBpZD0iUGFnZS0xIiBzdHJva2U9Im5vbmUiIHN0cm9rZS13aWR0aD0iMSIgZmlsbD0ibm9uZSIgZmlsbC1ydWxlPSJldmVub2RkIiBza2V0Y2g6dHlwZT0iTVNQYWdlIj4KICAgICAgICA8cGF0aCBkPSJNMTcxLjUwNzgxMywzLjI1MDAwMDM4IEMyMjYuMjA4MTgzLDEyLjg1NzcxMTEgMjk3LjExMjcyMiw3MS40OTEyODIzIDI1MC44OTU1OTksMTA4LjQxMDE1NSBDMjE2LjU4MjAyNCwxMzUuODIwMzEgMTg2LjUyODQwNSw5Ny4wNjI0OTY0IDE1Ni44MDA3NzQsODUuNzczNDM0NiBDMTI3LjA3MzE0Myw3NC40ODQzNzIxIDc2Ljg4ODQ2MzIsODQuMjE2MTQ2MiA2MC4xMjg5MDY1LDEwOC40MTAxNTMgQy0xNS45ODA0Njg1LDIxOC4yODEyNDcgMTQ1LjI3NzM0NCwyOTYuNjY3OTY4IDE0NS4yNzczNDQsMjk2LjY2Nzk2OCBDMTQ1LjI3NzM0NCwyOTYuNjY3OTY4IC0yNS40NDkyMTg3LDI1Ny4yNDIxOTggMy4zOTg0Mzc1LDEwOC40MTAxNTUgQzE2LjMwNzA2NjEsNDEuODExNDE3NCA4NC43Mjc1ODI5LC0xMS45OTIyOTg1IDE3MS41MDc4MTMsMy4yNTAwMDAzOCBaIiBpZD0iUGF0aC0xIiBmaWxsPSIjMDAwMDAwIiBza2V0Y2g6dHlwZT0iTVNTaGFwZUdyb3VwIj48L3BhdGg+CiAgICA8L2c+Cjwvc3ZnPg==);
        }
        /* sitNSpin.less */
        @keyframes rotateBefore {
        from {
            transform: rotateX(60deg) rotateY(45deg) rotateZ(0deg);
        }

        to {
            transform: rotateX(60deg) rotateY(45deg) rotateZ(-360deg);
        }
        }

        @keyframes rotateAfter {
        from {
            transform: rotateX(240deg) rotateY(45deg) rotateZ(0deg);
        }

        to {
            transform: rotateX(240deg) rotateY(45deg) rotateZ(360deg);
        }
        }
            .spinner-overlay {
                position: fixed;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                z-index: 9999; 
                display: none; 
            }


            .spinner {
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);


            
            }


        </style>

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
    <main>
        <div class="login-box">
            <a href="./index.php" ><button class="btn4">Atrás</button></a>
            <br>
            <center><h1>Panel de Administración</h1></center>
        
            <input id="radio1" type="radio" name="css-tabs" checked>
            <input id="radio2" type="radio" name="css-tabs">
        
            <div id="tabs">
                <label id="tab4" for="radio1">Usuarios</label>
                <label id="tab2" for="radio2">Productos</label>
            </div>
 
            <div id="content">
                <section id="content1">
                    <h2>Buscar Usuarios</h2>
                    <form method="GET">
                        <div class='user-box'>
                            <label for="buscarNombre" >Buscar por Nombre:</label>
                            <input type="text" id="buscarNombre" name="buscarNombre">
    
                                <label for="buscarID">Buscar por ID:</label>
                                <input type="number" id="buscarID" name="buscarID">
    
                                <button type="submit" class="btn4">Buscar</button>
                        </div>
                    </form>
                    
                    

                    <?php
                    

                    $conexion = mysqli_connect("127.0.0.1", "root", "", "gameverse");

                    if (!$conexion) {
                        die("Error de conexión: " . mysqli_connect_error());
                    }

                    
                    if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['eliminar_usuario'])) {
                        $id_usuario = $_POST['id_usuario'];

                        $consulta_eliminar = "DELETE FROM usuarios WHERE id = $id_usuario";

                        if (mysqli_query($conexion, $consulta_eliminar)) {
                            echo "<script>mostrarVentanaModal();</script>"; 
                        } else {
                            echo "Error al eliminar usuario: " . mysqli_error($conexion);
                        }
                    }

                    $consulta = "SELECT id, nombre, correo, password, imagenPerfil FROM usuarios";

                    if ($_SERVER["REQUEST_METHOD"] == "GET" && (isset($_GET['buscarNombre']) || isset($_GET['buscarID']))) {
                        $where = "";
                        if (!empty($_GET['buscarNombre'])) {
                            $nombre = mysqli_real_escape_string($conexion, $_GET['buscarNombre']);
                            $where .= " WHERE nombre LIKE '%$nombre%'";
                        }
                        if (!empty($_GET['buscarID'])) {
                            $id = mysqli_real_escape_string($conexion, $_GET['buscarID']);
                            $where .= ($where !== "") ? " AND id = $id" : " WHERE id = $id";
                        }
                        $consulta .= $where;
                    }

                    $resultadoUsuarios = mysqli_query($conexion, $consulta);

                    if (!$resultadoUsuarios) {
                        die("Error al obtener usuarios: " . mysqli_error($conexion));
                    }
                    ?>
<!-- MODAL ELIMINAR-->
                    <div id="modal" class="modal">
                        <div class="modal-content">
                            <div class="container">
                                <div class="modal-box">
                                    <span class="close" onclick="cerrarModal()">&times;</span>
                        
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <h3 class="title">¡CUIDADO!</h3>
                                            <p class="description"><h2>¿Estás seguro de eliminar este usuario?</h2></p>
                                            <div class="modal-icon">
                                            <img src="./iconos/block-user.png" alt="icono" style="width: 110px; height: 110px;">
                                            </div>
                                        </div>
                                    </div>
                                </div>  
                            </div>
                            <button class="btn4" id="confirmarEliminar" onclick="eliminarUsuario()"><span class="button-content">Sí</span> </button>
                            <button class="btn4" onclick="cerrarModal()"><span class="button-content">No</span></button>
                        </div>
                    </div>

                    <div id="modalEditar" class="modal">
                        <div class="modal-content">
                            <div class="container">
<br>
                                <input type="hidden" id="idUsuarioEditar" value="">
                                <input type="text" id="nombreUsuarioEditar" placeholder="Nombre">
                                <input type="email" id="correoUsuarioEditar" placeholder="Correo">
                                <input type="toggleMostrarContrasena" id="contrasenaUsuarioEditar" placeholder="Contraseña">
                                    
                                <button class="btn4" onclick="guardarCambiosUsuario()">Guardar Cambios</button>
                                <button class="btn4" onclick="cerrarModalEditar()">Cerrar</button>
                                <br>
                                <br>
                                <span class="toggleMostrarContrasena" onclick="toggleMostrarContrasena()">Mostrar</span>
                                <script>
                                    function toggleMostrarContrasena() {
                                        var passwordField = document.getElementById('contrasenaUsuarioEditar');

                                    
                                        if (contrasenaInput.type === 'password') {
                                            contrasenaInput.type = 'text';
                                            document.querySelector(".toggleMostrarContrasena").textContent = "Ocultar";
                                        } else {
                                            contrasenaInput.type = 'password';
                                            document.querySelector(".toggleMostrarContrasena").textContent = "Mostrar";
                                        }
                                    }
                                </script>
                                <script>

                                function configurarEliminar(idUsuario) {
    document.getElementById('confirmarEliminar').setAttribute('data-id-usuario', idUsuario);
    document.getElementById('modal').style.display = 'block';


    document.getElementById('confirmarEliminar').addEventListener('click', eliminarUsuario);
}


    function eliminarUsuario() {
        const idUsuario = document.getElementById('confirmarEliminar').getAttribute('data-id-usuario');

        const xhr = new XMLHttpRequest();
        xhr.onreadystatechange = function() {
            if (xhr.readyState === XMLHttpRequest.DONE) {
                if (xhr.status === 200) {
                    console.log('Usuario eliminado correctamente');
                    location.reload(); 
                } else {
                    console.error('Error al eliminar usuario:', xhr.responseText);
                }
            }
        };

        xhr.open('POST', 'eliminar_usuario.php');
        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        xhr.send('id_usuario=' + idUsuario);

        cerrarModal();
    }

    function abrirModalEditar(idUsuario, nombre, correo, contrasena) {
        document.getElementById('idUsuarioEditar').value = idUsuario;
        document.getElementById('nombreUsuarioEditar').value = nombre;
        document.getElementById('correoUsuarioEditar').value = correo;
        document.getElementById('contrasenaUsuarioEditar').value = contrasena;

        document.getElementById('modalEditar').style.display = 'block';
    }

    function guardarCambiosUsuario() {
    
        const idUsuario = document.getElementById('idUsuarioEditar').value;
        const nuevoNombre = document.getElementById('nombreUsuarioEditar').value;
        const nuevoCorreo = document.getElementById('correoUsuarioEditar').value;
        const nuevaContrasena = document.getElementById('contrasenaUsuarioEditar').value;

    

    
        cerrarModalEditar();
    }


function cerrarModalEditar() {
    document.getElementById('modalEditar').style.display = 'none';
}
function cerrarModal() {
    document.getElementById('modal').style.display = 'none';
}

                                </script>
                            </div>
                        </div>
                    </div>

                    <div class="tab">
                        <table >
                            <?php while ($usuario = mysqli_fetch_assoc($resultadoUsuarios)) : ?>
                                            <tr>
                                                <td ><?php echo $usuario['id']; ?></td>
                                                <td>Nombre: <br><?php echo $usuario['nombre']; ?></td>
                                                <td>Correo: <br><?php echo $usuario['correo']; ?></td>
                                                <td>Contraseña: <br><?php echo $usuario['password']; ?></td>
                                                <td>
                                                    <?php if ($usuario['imagenPerfil']): ?>
                                                        <img class="profile-picture" src="<?php echo $usuario['imagenPerfil']; ?>" alt="imagen de perfil">
                                                    <?php else: ?>
                                                        <img class="profile-picture" src="./img/logo.png" alt="imagen de perfil predeterminada">
                                                    <?php endif; ?>
                                                </td>
                                                <td style="text-align: right;">
                                                <form method="POST" action="admin.php">
                                                    <input type="hidden" name="id_usuario" value="<?php echo $usuario['id']; ?>">
                                                    <button class="edit-button" type="button" onclick="abrirModalEditar(
                                                    <?php echo $usuario['id']; ?>,
                                                    '<?php echo $usuario['nombre']; ?>',
                                                    '<?php echo $usuario['correo']; ?>',
                                                    '<?php echo $usuario['password']; ?>'
                                                    )"><svg class="edit-svgIcon" viewBox="0 0 512 512">
                                                    <path d="M410.3 231l11.3-11.3-33.9-33.9-62.1-62.1L291.7 89.8l-11.3 11.3-22.6 22.6L58.6 322.9c-10.4 10.4-18 23.3-22.2 37.4L1 480.7c-2.5 8.4-.2 17.5 6.1 23.7s15.3 8.5 23.7 6.1l120.3-35.4c14.1-4.2 27-11.8 37.4-22.2L387.7 253.7 410.3 231zM160 399.4l-9.1 22.7c-4 3.1-8.5 5.4-13.3 6.9L59.4 452l23-78.1c1.4-4.9 3.8-9.4 6.9-13.3l22.7-9.1v32c0 8.8 7.2 16 16 16h32zM362.7 18.7L348.3 33.2 325.7 55.8 314.3 67.1l33.9 33.9 62.1 62.1 33.9 33.9 11.3-11.3 22.6-22.6 14.5-14.5c25-25 25-65.5 0-90.5L453.3 18.7c-25-25-65.5-25-90.5 0zm-47.4 168l-144 144c-6.2 6.2-16.4 6.2-22.6 0s-6.2-16.4 0-22.6l144-144c6.2-6.2 16.4-6.2 22.6 0s6.2 16.4 0 22.6z"></path>
                                                    </svg></button>
                                                    
                                                    <button class="delete-button" type="button" onclick="configurarEliminar(<?php echo $usuario['id']; ?>)"><svg class="delete-svgIcon" viewBox="0 0 448 512">
                                                    <path d="M135.2 17.7L128 32H32C14.3 32 0 46.3 0 64S14.3 96 32 96H416c17.7 0 32-14.3 32-32s-14.3-32-32-32H320l-7.2-14.3C307.4 6.8 296.3 0 284.2 0H163.8c-12.1 0-23.2 6.8-28.6 17.7zM416 128H32L53.2 467c1.6 25.3 22.6 45 47.9 45H346.9c25.3 0 46.3-19.7 47.9-45L416 128z"></path>
                                                    </svg></button>
                                                </form>
                                                </td>
                                            </tr>
                                <tr><td colspan="6"><hr></td></tr>
                            <?php endwhile; ?>
                        </table>
                    </div>
                </section>


<?php
$conexion = new mysqli("127.0.0.1", "root", "", "gameverse");

if ($conexion->connect_error) {
    die("Error de conexión a la base de datos: " . $conexion->connect_error);
}


$resultado = $conexion->query("SELECT id, nombre FROM categorias");

if ($resultado === false) {
    die("Error en la consulta SQL: " . $conexion->error);
}

if ($resultado->num_rows > 0) {
    $categorias = $resultado->fetch_all(MYSQLI_ASSOC);
} else {
    $categorias = [];
}


$conexion->close();
?>


                                                    
                <section id="content2">
                    <h2>Productos</h2>
                    <button class="btn4" id="openModalBtn">Agregar Producto</button>
                    <br>
                    <br>

                    <!-- MODAL PRODUCTOS -->
                                            <div id="productModal" class="modal">
                                            <div class="modal-content">
                                            <span class="close" id="closeProductModalBtn">&times;</span>
                                            <form id="productForm" action="procesar_producto.php" method="post" enctype="multipart/form-data">
                                                <label for="nombre">Nombre:</label>
                                                <input type="text" id="nombre" name="nombre" required>

                                                <label for="descripcion">Descripción:</label>
                                                <input type="text" id="descripcion" name="descripcion" required><br>

                                                <label for="requisitos">Requisitos:</label>
                                                <input type="text" id="requisitos" name="requisitos" required>

                                                <label for="cantidad">Cantidad:</label>
                                                <input type="number" id="cantidad" name="cantidad" required>

                                                <label for="precio">Precio:</label>
                                                <input type="number" id="precio" name="precio" required><br>

                                                <label for="imagen">Imagen:</label>
                                                <input type="file" id="imagen" name="imagen" accept="image/*" required>

                                                <label for="video_mp4">Video MP4:</label>
                                                <input type="file" id="video_mp4" name="video_mp4" accept="video/mp4">

                                                <ul>
                                                    <h2>Categorías</h2>
                                                    <?php foreach ($categorias as $categoria): ?>
                                                        <li>
                                                            <input type="checkbox" id="categoria_<?php echo $categoria['id']; ?>" name="categorias[]" value="<?php echo $categoria['id']; ?>">
                                                            <label for="categoria_<?php echo $categoria['id']; ?>"><?php echo $categoria['nombre']; ?></label>
                                                        </li>
                                                    <?php endforeach; ?>
                                                </ul>
                                                    
                                                <a href="./categorias.php">Agregar Categoría</a>
                                                <br>
                                                <button class="btn4" type="submit" name="guardarProducto">Guardar Producto</button>
                                            </form>



    <script>

                                                var openModalBtn = document.getElementById('openModalBtn');
                                                var closeProductModalBtn = document.getElementById('closeProductModalBtn');
                                                var productModal = document.getElementById('productModal');

                                                openModalBtn.addEventListener('click', function() {
                                                    productModal.style.display = 'block';
                                                });
                                                
                                                closeProductModalBtn.addEventListener('click', function() {
                                                    productModal.style.display = 'none';
                                                });
                                                
                                             
                                                window.addEventListener('click', function(event) {
                                                    if (event.target == productModal) {
                                                        productModal.style.display = 'none';
                                                    }
                                                });
                                                </script>
                                            </form>
                                        </div>
                                        </div>

                                <div class="">          
                                    <div class="tabl">     
                                    <?php
                                    $conexion = mysqli_connect("127.0.0.1", "root", "", "gameverse");

                                    if (!$conexion) {
                                        die("Error de conexión: " . mysqli_connect_error());
                                    }
                                
                                    $consulta = "SELECT id, nombre, descripcion, requisitos, cantidad, precio, imagen FROM productos";
                                    $resultado = mysqli_query($conexion, $consulta);
                                
                                    if (mysqli_num_rows($resultado) > 0) {
                                        echo '<table>';
                                        echo '<tr>
                                                <th>ID: </th>
                                                <th>Imagen: </th>
                                                <th>Nombre: </th>
                                                <th>Descripción: </th>
                                                <th>Requisitos: </th>
                                                <th>Cantidad: </th>
                                                <th>Precio: </th>
                                                <th>Acciones: </th>
                                              </tr> ';
                                    
                                        while ($fila = mysqli_fetch_assoc($resultado)) {
                                            echo '<tr>';
                                            echo '<td>' . $fila['id'] . '</td>';
                                            echo '<td><img src="' . $fila['imagen'] . '" alt="' . $fila['nombre'] . '" height="50"></td>';
                                            echo '<td>' . $fila['nombre'] . '</td>';
                                            echo '<td>' . $fila['descripcion'] . '</td>';
                                            echo '<td>' . $fila['requisitos'] . '</td>';
                                            echo '<td>';
                                            if ($fila['cantidad'] == 0) {
                                                echo '<span style="color: red;">Agotado</span>';
                                            } else {
                                                echo $fila['cantidad'];
                                            }
                                            echo '</td>';
                                            echo '<td style="color: green;">' . $fila['precio'] . ' COP' . '</td>';
                                            echo '<td> 
                                            <button class="edit-button" type="button" onclick="editarProducto(' . $fila['id'] . ')">
                                            <svg class="edit-svgIcon" viewBox="0 0 512 512">
                                                    <path d="M410.3 231l11.3-11.3-33.9-33.9-62.1-62.1L291.7 89.8l-11.3 11.3-22.6 22.6L58.6 322.9c-10.4 10.4-18 23.3-22.2 37.4L1 480.7c-2.5 8.4-.2 17.5 6.1 23.7s15.3 8.5 23.7 6.1l120.3-35.4c14.1-4.2 27-11.8 37.4-22.2L387.7 253.7 410.3 231zM160 399.4l-9.1 22.7c-4 3.1-8.5 5.4-13.3 6.9L59.4 452l23-78.1c1.4-4.9 3.8-9.4 6.9-13.3l22.7-9.1v32c0 8.8 7.2 16 16 16h32zM362.7 18.7L348.3 33.2 325.7 55.8 314.3 67.1l33.9 33.9 62.1 62.1 33.9 33.9 11.3-11.3 22.6-22.6 14.5-14.5c25-25 25-65.5 0-90.5L453.3 18.7c-25-25-65.5-25-90.5 0zm-47.4 168l-144 144c-6.2 6.2-16.4 6.2-22.6 0s-6.2-16.4 0-22.6l144-144c6.2-6.2 16.4-6.2 22.6 0s6.2 16.4 0 22.6z"></path>
                                                    </svg></button>
                                                    
                                                    <button class="delete-button" type="button" onclick="eliminarProducto(' . $fila['id'] . ')"><svg class="delete-svgIcon" viewBox="0 0 448 512">
                                                    <path d="M135.2 17.7L128 32H32C14.3 32 0 46.3 0 64S14.3 96 32 96H416c17.7 0 32-14.3 32-32s-14.3-32-32-32H320l-7.2-14.3C307.4 6.8 296.3 0 284.2 0H163.8c-12.1 0-23.2 6.8-28.6 17.7zM416 128H32L53.2 467c1.6 25.3 22.6 45 47.9 45H346.9c25.3 0 46.3-19.7 47.9-45L416 128z"></path>
                                                    </svg></button>
                                                  </td>';
                                            
                                                  
                                            
                                            echo '</tr>';
                                            echo '<td> <hr> </td>';
                                        
                                        }
                                        
                                        echo '</table>';
                                       
                                    } else {
                                        echo 'No hay productos disponibles.';
                                    }
                                
                                    mysqli_close($conexion);
                                    ?>
                                </div>


                </section>

            </div>
        </div>

    </main>
</body>
</html>



<style>
    
main {
    max-width: 800px;
    height: 600px;
    margin: 30px auto;
    background: #2d2f33;
    padding: 30px;
    box-shadow: 0 3px 5px rgba(0, 0, 0, 0.2);
}	


    @media only screen and (max-width: 1200px) {
.info,
.perfil,
.deceados {
    width: 100%; 
    margin: 5px; 
    text-align: center;
}


}
    

    main {
        max-width: 800px;
        height: 600px;
        margin: 30px auto;
        background: #2d2f33;
        padding: 30px;
        box-shadow: 0 3px 5px rgba(0, 0, 0, 0.2);
    }


    @media only screen and (max-width: 1200px) {
    
        .info,
        .perfil,
        .deceados {
            width: 100%;
            margin: 5px;
            text-align: center;
        }
    }


    .tab table {
        width: 100%;
        border-collapse: collapse;
    }

    .tab td {
        padding: 10px; 
    }

    .tab tr {
        height: 10px; 
    }
</style>
<script>
    function guardarCambiosUsuario() {
const idUsuario = document.getElementById('idUsuarioEditar').value;
const nuevoNombre = document.getElementById('nombreUsuarioEditar').value;
const nuevoCorreo = document.getElementById('correoUsuarioEditar').value;
const nuevaContrasena = document.getElementById('contrasenaUsuarioEditar').value;

const xhr = new XMLHttpRequest();
xhr.onreadystatechange = function() {
    if (xhr.readyState === XMLHttpRequest.DONE) {
        if (xhr.status === 200) {
            console.log('Datos actualizados correctamente');
     
        } else {
            console.error('Error al actualizar datos:', xhr.responseText);
        }
    }
};

xhr.open('POST', 'guardar_cambios_usuario.php');
xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
xhr.send(`id_usuario=${idUsuario}&nuevo_nombre=${nuevoNombre}&nuevo_correo=${nuevoCorreo}&nueva_contrasena=${nuevaContrasena}`);

cerrarModalEditar();
}
function guardarCambiosUsuario() {
const idUsuario = document.getElementById('idUsuarioEditar').value;
const nuevoNombre = document.getElementById('nombreUsuarioEditar').value;
const nuevoCorreo = document.getElementById('correoUsuarioEditar').value;
const nuevaContrasena = document.getElementById('contrasenaUsuarioEditar').value;

const xhr = new XMLHttpRequest();
xhr.onreadystatechange = function() {
    if (xhr.readyState === XMLHttpRequest.DONE) {
        if (xhr.status === 200) {
            console.log('Datos actualizados correctamente');
            location.reload(); 
        } else {
            console.error('Error al actualizar datos:', xhr.responseText);
        }
    }
};

xhr.open('POST', 'guardar_cambios_usuario.php');
xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
xhr.send(`id_usuario=${idUsuario}&nuevo_nombre=${nuevoNombre}&nuevo_correo=${nuevoCorreo}&nueva_contrasena=${nuevaContrasena}`);
}

</script>





<style>

@import url(https://fonts.googleapis.com/css?family=Open+Sans:400,700);

body {
	background-color: #383c41;
	color: #fcf9f4;
	font-family: "Open Sans", "Arial"; 
}

main {
	max-width: 800px;
	height: 600px;
	margin: 30px auto;
	background: #2d2f33;
	padding: 30px;
	box-shadow: 0 3px 5px rgba(0, 0, 0, 0.2);
}	

input[name="css-tabs"] {
	display: none;
}

#tabs {
	padding: 0 0 0 50px;
	width: calc(100% + 50px);
	margin-left: -50px;
	background: #2b2a28;
	height: 80px;
	border-bottom: 5px solid #8201eb;
	box-shadow: 0 3px 5px rgba(0, 0, 0, 0.2); 
}
#tabs::before {
	content: "";
	display: block;
	position: absolute;
	z-index: -100;
	width: 100%;
	left: 0;
	margin-top: 16px;
	height: 80px;
	background: #2b2a28;
	border-bottom: 5px solid #8201eb;
}
#tabs::after {
	content: "";
	display: block;
	position: absolute;
	z-index: 0;
	height: 80px;
	width: 102px;
	background: #8201eb;
	transition: transform 400ms;
}
#tabs label {
	position: relative;
	z-index: 100;
	display: block;
	float: left;
	font-size: 11px;
	text-transform: uppercase;
	text-align: center;
	width: 92px;
	height: 100%;
	border-left: 10px dotted rgb(84, 20, 148);
	cursor: pointer;
}
#tabs label:first-child {
	border-left: 10px dotted rgb(84, 20, 148);
}
#tabs label::before {
	content: "";
	display: block;
	height: 30px;
	width: 30px;
	background-position: center;
	background-repeat: no-repeat;
	background-size: contain;
	filter: invert(40%);
	margin: 10px auto;
}
#tab1::before {
	background-image: url(https://s3-us-west-2.amazonaws.com/s.cdpn.io/106891/paper-plane.png);
}
#tab2::before {
	background-image: url(https://s3-us-west-2.amazonaws.com/s.cdpn.io/106891/big-cloud.png);
}
#tab3::before {
	background-image: url(https://s3-us-west-2.amazonaws.com/s.cdpn.io/106891/folding-brochure.png);
}
#tab4::before {
	background-image: url(https://s3-us-west-2.amazonaws.com/s.cdpn.io/106891/mans-silhouette.png);
}
#radio1:checked ~ #tabs #tab1::before,
#radio2:checked ~ #tabs #tab2::before,
#radio3:checked ~ #tabs #tab3::before,
#radio4:checked ~ #tabs #tab4::before {
	filter: invert(100%);
}
#radio1:checked ~ #tabs::after {
	transform: translateX(0);
}
#radio2:checked ~ #tabs::after {
	transform: translateX(101px);
}
#radio3:checked ~ #tabs::after {
	transform: translateX(202px);
}
#radio4:checked ~ #tabs::after {
	transform: translateX(303px);
}
#content {
	position: relative;
	height: 125px;
}
#content::before {
	content: "";
	display: block;
	position: absolute;
	width: 0;
	height: 0;
	margin-left: -50px;
	border-top: 8px solid #000;
	border-right: 10px solid #000;
	border-left: 10px solid transparent;
	border-bottom: 8px solid transparent;
}
#content::after {
	content: "";
	display: block;
	position: absolute;
	width: 0;
	height: 0;
	margin-left: calc(100% + 30px);
	border-top: 8px solid #000;
	border-left: 10px solid #000;
	border-right: 10px solid transparent;
	border-bottom: 8px solid transparent;
}
#content section {
	position: absolute;
	transform: translateY(50px);
	opacity: 0;
	transition: transform 500ms, opacity 500ms;
}
#radio1:checked ~ #content #content1,
#radio2:checked ~ #content #content2,
#radio3:checked ~ #content #content3,
#radio4:checked ~ #content #content4 {
	transform: translateY(0);
	opacity: 1;
}
footer {
	position: fixed;
	bottom: 0;
	right: 0;
	font-size: 13px;
	background: #f81919;
	padding: 5px 10px;
	margin: 5px;
}

/*confirmacion eliminacion de usuarios*/
.modal-content{
	background: linear-gradient(
		  82.3deg,
		  rgb(0, 0, 0) 75%,
		  rgb(145, 238, 88) 25%);
    text-align: center;
    border: none;
    border-radius: 20px;
}


.title{
    color: #000000;
    font-size: 30px;
    font-weight: 700;
    letter-spacing: 5px;
    text-transform: uppercase;
    margin: 0 0 10px;
}
.description{
    color: rgb(255, 255, 255);
    font-size: 14px;
    letter-spacing: 0.5px;
    margin: 0 0 30px;
}

.close {
	color: rgb(243, 9, 9);
	float: right;
	font-size: 28px;
	font-weight: bold;
}

.close:hover,
.close:focus {
	color: black;
	text-decoration: none;
	cursor: pointer;
}
.modal {
	display: none;
	position: fixed;
	z-index: 99;
	left: 0;
	top: 0;
	width: 100%;
	height: 100%;
	background-color: rgba(0, 0, 0, 0.4);
}

.close {
	color: rgb(0, 0, 0);
	float: right;
	font-size: 28px;
	font-weight: bold;
}

.close:hover,
.close:focus {
	color: black;
	text-decoration: none;
	cursor: pointer;
}

/* mari */
.profile-picture {
    width: 100px;
    height: 100px;
    border-radius: 50%;
    border: 2px solid #ccc;
}
.btn4 {
    --border-color: linear-gradient(-45deg, #ffae00, #7e03aa, #00fffb);
    --border-width: .125em;
    --curve-size: .5em;
    --blur: 30px;
    --bg: #080312;
    --color: #afffff;
    color: var(--color);
    position: relative;
    isolation: isolate;
    display: inline-grid;
    place-content: center;
    padding: .5em 1.5em;
    font-size: 17px;
    border: 0;
    text-transform: uppercase;
    box-shadow: 10px 10px 20px rgba(0, 0, 0, .6);
    clip-path: polygon(
              /* Top-left */
              0% var(--curve-size), 
              var(--curve-size) 0,
              /* top-right */
              100% 0,
              100% calc(100% - var(--curve-size)),  
              /* bottom-right 1 */
              calc(100% - var(--curve-size)) 100%,
              /* bottom-right 2 */
              0 100%);
    transition: color 250ms;
}
      
.btn4::after,
.btn4::before {
    content: '';
    position: absolute;
    inset: 0;
}
      
.btn4::before {
    background: var(--border-color);
    background-size: 300% 300%;
    animation: move-bg7234 5s ease infinite;
    z-index: -2;
}
      
@keyframes move-bg7234 {
    0% {
      background-position: 31% 0%
    }

    50% {
      background-position: 70% 100%
    }

    100% {
      background-position: 31% 0%
    }
}
      
.btn4::after {
    background: var(--bg);
    z-index: -1;
    clip-path: polygon(
              /* Top-left */
              var(--border-width) 
              calc(var(--curve-size) + var(--border-width) * .5),

              calc(var(--curve-size) + var(--border-width) * .5) var(--border-width),

              /* top-right */
              calc(100% - var(--border-width)) 
              var(--border-width),

              calc(100% - var(--border-width)) 
              calc(100% - calc(var(--curve-size) + var(--border-width) * .5)),

              /* bottom-right 1 */
              calc(100% - calc(var(--curve-size) + var(--border-width) * .5)) calc(100% - var(--border-width)),
              /* bottom-right 2 */
              var(--border-width) calc(100% - var(--border-width)));
    transition: clip-path 500ms;
}
      
.btn4:where(:hover, :focus)::after {
    clip-path: polygon(
                  /* Top-left */
                  calc(100% - var(--border-width)) 

                  calc(100% - calc(var(--curve-size) + var(--border-width) * 0.5)),
      
                  calc(100% - var(--border-width))

                  var(--border-width),
      
                  /* top-right */
                  calc(100% - var(--border-width))

                   var(--border-width),
      
                  calc(100% - var(--border-width)) 

                  calc(100% - calc(var(--curve-size) + var(--border-width) * .5)),
      
                  /* bottom-right 1 */
                  calc(100% - calc(var(--curve-size) + var(--border-width) * .5)) 
                  calc(100% - var(--border-width)),

                  /* bottom-right 2 */
                  calc(100% - calc(var(--curve-size) + var(--border-width) * 0.5))
                  calc(100% - var(--border-width)));
    transition: 200ms;
}
      
.btn4:where(:hover, :focus) {
    color: #fff;
}
	  
.login-box .user-box input {
	background: transparent; /* le quira lo blanco al cuadro de text */
	color: #fff;	
}
.login-box .user-box label {
	font-size: 16px;
	pointer-events: none;
	color: #8803f4;
}
.login-box .user-box input:focus ~ label,
.login-box .user-box input:valid ~ label {
	color: #8803f4;
	font-size: 17px;
}
.tab{
	border-color: #000000;
	width: 780px;
	height: 250px;
	text-shadow: #040f16;
	opacity:0.9;
	color:#ffffff;
	background-color: #2b2e31;
	overflow: auto;
	padding-left: 20px;
}
.tab::-webkit-scrollbar {
	  width: 12px;
}
.tab::-webkit-scrollbar-thumb {
	border-radius: 6px;
}
.tabla{
	border-color: #000000;
	width: 780px;
	height: 250px;
	text-shadow: #040f16;
	opacity:0.9;
	color:#ffffff;
	background-color: #2b2e31;
	overflow: auto;
	padding-left: 20px;
}
.tabla::-webkit-scrollbar {
	  width: 12px;
}
.tabla::-webkit-scrollbar-thumb {
	border-radius: 6px;
}

	.delete-button {
		width: 40px;
		height: 40px;
		border-radius: 50%;
		background-color: rgb(20, 20, 20);
		border: none;
		font-weight: 600;
		display: flex;
		align-items: center;
		justify-content: center;
		box-shadow: 0px 0px 20px rgba(255, 69, 69);
		cursor: pointer;
		transition-duration: 0.3s;
		overflow: hidden;
		position: relative;
	  }
	  
	  .delete-svgIcon {
		width: 15px;
		transition-duration: 0.3s;
	  }
	  
	  .delete-svgIcon path {
		fill: white;
	  }
	  
	  .delete-button:hover {
		width: 90px;
		border-radius: 50px;
		transition-duration: 0.3s;
		background-color: rgb(255, 69, 69);
		align-items: center;
	  }
	  
	  .delete-button:hover .delete-svgIcon {
		width: 20px;
		transition-duration: 0.3s;
		transform: translateY(60%);
		-webkit-transform: rotate(360deg);
		-moz-transform: rotate(360deg);
		-o-transform: rotate(360deg);
		-ms-transform: rotate(360deg);
		transform: rotate(360deg);
	  }
	  
	  .delete-button::before {
		display: none;
		content: "Delete";
		color: white;
		transition-duration: 0.3s;
		font-size: 2px;
	  }
	  
	  .delete-button:hover::before {
		display: block;
		padding-right: 10px;
		font-size: 13px;
		opacity: 1;
		transform: translateY(0px);
		transition-duration: 0.3s;
	  }
	  

	  .edit-button {
		width: 40px;
		height: 40px;
		border-radius: 50%;
		background-color:(20, 20, 20);
		border: none;
		font-weight: 600;
		display: flex;
		align-items: center;
		justify-content: center;
		box-shadow: 0px 0px 20px #00ff00;
		cursor: pointer;
		transition-duration: 0.3s;
		overflow: hidden;
		position: relative;
		text-decoration: none !important;
	  }
	  
	  .edit-svgIcon {
		width: 17px;
		transition-duration: 0.3s;
	  }
	  
	  .edit-svgIcon path {
		fill: white;
	  }
	  
	  .edit-button:hover {
		width: 120px;
		border-radius: 50px;
		transition-duration: 0.3s;
		background-color: #00ff00;
		align-items: center;
	  }
	  
	  .edit-button:hover .edit-svgIcon {
		width: 20px;
		transition-duration: 0.3s;
		transform: translateY(60%);
		-webkit-transform: rotate(360deg);
		-moz-transform: rotate(360deg);
		-o-transform: rotate(360deg);
		-ms-transform: rotate(360deg);
		transform: rotate(360deg);
	  }
	  
	  .edit-button::before {
		display: none;
		content: "Edit";
		color: white;
		transition-duration: 0.3s;
		font-size: 2px;
	  }
	  
	  .edit-button:hover::before {
		display: block;
		padding-right: 10px;
		font-size: 13px;
		opacity: 1;
		transform: translateY(0px);
		transition-duration: 0.3s;
	  }
    
</style>
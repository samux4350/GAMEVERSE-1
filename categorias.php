
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


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['agregarCategoria']) && !empty($_POST['nueva_categoria'])) {
        $nuevaCategoria = $conexion->real_escape_string($_POST['nueva_categoria']);
        $conexion->query("INSERT INTO categorias (nombre) VALUES ('$nuevaCategoria')");

        if ($conexion->affected_rows > 0) {
            echo "Nueva categoría agregada correctamente.";
        } else {
            echo "Error al agregar la nueva categoría: " . $conexion->error;
        }

        header('Location: ' . $_SERVER['PHP_SELF']);
        exit;
    }
}
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['eliminarCategoria']) && isset($_POST['categoria_id'])) {
        $categoriaIdEliminar = $conexion->real_escape_string($_POST['categoria_id']);
        $conexion->query("DELETE FROM categorias WHERE id = '$categoriaIdEliminar'");

        if ($conexion->affected_rows > 0) {
            echo "Categoría eliminada correctamente.";
        } else {
            echo "Error al eliminar la categoría: " . $conexion->error;
        }

        header('Location: ' . $_SERVER['PHP_SELF']);
        exit;
    }
}


$conexion->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/categorias.css">
    <title>Categorías</title>
</head>
<body>
<a href="./admin.php"><button class="at">Atras</button></a>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    <div class="login-box">
    <h1>Agregar Categoría</h1>
    <div class="user-box">
        <ul>
            <?php foreach ($categorias as $categoria): ?>
                <li>
                <div class="checkbox">
                    <input class="checkbox__input" type="checkbox" id="categoria_<?php echo $categoria['id']; ?>" name="categorias[]" value="<?php echo $categoria['id']; ?>">

                    <label class="checkbox__label" for="categoria_<?php echo $categoria['id']; ?>"><?php echo $categoria['nombre'];?>
                    <span class="checkbox__custom"></span>
                    </label>
                </div>
                
                </li>
            <?php endforeach; ?>
        </ul>
        <label for="nueva_categoria">Nueva Categoría:</label>

        <input type="text" id="nueva_categoria" name="nueva_categoria">
        <button class="agg" type="submit" name="agregarCategoria">Agregar</button>
    </form>

    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    <br>
        <h2>Eliminar Categoría</h2>

        <label for="categoria_id">Seleccionar Categoría:</label>
        <select id="categoria_id" name="categoria_id" required>
            <?php foreach ($categorias as $categoria): ?>
                <option value="<?php echo $categoria['id']; ?>"><?php echo $categoria['nombre']; ?></option>
            <?php endforeach; ?>
        </select>

        <button class="agg" type="submit" name="eliminarCategoria">Eliminar</button>
    </form>
    </div>
    </div>
</body>
</html>
<style>

html {
    height: 100%;
  }
  body {
    margin:0;
    padding:0;
    font-family: sans-serif;
    background: linear-gradient(#141e30, #243b55);
    
  }

.at {
  --green: #40c9ff;
  font-size: 15px;
  padding: 0.7em 2.7em;
  letter-spacing: 0.06em;
  position: relative;
  font-family: inherit;
  border-radius: 0.6em;
  overflow: hidden;
  transition: all 0.3s;
  line-height: 1.4em;
  border: 2px solid var(--green);
  background: linear-gradient(to right, rgba(64, 201, 255, 0.1) 1%, transparent 40%, transparent 60%, rgba(64, 201, 255, 0.1) 100%);
  color: var(--green);
  box-shadow: inset 0 0 10px rgba(64, 201, 255, 0.4), 0 0 9px 3px rgba(64, 201, 255, 0.1);
}

.at:hover {
  color: #e81cff;
  box-shadow: inset 0 0 10px rgba(64, 201, 255, 0.6), 0 0 9px 3px rgba(64, 201, 255, 0.2);
}

.at:before {
  content: "";
  position: absolute;
  left: -4em;
  width: 4em;
  height: 100%;
  top: 0;
  transition: transform .4s ease-in-out;
  background: linear-gradient(to right, transparent 1%, rgba(64, 201, 255, 0.1) 40%, rgba(64, 201, 255, 0.1) 60%, transparent 100%);
}

.at:hover:before {
  transform: translateX(15em);
}


  h1 {
  color: white;
  text-align: center;
  margin-top: 8%;
}

.checkbox {
  display: inline-block;
  position: relative;
  cursor: pointer;
}

.checkbox__input {
  position: absolute;
  opacity: 0;
  width: 0;
  height: 0;
}

.checkbox__label {
  display: inline-block;
  padding-left: 30px;
  margin-bottom: 10px;
  position: relative;
  font-size: 16px;
  color: #fff;
  cursor: pointer;
  transition: all 0.6s cubic-bezier(0.23, 1, 0.320, 1);
}

.checkbox__custom {
  position: absolute;
  top: 0;
  left: 0;
  width: 20px;
  height: 20px;
  background: linear-gradient(#212121, #212121) padding-box,
              linear-gradient(145deg,#e81cff, #40c9ff) border-box;
  border: 2px solid transparent;
  transition: all 0.6s cubic-bezier(0.23, 1, 0.320, 1);
}

.checkbox__input:checked + .checkbox__label .checkbox__custom {
  background-image: linear-gradient(145deg,#e81cff, #40c9ff);
  transform: rotate(45deg) scale(0.8);
}

.checkbox__label:hover .checkbox__custom {
  transform: scale(1.2);
}

select {
  font: inherit;
  padding: 0.7rem 4rem 0.7rem 1rem;
  background:#141e30;
  color: white;
  border-radius: 0.25em;
  box-shadow: #e81cff;
  }
  option {
    color: inherit;
    background-color: #141e30;
  }

  .agg {
  --green: #e81cff;
  font-size: 15px;
  padding: 0.5em 2em;
  letter-spacing: 0.06em;
  position: relative;
  font-family: inherit;
  border-radius: 0.6em;
  overflow: hidden;
  transition: all 0.3s;
  line-height: 1.4em;
  border: 2px solid var(--green);
  background: linear-gradient(to right, rgba(232, 28, 255, 0.1) 1%, transparent 40%, transparent 60%, rgba(232, 28, 255, 0.1) 100%);
  color: var(--green);
  box-shadow: inset 0 0 10px rgba(232, 28, 255, 0.4), 0 0 9px 3px rgba(232, 28, 255, 0.1);
}

.agg:hover {
  color: #40c9ff;
  box-shadow: inset 0 0 10px rgba(232, 28, 255, 0.6), 0 0 9px 3px rgba(232, 28, 255, 0.2);
}

.agg:before {
  content: "";
  position: absolute;
  left: -4em;
  width: 4em;
  height: 100%;
  top: 0;
  transition: transform .4s ease-in-out;
  background: linear-gradient(to right, transparent 1%, rgba(232, 28, 255, 0.1) 40%, rgba(232, 28, 255, 0.1) 60%, transparent 100%);
}

.agg:hover:before {
  transform: translateX(15em);
}


  .login-box {
    position: absolute;
    top: 50%;
    left: 50%;
    width: 400px;
    padding: 25px;
    transform: translate(-50%, -50%);
    background: rgba(0,0,0,.5);
    box-sizing: border-box;
    box-shadow: 0 15px 25px rgba(0,0,0,.6);
    border-radius: 10px;
  }
  
  .login-box .user-box {
    position: relative;
    color: white;
    
  }
  
  .login-box .user-box input {
    color: #fff;
    background: transparent;
  }
  
  .login-box form a {
    position: relative;
    color: #8803f4;
  }

  .footer {background-color: #850d0d;color: white;text-align: center;padding: 10px 0;
  position: fixed;
  bottom: 0;
  left: 0;
  right: 0;
  z-index: -1;
  }

</style>
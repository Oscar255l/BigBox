<?php include '../backend/verificar_sesion.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/style_crearservicio.css">
  <title>Document</title>
  <style>
    input[type="file"] {
      background-color: black;
      color: white;
      border: none;
      padding: 10px;
      border-radius: 5px;
      cursor: pointer;
    }

    input[type="file"]::-webkit-file-upload-button {
      background-color: black;
      color: white;
      border: none;
      padding: 10px;
      border-radius: 5px;
      cursor: pointer;
    }

    input[type="file"]::-ms-browse {
      background-color: black;
      color: white;
      border: none;
      padding: 10px;
      border-radius: 5px;
      cursor: pointer;
    }

    .inputBx {
      margin-bottom: 10px;
    }
  </style>
</head>

<body>
  <div class="ring">
    <i style="--clr:#ffffff;"></i>
    <i style="--clr:#ffae44;"></i>

    <div class="login">
      <h2>Servicio</h2>
      <form action="../backend/agregar_servicio.php" method="post" enctype="multipart/form-data">
            <div class="inputBx">
                <input type="text" name="nombreServicio" placeholder="Nombre de Servicio" required>
            </div>

            <div class="inputBx">
                <input type="text" name="descripcionServicio" placeholder="Descripción del Servicio" required>
            </div>

            <div class="inputBx">
                <input type="text" name="infoContacto" placeholder="Información de Contacto" required>
            </div>

            <div class="inputBx">
                <input type="file" name="servicioImage" accept="image/*">
            </div>

            <div class="inputBx2">
                <label for="categoriaServicio">Categoría del Servicio:</label>
                <select id="categoriaServicio" name="categoriaServicio" required>
                    <option value="Tecnologia">Tecnologia</option>
                    <option value="Marketing">Marketing</option>
                    <option value="Salud">Salud</option>
                    <option value="Juegos">Juegos</option>
                    <option value="Educacion">Educacion</option>
                    <option value="Diseño">Diseño</option>
        </select>
    </div>

    <div class="inputBx">
        <input type="submit" value="Añadir Servicio">
    </div>
</form>

    </div>
  </div>
</body>

</html>


        

<?php include '../backend/verificar_sesion.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/style_crearproducto.css">
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
  <!--ring div starts here-->
  <div class="ring">
    <i style="--clr:#ffffff;"></i>
    <i style="--clr:#ffae44;"></i>

    <div class="login">
      <h2>Producto</h2>
      <form action="../backend/agregar_producto.php" method="post" enctype="multipart/form-data">
    <div class="inputBx">
        <input type="text" name="nombreProducto" placeholder="Nombre de Producto" required>
    </div>

    <div class="inputBx">
        <input type="text" name="descripcionProducto" placeholder="Descripción del Producto" required>
    </div>

    <div class="inputBx">
        <input type="text" name="infoContacto" placeholder="Información de Contacto" required>
    </div>

    <div class="inputBx">
        <input type="file" name="userImage" accept="image/*">
    </div>

    <div class="inputBx">
        <input type="submit" value="Añadir Producto">
    </div>
</form>
    </div>
  </div>
  <!--ring div ends here-->
</body>

</html>
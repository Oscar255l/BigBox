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
      <h2>Historia</h2>
      <form action="../backend/agregar_historia.php" method="post" enctype="multipart/form-data">
            <div class="inputBx">
                <input type="text" name="nombreHistoria" placeholder="Nombre de Historia" required>
            </div>

            <div class="inputBx">
                <input type="text" name="descripcionHistoria" placeholder="Descripción de historia" required>
            </div>

            <div class="inputBx">
                <input type="file" name="HistoriaImage" accept="image/*">
            </div>

    <div class="inputBx">
        <input type="submit" value="Añadir Historia">
    </div>
</form>

    </div>
  </div>
</body>

</html>


        

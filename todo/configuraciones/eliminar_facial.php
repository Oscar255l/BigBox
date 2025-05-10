<?php include '../backend/verificar_sesion.php'; ?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Eliminar Escáner Facial</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    body {
      font-family: Arial, sans-serif;
      text-align: center;
      padding: 40px;
    }
    button {
      padding: 12px 24px;
      font-size: 16px;
      background-color: #c0392b;
      color: white;
      border: none;
      border-radius: 6px;
      cursor: pointer;
    }
    button:hover {
      background-color: #e74c3c;
    }
    #estado {
      margin-top: 20px;
      font-weight: bold;
      color: #2c3e50;
    }
  </style>
</head>
<body>

  <h2>Eliminar Rostro Registrado</h2>
  <p>Presiona el botón para eliminar tu escáner facial registrado.</p>

  <button onclick="eliminarRostro()">Eliminar Rostro</button>
  <p id="estado"></p>

  <script>
    function eliminarRostro() {
      fetch('../backend/escaner_facial/eliminar_rostro.php')
        .then(res => res.text())
        .then(mensaje => {
          document.getElementById("estado").textContent = mensaje;
        })
        .catch(err => {
          document.getElementById("estado").textContent = "Error al eliminar el rostro.";
          console.error(err);
        });
    }
  </script>

</body>
</html>

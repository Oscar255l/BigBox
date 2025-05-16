<?php include '../backend/verificar_sesion.php'; ?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Registrar Escáner Facial</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script defer src="https://cdn.jsdelivr.net/npm/face-api.js@0.22.2/dist/face-api.min.js"></script>
  

  <style>
    video {
      border: 2px solid #000;
      margin: 20px auto;
      display: block;
    }
    button {
      display: block;
      margin: 20px auto;
      padding: 10px 20px;
      font-size: 16px;
    }
    #status {
      text-align: center;
      font-weight: bold;
    }
  </style>
</head>
<body>
  <h2 style="text-align:center;">Registrar Rostro</h2>
  <video id="video" width="400" height="300" autoplay muted></video>
  <button onclick="capturarRostro()">Registrar Rostro</button>
  <p id="status"></p>

  <script>
    const status = document.getElementById("status");
    const video = document.getElementById("video");

    // Cargar modelos de face-api.js
Promise.all([
  faceapi.nets.tinyFaceDetector.loadFromUri('../models'),
  faceapi.nets.faceLandmark68TinyNet.loadFromUri('../models'),
  faceapi.nets.faceRecognitionNet.loadFromUri('../models')
]).then(iniciarVideo);


    function iniciarVideo() {
      navigator.mediaDevices.getUserMedia({ video: {} })
        .then(stream => video.srcObject = stream)
        .catch(err => console.error("Error accediendo a la cámara:", err));
    }

    async function capturarRostro() {
      const deteccion = await faceapi.detectSingleFace(video, new faceapi.TinyFaceDetectorOptions()).withFaceLandmarks(true).withFaceDescriptor();
      if (!deteccion) {
        status.textContent = "No se detectó un rostro. Intenta nuevamente.";
        return;
      }

      const embedding = Array.from(deteccion.descriptor); // Convertir a arreglo
      status.textContent = "Rostro capturado, guardando...";

      // Enviar al backend
      fetch('../backend/escaner_facial/guardar_rostro.php', {
        method: 'POST',
        headers: {
          'Content-Type': 'application/json'
        },
        body: JSON.stringify({ embedding })
      })
      .then(res => res.text())
      .then(mensaje => {
        status.textContent = mensaje;
      })
      .catch(err => {
        status.textContent = "Error al guardar el rostro.";
        console.error(err);
      });
    }
  </script>
</body>
</html>




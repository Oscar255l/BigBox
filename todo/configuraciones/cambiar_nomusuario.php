<?php include '../backend/verificar_sesion.php'; ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style_login.css">
    <script src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <title>Cambiar Nombre Usuario - BIGBOOX</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            font-family: "Poppins", sans-serif;
        }

        body {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            width: 100%;
            background: url('http://demos.creative-tim.com/paper-kit-2/assets/img/antoine-barres.jpg') no-repeat;
            background-position: center;
            background-size: cover;
            position: relative;
        }

        section {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 100%;
        }

        .form-box {
            position: relative;
            width: 500px;
            height: 550px;
            background: transparent;
            border: 2px solid rgba(255, 255, 255, 0.5);
            border-radius: 20px;
            backdrop-filter: blur(15px);
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .form-value {
            display: flex;
            flex-direction: column;
            align-items: center;
            width: 100%;
        }

        h2 {
            font-size: 2.5em;
            color: #fff;
            text-align: center;
        }

        .inputbox {
            position: relative;
            margin: 30px 0;
            width: 350px;
            border-bottom: 2px solid #fff;
            display: flex;
            align-items: center;
        }

        .inputbox label {
            position: absolute;
            top: 50%;
            left: 5px;
            transform: translateY(-50%);
            color: #fff;
            font-size: 1.2em;
            pointer-events: none;
            transition: 0.5s;
        }

        input:focus ~ label {
            top: -5px;
        }
        input:valid ~ label {
            top: -5px;
        }

        .inputbox input {
            width: 100%;
            height: 50px;
            background: transparent;
            border: none;
            outline: none;
            font-size: 1.2em;
            padding: 0 35px 0 5px;
            color: #fff;
        }

        .inputbox ion-icon {
            position: absolute;
            right: 8px;
            color: #fff;
            font-size: 1.5em;
            top: 20px;
        }

        .forget {
            display: flex;
            justify-content: space-between;
            margin: 10px 0 15px;
            font-size: 1em;
            color: #fff;
            width: 350px;
        }

        .forget label:nth-child(2) {
            order: 1;
        }

        .forget label {
            display: flex;
            align-items: center;
        }

        .forget label input[type="checkbox"] {
            margin-right: 6px;
        }

        .forget label a {
            color: #fff;
            text-decoration: none;
        }

        .forget label a:hover {
            text-decoration: underline;
        }

        .home-button {
            display: inline-block;
            width: 100px;
            height: 40px;
            border-radius: 20px;
            background: #fff;
            border: none;
            outline: none;
            cursor: pointer;
            font-size: 1.2em;
            font-weight: 600;
            text-align: center;
            line-height: 40px; /* Centra el texto verticalmente */
            text-decoration: none;
            color: #000;
            position: absolute;
            top: 20px;
            left: 20px;
        }

        .home-button:hover {
            background-color: #ddd;
        }

        .register {
            font-size: 1em;
            color: #fff;
        }
    </style>
</head>
<body>
    <section>
        <div class="form-box">
            <div class="form-value">
                <h2>Cambiar Nombre Usuario</h2>
                <form action="../backend/cambiar_nomusuario2.php" method="POST">
                    <div class="inputbox">
                        <ion-icon name="mail-outline"></ion-icon>
                        <input type="password" name="contrasena_actual" required>
                        <label for="">Contraseña Actual</label>
                    </div>
                    <div class="inputbox">
                        <ion-icon name="lock-closed-outline"></ion-icon>
                        <input type="text" name="nuevo_nomusuario" required>
                        <label for="">Nuevo Nombre Usuario</label>
                    </div>
                    <button type="submit">Aceptar</button>
                </form>
            </div>
        </div>
    </section>
</body>
</html>
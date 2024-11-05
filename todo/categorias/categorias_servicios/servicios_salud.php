<?php
include '../../backend/verificar_sesion.php';
include '../../database/conexion.php';

$query = "SELECT id_servicio, nom_servicio, desc_servicio, tel_contacto, imagen_ser, categoria_servicio 
          FROM servicios 
          WHERE categoria_servicio = 'Salud'";
$result = pg_query($conexion, $query);

if (!$result) {
    echo "Error al obtener los servicios: " . pg_last_error($conexion);
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Servicios - Salud</title>
</head>

<body>
    <div class="container">
        <h1 class="my-4">Servicios - Categoría: Salud</h1>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Descripción</th>
                    <th scope="col">Categoría</th>
                    <th scope="col">Contacto</th>
                    <th scope="col">Imagen</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = pg_fetch_assoc($result)) { ?>
                    <tr>
                        <td><?php echo htmlspecialchars($row['id_servicio']); ?></td>
                        <td><?php echo htmlspecialchars($row['nom_servicio']); ?></td>
                        <td><?php echo htmlspecialchars($row['desc_servicio']); ?></td>
                        <td><?php echo htmlspecialchars($row['categoria_servicio']); ?></td>
                        <td><?php echo htmlspecialchars($row['tel_contacto']); ?></td>
                        <td>
                            <?php if ($row['imagen_ser']) { ?>
                                <img src="data:image/png;base64,<?php echo base64_encode(pg_unescape_bytea($row['imagen_ser'])); ?>" alt="Servicio" style="width: 100px; height: 100px; object-fit: cover;">
                            <?php } else { ?>
                                Sin imagen
                            <?php } ?>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>

<?php

pg_free_result($result);
pg_close($conexion);
?>
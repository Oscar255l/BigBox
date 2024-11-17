<?php
include '../../backend/verificar_sesion.php';
include '../../database/conexion.php';

$query = "SELECT s.id_producto, s.nom_producto, s.desc_producto, s.tel_vendedor, s.imagen_pro, s.categoria_producto, u.id_usuario, u.nom_usuario
          FROM productos s
          JOIN usuarios u ON s.id_usuario = u.id_usuario
          WHERE categoria_producto = 'Educacion'";
$result = pg_query($conexion, $query);
if (!$result) {
    echo "Error al obtener los productos: " . pg_last_error($conexion);
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Productos - Educacion</title>
</head>

<body>
    <div class="container">
        <h1 class="my-4">Productos - Categoría: Educacion</h1>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Descripción</th>
                    <th scope="col">Categoría</th>
                    <th scope="col">Contacto</th>
                    <th scope="col">Imagen</th>
                    <th scope="col">Publicado por</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = pg_fetch_assoc($result)) { ?>
                    <tr>
                        <td><?php echo htmlspecialchars($row['id_producto']); ?></td>
                        <td><?php echo htmlspecialchars($row['nom_producto']); ?></td>
                        <td><?php echo htmlspecialchars($row['desc_producto']); ?></td>
                        <td><?php echo htmlspecialchars($row['categoria_producto']); ?></td>
                        <td><?php echo htmlspecialchars($row['tel_vendedor']); ?></td>
                        <td>
                            <?php if ($row['imagen_pro']) { ?>
                                <img src="data:image/png;base64,<?php echo base64_encode(pg_unescape_bytea($row['imagen_pro'])); ?>" alt="Producto" style="width: 100px; height: 100px; object-fit: cover;">
                            <?php } else { ?>
                                Sin imagen
                            <?php } ?>
                        </td>
                        <td><?php echo htmlspecialchars($row['nom_usuario']); ?></td>
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

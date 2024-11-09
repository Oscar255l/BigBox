<?php
include '../../backend/verificar_sesion.php';
include '../../database/conexion.php';

// Consulta para obtener los eventos
$query = "SELECT s.id_evento, s.nom_evento, s.desc_evento, s.lugar_evento, s.imagen_eve, s.id_usuario, u.nom_usuario 
          FROM eventos s
          JOIN usuarios u ON s.id_usuario = u.id_usuario";
$result = pg_query($conexion, $query);

if (!$result) {
    echo "Error al obtener los eventos: " . pg_last_error($conexion);
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Eventos</title>
</head>

<body>
    <div class="container">
        <h1 class="my-4">Eventos</h1>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Descripción</th>
                    <th scope="col">Lugar</th>
                    <th scope="col">Imagen</th>
                    <th scope="col">Publicado por</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = pg_fetch_assoc($result)) { ?>
                    <tr>
                        <td><?php echo htmlspecialchars($row['id_evento']); ?></td>
                        <td><?php echo htmlspecialchars($row['nom_evento']); ?></td>
                        <td><?php echo htmlspecialchars($row['desc_evento']); ?></td>
                        <td><?php echo htmlspecialchars($row['lugar_evento']); ?></td>
                        <td>
                            <?php if ($row['imagen_eve']) { ?>
                                <img src="data:image/png;base64,<?php echo base64_encode(pg_unescape_bytea($row['imagen_eve'])); ?>" alt="Evento" style="width: 100px; height: 100px; object-fit: cover;">
                            <?php } else { ?>
                                Sin imagen
                            <?php } ?>
                        </td>
                        <td><?php echo htmlspecialchars($row['nom_usuario']); ?></td>
                        <td>
                            <!-- Formulario para eliminar producto -->
                            <form action="../eliminar/eliminar_eventos.php" method="POST" style="display:inline;">
                                <input type="hidden" name="id_evento" value="<?php echo $row['id_evento']; ?>">
                                <button type="submit" class="btn btn-danger" >Eliminar</button>
                            </form>
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
// Liberar resultado y cerrar conexión
pg_free_result($result);
pg_close($conexion);
?>

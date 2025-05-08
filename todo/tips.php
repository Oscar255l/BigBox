<?php include 'backend/verificar_sesion.php'; 
  // Array con los tips y consejos que para mostrar aleatoriamente
  $consejosusuarios = [
    "Define tus necesidades de compra: Antes de ingresar a la plataforma, identifica y lista qué productos necesitas para evitar compras impulsivas o innecesarias.",
    "Crea y actualiza tu perfil de usuario: Completa tus datos personales y de contacto para recibir recomendaciones personalizadas y promociones exclusivas."
  ];

  // Seleccionar un consejo aleatorio inicial
  $consejoInicial = $consejosusuarios[array_rand($consejosusuarios)];

  // Array con los tips y consejos que para mostrar aleatoriamente
  $consejosEmprendedores = [
    "Crea un perfil profesional completo: Añade información clara sobre tu negocio, incluyendo datos de contacto y un logo que represente tu marca.",
  ];

  // Seleccionar un consejo aleatorio inicial
  $consejoIniciall = $consejosEmprendedores[array_rand($consejosEmprendedores)];
?>

<!DOCTYPE html>
<html lang="en"> 
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.1/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style_tips1.css">
    <script defer src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"></script>
    <script defer src="js/menu.js"></script>
    <title>BIGBOOX</title>
</head>
<body class="light-theme dark-theme">
    <header>
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg navbar-light">
          <div class="header-inner d-flex justify-content-between align-items-center">
            <a class="navbar-brand flex-shrink-0" href="#"><img src="https://yudiz.com/codepen/nft-store/logo-icon.svg" alt="logo-image" class="img-fluid">
              Bigboox
            </a>
            <div class="header-content d-flex align-items-center justify-content-end">
              <form class="d-flex justify-content-end align-items-center">
                <div class="search-icon">
                  <i class="fa fa-search" aria-hidden="true"></i>
                  <input class="form-control" type="search" placeholder="Search" aria-label="Search">
                </div>
                <label class="switch flex-shrink-0 mb-0">
                  <input id="checkbox" type="checkbox">
                  <span class="slider round"></span>
                </label>
              </form>
              <a href="#" class="profile"><img src="images/usuario_normal.png" alt="user-image">
                <?php echo htmlspecialchars($_SESSION['usuario']); ?>
              </a>
            
            <a href="backend/cerrar_sesion.php" class="notification"><i class="fa fa-sign-out" aria-hidden="true"></i></a>
            </div>
          </div>
          <button class="hamburger-icon" onclick="this.classList.toggle('ham-style')">
            <span></span>
            <span></span>
            <span></span>
          </button>
        </nav>
      </div>
    </header>
    <div class="nft-store">
      <div class="container-fluid">
        <div class="nft-store-inner d-flex">
          <div class="menu-links">
            <ul>
              <li class="nav-item active">
                <a href="menu.php" class="d-flex align-items-center nav-link"><i class="fa fa-home" aria-hidden="true"></i>
                  <span>Inicio</span></a>
              </li>
              <li class="nav-item">
                <a href="productos.php" class="d-flex align-items-center nav-link"><i class="fa fa-briefcase" aria-hidden="true"></i>
                  <span>Productos</span></a>
              </li>
              <li class="nav-item">
                <a href="servicios.php" class="d-flex align-items-center nav-link"><i class="fa fa-heart-o" aria-hidden="true"></i>
                  <span>Servicios</span></a>
              </li>
              <li class="nav-item">
                <a href="emprendedores.php" class="d-flex align-items-center nav-link"><i class="fa fa-square-o" aria-hidden="true"></i>
                  <span>Emprendedores</span></a>
              </li>
              <li class="nav-item">
                <a href="eventos.php" class="d-flex align-items-center nav-link"><i class="fa fa-fire" aria-hidden="true"></i>
                  <span>Eventos</span></a>
              </li>
              <li class="nav-item">
                <a href="" class="d-flex align-items-center nav-link"><i class="fa fa-lightbulb-o" aria-hidden="true"></i>
                  <span>Tips</span></a>
              </li>
              <li class="nav-item">
                <a href="configuraciones/ajustes.php" class="d-flex align-items-center nav-link"><i class="fa fa-cog" aria-hidden="true"></i>
                  <span>Ajustes</span></a>
              </li>
            </ul>
        </div>

        <div class="nft-store-content">
            <div class="nft-up-content">
                <div class="row">
                    <div class="col-md-10">
                        <div class="fire-bubble-art d-flex justify-content-between  align-items-center" style="width: 835px">
                            <img src="images/images_tips/emprendedores.png" alt="fire-bubble-image" class="img-fluid fire-image fire-width">
                            <div class="fire-content fire-width">
                            <h3 class="mb-0" style="margin-top: -10px; margin-left: 30px; font-size: 36px; font-weight: bold; text-align: center;">
                              Tips y Consejos para Emprendedores
                            </h3>
                                  <div class="fire-time d-flex justify-content-between">
                                      <div class="current-bid">
                                  </div>
                                <div class="auction">
                            </div>
                        </div>
                        <!-- Mostrar el texto aleatorio -->
                        <div id="consejo-aleatorioo" class="p-3 text-center" style="font-size: 23px; font-weight: 500; text-align: center; width: 100%; padding: 20px; display: flex; justify-content: center; align-items: center; min-height: 150px; transition: opacity 0.5s ease;">
                        <?php echo $consejoIniciall; ?>
                    </div>
                </div>
            </div>

            <div class="nft-up-content" style="margin-top: 30px;">
                <div class="row">
                  <div class="col-md-10">
                      <div class="fire-bubble-art d-flex justify-content-between align-items-center" style="width: 835px">
                          <img src="images/images_tips/usuarios.png" alt="fire-bubble-image" class="img-fluid fire-image fire-width">
                            <div class="fire-content fire-width">
                            <h3 class="mb-0" style="margin-top: -20px; margin-left: 0px; font-size: 36px; font-weight: bold; text-align: center;">
                              Tips y Consejos para Usuarios
                            </h3>
                              <div class="fire-time d-flex justify-content-between">
                                  <div class="current-bid">
                                    </div>
                                      <div class="auction">
                                    </div>
                                  </div>
                                    <!-- Mostrar el texto aleatorio -->
                                    <div id="consejo-aleatorio" class="p-3 text-center" style="font-size: 23px; font-weight: 500; text-align: center; width: 100%; padding: 20px; display: flex; justify-content: center; align-items: center; min-height: 150px; transition: opacity 0.5s ease;">
                                    <?php echo $consejoInicial; ?>
                                  </div>
                                  </div>
                              </div>
                            </div>
                        </div>
                      </div>
                </div>
        </div>

    <!-- Script para consejos de usuarios -->
<script>
  // Array con los consejos para usuarios
  const consejosUsuarios = <?php echo json_encode($consejosusuarios); ?>;
  const elementoConsejoUsuario = document.getElementById('consejo-aleatorio');
  let consejoUsuarioActual = '<?php echo addslashes($consejoInicial); ?>';

  // Función para seleccionar y mostrar un consejo aleatorio para usuarios
  function mostrarConsejoUsuarioAleatorio() {
    // Efecto de desvanecimiento
    elementoConsejoUsuario.style.opacity = 0;
    
    setTimeout(() => {
      // Seleccionar un nuevo consejo aleatorio (evitando repetir el actual)
      let nuevoIndice;
      let nuevoConsejo;
      
      do {
        nuevoIndice = Math.floor(Math.random() * consejosUsuarios.length);
        nuevoConsejo = consejosUsuarios[nuevoIndice];
      } while (nuevoConsejo === consejoUsuarioActual && consejosUsuarios.length > 1);
      
      consejoUsuarioActual = nuevoConsejo;
      elementoConsejoUsuario.textContent = consejoUsuarioActual;
      
      // Mostrar el nuevo consejo con efecto de aparición
      elementoConsejoUsuario.style.opacity = 1;
    }, 500); // Esperar 500ms para el efecto de desvanecimiento
  }

  // Cambiar el consejo cada 45 segundos
  setInterval(mostrarConsejoUsuarioAleatorio, 10000);
</script>

<!-- Script para consejos de emprendedores -->
<script>
  // Array con los consejos para emprendedores
  const consejosEmprendedores = <?php echo json_encode($consejosEmprendedores); ?>;
  const elementoConsejoEmprendedor = document.getElementById('consejo-aleatorioo');
  let consejoEmprendedorActual = '<?php echo addslashes($consejoIniciall); ?>';

  // Función para seleccionar y mostrar un consejo aleatorio para emprendedores
  function mostrarConsejoEmprendedorAleatorio() {
    // Efecto de desvanecimiento
    elementoConsejoEmprendedor.style.opacity = 0;
    
    setTimeout(() => {
      // Seleccionar un nuevo consejo aleatorio (evitando repetir el actual)
      let nuevoIndice;
      let nuevoConsejo;
      
      do {
        nuevoIndice = Math.floor(Math.random() * consejosEmprendedores.length);
        nuevoConsejo = consejosEmprendedores[nuevoIndice];
      } while (nuevoConsejo === consejoEmprendedorActual && consejosEmprendedores.length > 1);
      
      consejoEmprendedorActual = nuevoConsejo;
      elementoConsejoEmprendedor.textContent = consejoEmprendedorActual;
      
      // Mostrar el nuevo consejo con efecto de aparición
      elementoConsejoEmprendedor.style.opacity = 1;
    }, 500); // Esperar 500ms para el efecto de desvanecimiento
  }

  // Cambiar el consejo cada 45 segundos
  setInterval(mostrarConsejoEmprendedorAleatorio, 10000);
</script>


    <div class="trending">
        <div class="trending-title">
            <hr>
            <div class="col-6 text-right">
                <a href="documents/archivo.pdf" class="theme-btn" download>Descargar PDF</a>
            </div>
        </div>
    </div>

    <div class="video-container">
        <h1 class="titulo-video">Videos Interesantes</h1>
        <video class="reproductor-video" width="640" height="360" controls>
            <source src="videos/principios_negocios.mp4" type="video/mp4">
            Tu navegador no soporta el elemento de video.
        </video>
    </div>

    <?php if ($_SESSION['cargo'] === 'Administrador'): ?>
        <a href="backend/eliminar_admin/eliminartodo_historia.php" class="theme-btn"> Admin </a>
    <?php endif; ?>
</div>
                </div>
              </div>
                </div>
            </a>
        </div>
    </div>
</div>

<style>
    /* Estilo para que los enlaces parezcan botones */
    .btn-link {
        text-decoration: none;
        color: inherit;
        display: block;
        transition: transform 0.2s;
    }

    .btn-link:hover .trending-content {
        transform: scale(1.05);
    }


    
</style>

  </body>
</html>
<?php include 'backend/verificar_sesion.php'; ?>
<DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.1/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style_servicios.css">
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
              Bigboox</a>
            <div class="header-content d-flex align-items-center justify-content-end">
              <form class="d-flex justify-content-end align-items-center">
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
          <button class="hamburger-icon">
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
                <a href="tips.php" class="d-flex align-items-center nav-link"><i class="fa fa-lightbulb-o" aria-hidden="true"></i>
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
                <div class="col-md-8">
                  <div class="fire-bubble-art d-flex justify-content-between  align-items-center">
                    <img src="images/images_servicios/servicios.png" alt="fire-bubble-image" class="img-fluid fire-image fire-width">
                    <div class="fire-content fire-width">
                      <h3 class="mb-0">Servicios</h3>
                      <div class="fire-time d-flex justify-content-between">
                       
                      </div>
                  
                        <div class="fire-links">
                        <a href="crear/crear_servicio.php" class="theme-btn d-block mb-2">Ingresar Servicio</a> 
                        <a href="ver/ver_servicios.php" class="theme-btn d-block">Ver Servicios</a>
                    </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <figure class="paint-image" style="background: url('images/images_servicios/servico.jpg') no-repeat center center / cover;">
                    <h1>Servicios para tu gusto</h1>
                  </figure>
                </div>
              </div>
            </div>
            <div class="trending">
              <div class="trending-title">
                <div class="row justify-content-between align-items-center">
                  <div class="col-6">
                    <h2>Categorias Servicios</h2>
                  </div>
                  <div class="col-6 text-right">
                    <a href="mis_creaciones/mis_servicios.php" class="theme-btn"> Mirar mis servicios </a>
                  </div>
                  </div>
                  <div class="col-6 text-right">
    <?php if ($_SESSION['cargo'] === 'Administrador'): ?>
        <a href="backend/eliminar_admin/eliminartodo_servicio.php" class="theme-btn"> Admin </a>
    <?php endif; ?>
</div>
                </div>
              </div>
              <div class="trending-grid">
    <div class="row">
        <div class="col-md-4">
            <a href="categorias/categorias_servicios/servicios_juegos.php" class="btn-link">
                <div class="trending-content">
                    <img src="images/images_servicios/juegos_servicio.jpg" alt="card-images" class="img-fluid">
                    <div class="trending-desc">
                        <h3 class="user-position">Juegos</h3>
                        <img src="images/images_servicios/juegos_icon.png" alt="img-fluid" class="user-image">
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-4">
            <a href="categorias/categorias_servicios/servicios_marketing.php" class="btn-link">
                <div class="trending-content">
                    <img src="images/images_servicios/marketing_servicio.jpg" alt="card-images" class="img-fluid">
                    <div class="trending-desc">
                        <h3 class="user-position">Marketing</h3>
                        <img src="images/images_servicios/marketing_icon.png" alt="img-fluid" class="user-image">
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-4">
            <a href="categorias/categorias_servicios/servicios_salud.php" class="btn-link">
                <div class="trending-content">
                    <img src="images/images_servicios/salud_servicio.jpg" alt="card-images" class="img-fluid">
                    <div class="trending-desc">
                        <h3 class="user-position">Salud</h3>
                        <img src="images/images_servicios/salud_icon.png" alt="img-fluid" class="user-image">
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-4">
            <a href="categorias/categorias_servicios/servicios_diseño.php" class="btn-link">
                <div class="trending-content">
                    <img src="images/images_servicios/diseño_servicio.jpg" alt="card-images" class="img-fluid">
                    <div class="trending-desc">
                        <h3 class="user-position">Diseño</h3>
                        <img src="images/images_servicios/diseño_icon.png" alt="img-fluid" class="user-image">
                    </div>
                </div>
    </div>
    <div class="col-md-4">
            <a href="categorias/categorias_servicios/servicios_educacion.php" class="btn-link">
                <div class="trending-content">
                    <img src="images/images_servicios/educacion_servicio.jpg" alt="card-images" class="img-fluid">
                    <div class="trending-desc">
                        <h3 class="user-position">Educacion</h3>
                        <img src="images/images_servicios/educacion_icon.png" alt="img-fluid" class="user-image">
                    </div>
                </div>
</div>
<div class="col-md-4">
            <a href="categorias/categorias_servicios/servicios_tecnologia.php" class="btn-link">
                <div class="trending-content">
                    <img src="images/images_servicios/tecnologia_servicio.jpg" alt="card-images" class="img-fluid">
                    <div class="trending-desc">
                        <h3 class="user-position">Tecnologia</h3>
                        <img src="images/images_servicios/tecnologia_icon.png" alt="img-fluid" class="user-image">
                    </div>
                </div>
</div>

<script>
    (function(){
        if(!window.chatbase || window.chatbase("getState") !== "initialized") {
            window.chatbase = (...arguments) => {
                if(!window.chatbase.q) {
                    window.chatbase.q = [];
                }
                window.chatbase.q.push(arguments);
            };
            window.chatbase = new Proxy(window.chatbase, {
                get(target, prop) {
                    if(prop === "q") {
                        return target.q;
                    }
                    return (...args) => target(prop, ...args);
                }
            });
        }
        const onLoad = function() {
            const script = document.createElement("script");
            script.src = "https://www.chatbase.co/embed.min.js";
            script.id = "SEjb-h_ydCA8lsKh2C_pE";
            script.domain = "www.chatbase.co";
            document.body.appendChild(script);
        };
        if(document.readyState === "complete") {
            onLoad();
        } else {
            window.addEventListener("load", onLoad);
        }
    })();
</script>

<!-- Configuración del chatbot -->
<script>
    // Configura el chatbot con tu ID de bot
    window.chatbase("config", {
        botId: "r56bh61tzqv3qyp7zsdctl28m4w3gc48", 
        domain: "www.chatbase.co"
    });

    // Event listeners para el chatbot
    const chatbotToggle = document.getElementById('chatbotToggle');
    const chatbot = document.getElementById('chatbot');

    chatbotToggle.addEventListener('click', () => {
        chatbot.classList.toggle('chatbot-active');
    });
</script>

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
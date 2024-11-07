<?php include 'backend/verificar_sesion.php'; ?>
<DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.1/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style_productos.css">
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
            
            <a href="backend/cerrar_sesion.php" class="notification"><i class="fa fa-bell" aria-hidden="true"></i></a>
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
                <a href="#" class="d-flex align-items-center nav-link"><i class="fa fa-cog" aria-hidden="true"></i>
                  <span>Ajustes</span></a>
              </li>
            </ul>
          </div>
          <div class="nft-store-content">
            <div class="nft-up-content">
              <div class="row">
                <div class="col-md-8">
                  <div class="fire-bubble-art d-flex justify-content-between  align-items-center">
                    <img src="https://yudiz.com/codepen/nft-store/image-1.svg" alt="fire-bubble-image" class="img-fluid fire-image fire-width">
                    <div class="fire-content fire-width">
                      <h3 class="mb-0">Productos</h3>
                      <div class="fire-time d-flex justify-content-between">
                        <div class="current-bid">
                          
                        </div>
                        <div class="auction">
                          
                        </div>
                        <span class="middle-line"></span>
                      </div>
                      <span class="fire-user"><img src="https://yudiz.com/codepen/nft-store/user-pic1.svg" alt="user-image"> Rose
                        Ortega</span>
                        <div class="fire-links">
                        <a href="crear/crear_productos.php" class="theme-btn d-block mb-2">Crear Producto</a> 
                        <a href="ver/ver_productos.php" class="theme-btn d-block">Ver Productos</a>
                    </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <figure class="paint-image" style="background: url('https://yudiz.com/codepen/nft-store/image-2.svg') no-repeat center center / cover;">
                    <h1>Emprendimiento de la semana</h1>
                  </figure>
                </div>
              </div>
            </div>
            <div class="trending">
              <div class="trending-title">
                <div class="row justify-content-between align-items-center">
                  <div class="col-6">
                    <h2>Emprendimientos</h2>
                  </div>
                  <div class="col-6 text-right">
                    <a href="mis_creaciones/mis_productos.php" class="theme-btn"> Mirar mis productos </a>
                  </div>
                </div>
              </div>
              <div class="trending-grid">
                <div class="row">
                  <div class="col-md-4">
                    <div class="trending-content">
                      <img src="https://yudiz.com/codepen/nft-store/card-1.svg" alt="card-images" class="img-fluid">
                      <div class="trending-desc">
                        <h4 class="user-title">Wayne Garner</h4>
                        <h3 class="user-position">Emprendimiento-2</h3>
                        <div class="bid d-flex justify-content-between align-items-center">
                          <div>
                            
                          </div>
                          <div>
                            
                          </div>
                        </div>
                        <img src="https://yudiz.com/codepen/nft-store/user-pic3.svg" alt="img-fluid" class="user-image">
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="trending-content">
                      <img src="https://yudiz.com/codepen/nft-store/card-2.svg" alt="card-images" class="img-fluid">
                      <div class="trending-desc">
                        <h4 class="user-title">cody valdez</h4>
                        <h3 class="user-position">Emprendimiento-3</h3>
                        <div class="bid d-flex justify-content-between align-items-center">
                          <div>
                            
                          </div>
                          <div>
                            
                          </div>
                        </div>
                        <img src="https://yudiz.com/codepen/nft-store/user-pic4.svg" alt="img-fluid" class="user-image">
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="trending-content">
                      <img src="https://yudiz.com/codepen/nft-store/card-3.svg" alt="card-images" class="img-fluid">
                      <div class="trending-desc">
                        <h4 class="user-title">Jayden Daniel</h4>
                        <h3 class="user-position">Emprendimiento-4</h3>
                        <div class="bid d-flex justify-content-between align-items-center">
                          <div>
                            <h5></h5>
                            <span></span>
                          </div>
                          <div>
                            <h5></h5>
                            <span></span>
                          </div>
                        </div>
                        <img src="https://yudiz.com/codepen/nft-store/user-pic5.svg" alt="img-fluid" class="user-image">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
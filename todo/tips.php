<?php include 'backend/verificar_sesion.php'; 
  // Array con los tips y consejos que para mostrar aleatoriamente
  $consejosusuarios = [
    "Define tus necesidades de compra: Antes de ingresar a la plataforma, identifica y lista qué productos necesitas para evitar compras impulsivas o innecesarias.",
    "Crea y actualiza tu perfil de usuario: Completa tus datos personales y de contacto para recibir recomendaciones personalizadas y promociones exclusivas.",
    "Compara productos y precios: Examina diversas opciones disponibles y contrasta características para conseguir la mejor relación calidad-precio.",
    "Lee detenidamente las descripciones del producto: Asegúrate de revisar especificaciones, dimensiones, materiales y cualquier detalle que te permita confirmar que es el producto adecuado.",
    "Consulta opiniones y reseñas de otros usuarios: Las valoraciones y comentarios pueden ofrecer perspectivas reales sobre el desempeño y la calidad del producto.",
    "Verifica la reputación del vendedor: Observa las calificaciones del vendedor; un historial consistente de buenas evaluaciones es indicativo de confiabilidad.",
    "Investiga sobre el emprendedor detrás del producto: Conoce la historia y filosofía de quienes crean los artículos.",
    "Establece un presupuesto definido: Determina un límite de gasto para mantener el control financiero y evitar desviaciones en tus compras.",
    "Valora la autenticidad cultural: Busca productos que representen genuinamente tradiciones o expresiones culturales.",
    "Suscríbete a boletines y alertas: Recibe notificaciones sobre rebajas, nuevos lanzamientos y promociones para no perder ninguna oportunidad.",
    "Aprovecha las herramientas de comparación: Cuando esté disponible, compara distintos productos lado a lado para evaluar detalladamente sus características y precios.",
    "Realiza consultas directas al vendedor: Si tienes dudas, utiliza el chat o formulario de contacto para obtener respuestas claras y precisas antes de comprar.",
    "Actualiza la información de contacto: Mantén tus datos actualizados para asegurar que recibes notificaciones y comunicaciones importantes sin inconvenientes.",
    "Utiliza la versión móvil de la plataforma: De igual manera la aplicación está disponible para acceder de manera fácil y rápida desde cualquier lugar.",
    "Revisa la compatibilidad del producto: Si el artículo debe interactuar con otros dispositivos o sistemas, asegúrate de que cumpla con estos requerimientos.",
    "Personaliza tu pantalla de inicio: Ajusta la visualización de categorías y productos según tus preferencias.",
    "Verifica la claridad de las imágenes publicadas: Asegúrate de que las fotos sean de alta calidad y muestren de forma real el producto, ayudándote a tomar una mejor decisión.",
    "Consulta la experiencia de otros usuarios en redes sociales: Busca reseñas en plataformas sociales para obtener una perspectiva más variada sobre el producto y el vendedor.",
    "Evalúa el retorno de inversión (ROI): Si la compra es para fines comerciales, analiza cómo el producto contribuirá a la eficiencia o rentabilidad de tu negocio.",
    "Mantente informado sobre actualizaciones de la plataforma: Revisa periódicamente si hay mejoras o nuevas funciones que puedan hacer tu experiencia más intuitiva.",
    "Verifica la claridad de la información técnica: Asegúrate de que las especificaciones y el uso del producto se expliquen de forma precisa para evitar confusiones.",
    "Crea recordatorios para productos estacionales: Configura alertas para productos disponibles en temporadas limitadas.",
    "Utiliza canales de comunicación oficiales: Realiza tus consultas y reclamos a través de los medios que la plataforma tenga habilitados para garantizar una respuesta formal.",
    "Infórmate sobre la sostenibilidad del producto: Considera opciones ambientalmente responsables y verifica si el proveedor promueve prácticas sostenibles.",
    "Utiliza métodos de seguimiento de ofertas: Configura alertas para no perderte promociones especiales o lanzamientos de nuevos productos que se ajusten a tus intereses.",
    "Consulta la ubicación del vendedor si es relevante: Considera la localización del vendedor para minimizar tiempos de espera o costos adicionales en el envío.",
    "Comparte tu experiencia: Después de finalizar tu compra, escribe una reseña y comparte tus comentarios para ayudar a otros usuarios y mejorar la comunidad.",
    "Apoya negocios que aporten valor educativo: Encuentra productos que enseñen o transmitan conocimientos.",
    "Busca productos que resalten la identidad cultural: Apoya artículos que reflejen la riqueza y tradiciones locales de Pasto.",
    "Conoce la historia detrás del producto: Algunos proveedores comparten el origen y contexto de sus artículos, lo que los hace únicos.",
    "Apoya la creatividad y emprendimiento local: Busca negocios que innoven en sus productos y formas de presentación.",
    "Revisa qué negocios están activos regularmente: Algunos actualizan su catálogo más frecuentemente que otros.",
    "Busca productos ideales para regalar: Encuentra opciones únicas para sorprender a alguien especial con un detalle.",
    "Comparte información sobre los productos con amigos: Invita a otros a conocer los artículos locales que podrían interesarles.",
    "Busca productos únicos para eventos especiales: Descubre artículos ideales para celebraciones como fiestas o aniversarios.",
    "Conoce el proceso detrás de la creación del producto: Pregunta al vendedor cómo se fabrica el artículo para apreciar más su valor.",
    "Explora productos destacados por la comunidad: Busca artículos que hayan sido mencionados o recomendados por otros usuarios de la plataforma.",
    "Explora negocios familiares: Muchas iniciativas son emprendimientos familiares que merecen apoyo para crecer.",
    "Aprovecha la oportunidad para conocer nuevos emprendedores: Descubre negocios emergentes que están innovando.",
    "Evalúa la funcionalidad de los productos: Asegúrate de que los artículos sean prácticos y cumplan tus expectativas.",
    "Explora diferentes tamaños disponibles: Algunos proveedores pueden ofrecer opciones de tamaño que se adapten mejor a tus necesidades.",
    "Busca calidad y durabilidad en los productos: Invierte en artículos que sean resistentes y que valgan la pena a largo plazo.",
    "Descubre productos que destacan por su diseño: Algunos artículos pueden tener un diseño moderno o artístico que los haga únicos.",
    "Descubre opciones interesantes para decorar espacios: Encuentra artículos que embellezcan tu hogar o lugar de trabajo.",
    "Busca productos ideales para actividades recreativas: Encuentra opciones diseñadas para disfrutar tu tiempo libre.",
    "Explora negocios que conecten con tu identidad: Algunas iniciativas pueden ofrecer productos que reflejen tus valores y gustos.",
    "Descubre productos de edición limitada: Aprovecha artículos que no estarán disponibles por mucho tiempo.",
    "Descubre artículos que promuevan el bienestar personal: Busca opciones relacionadas con salud o relajación.",
    "Asegúrate de que los productos sean seguros: Verifica materiales o características si el artículo será usado por niños o mascotas.",
    "Comparte tus descubrimientos en redes sociales: Ayuda a más personas a conocer los productos y la iniciativa de BigBoox."
  ];

  // Seleccionar un consejo aleatorio inicial
  $consejoInicial = $consejosusuarios[array_rand($consejosusuarios)];

  // Array con los tips y consejos que para mostrar aleatoriamente
  $consejosEmprendedores = [
    "Crea un perfil profesional completo: Añade información clara sobre tu negocio, incluyendo datos de contacto y un logo que represente tu marca.",
    "Redacta descripciones detalladas: Explica las características, beneficios y usos de cada producto para que los clientes tomen decisiones informadas.",
    "Destaca los mejores productos: Usa etiquetas como “más vendido” o “destacado” para atraer la atención de los usuarios hacia tus ofertas más populares.",
    "Actualiza constantemente tu inventario: Mantén la disponibilidad y cantidad de productos actualizadas para evitar inconvenientes en las ventas.",
    "Optimiza títulos y palabras clave: Usa términos relevantes que mejoren la visibilidad de tus publicaciones en las búsquedas de la plataforma.",
    "Establece precios competitivos: Investiga el mercado y encuentra un equilibrio entre calidad y costo para ser atractivo a tus clientes.",
    "Ofrece promociones y descuentos: Diseña estrategias como cupones, paquetes o rebajas para atraer nuevos clientes y fidelizar a los existentes.",
    "Responde rápidamente a las preguntas: Mantén una comunicación fluida para resolver dudas y generar confianza con tus potenciales compradores.",
    "Solicita y publica reseñas de clientes satisfechos: Las opiniones positivas construyen confianza y ayudan a captar nuevos clientes.",
    "Aprovecha las redes sociales: Promociona tus productos y dirige tráfico hacia tu perfil en la plataforma usando contenido atractivo.",
    "Crea una identidad de marca sólida: Define un estilo, tono y valores que diferencien tu negocio y conecten con tus clientes.",
    "Utiliza promociones estacionales: Lanza ofertas estratégicas en fechas importantes como Navidad.",
    "Facilita la navegación entre tus productos: Organiza tus publicaciones en categorías claras para que los clientes encuentren fácilmente lo que buscan.",
    "Personaliza la experiencia del cliente: Ofrece recomendaciones basadas en sus compras o intereses previos.",
    "Integra storytelling en tu estrategia: Comparte historias sobre tu negocio y productos para conectar emocionalmente con tus clientes.",
    "Destaca las ventajas de tus productos: Comunica claramente los beneficios adicionales que ofreces como vendedor.",
    "Establece objetivos de ventas mensuales: Define metas realistas y ajusta tus estrategias según los resultados obtenidos.",
    "Capacítate en herramientas digitales: Aprende sobre marketing digital y comercio electrónico para optimizar tus publicaciones.",
    "Optimiza tu perfil para dispositivos móviles: Asegúrate de que tus productos sean visibles y fáciles de comprar desde smartphones.",
    "Ofrece paquetes y combos: Vende productos agrupados a precios especiales para incrementar el valor por cliente.",
    "Garantiza un servicio al cliente excepcional: Responde rápido, escucha sugerencias y soluciona problemas de manera eficiente.",
    "Implementa un programa de fidelización: Recompensa a los clientes recurrentes con descuentos o puntos por cada compra.",
    "Publica productos nuevos regularmente: Mantén tu catálogo actualizado para atraer a clientes interesados en novedades.",
    "Invita a tus clientes a compartir experiencias: Incentiva publicaciones en redes sociales sobre tus productos y etiquetas de tu negocio.",
    "Monitorea tendencias de mercado: Adapta tu oferta según las preferencias actuales de los consumidores.",
    "Usa palabras persuasivas en tus títulos: Términos como “exclusivo” o “imperdible” llaman la atención de los compradores.",
    "Ofrece pruebas si es posible: Esto ayuda a generar confianza en productos nuevos o de alto costo.",
    "Automatiza procesos repetitivos: Usa herramientas para gestionar inventarios o enviar respuestas rápidas.",
    "Resalta productos de edición limitada: Esto puede generar urgencia y aumentar las ventas.",
    "Invierte en contenido visual atractivo: Usa colores y diseño que capturen la atención mientras se ajusten a tu identidad de marca.",
    "Establece alianzas estratégicas: Colabora con otros vendedores, ampliando así tu alcance y reconocimiento en diferentes sectores.",
    "Revisa la competencia regularmente: Analiza sus estrategias y encuentra formas de diferenciarte.",
    "Publica actualizaciones sobre tus productos: Informa a tus clientes sobre cambios, mejoras o nuevas versiones de tus artículos.",
    "Facilita la comunicación multicanal: Usa redes sociales, correo electrónico y la plataforma para interactuar con los clientes.",
    "Sé constante y perseverante: Mantén el enfoque en la mejora continua y no te desanimes por posibles contratiempos.",
    "Asegúrate de transmitir confianza: Cuida cada detalle en tus publicaciones para proyectar profesionalismo.",
    "Define tu propuesta de valor: Asegúrate de que tus productos o servicios tengan un diferenciador claro que te haga único.",
    "Incluye recomendaciones de uso en las descripciones: Explica cómo tus productos pueden utilizarse para obtener los mejores resultados.",
    "Prioriza la claridad sobre la creatividad excesiva: Asegúrate de que la información sea fácil de entender por encima de lo elaborado del diseño.",
    "Organiza tus publicaciones por tipo de cliente: Define cuáles productos son ideales para familias, negocios locales o consumidores individuales y destácalos.",
    "Incorpora citas inspiradoras en tu contenido: Agrega frases relacionadas con tu visión como emprendedor para conectar emocionalmente con los clientes.",
    "Ofrece recomendaciones de productos similares: Sugiere a los clientes otros artículos que puedan complementar su compra principal.",
    "Incluye detalles sobre cómo tus productos se alinean con la sostenibilidad: Resalta si utilizas materiales locales, reciclados o procesos respetuosos con el medioambiente.",
    "Establece un “ritual de marca.” Diseña una acción simple que los clientes puedan asociar con el uso de tus productos, como una forma única de abrir o utilizar el artículo.",
    "Usa frases que sugieran pertenencia: Incorpora expresiones como “hazlo parte de tu vida” o “lleva la tradición contigo” para reforzar una conexión personal con tus productos.",
    "Crea un plan de continuidad para tus productos más vendidos: Identifica cuáles de tus artículos generan mayor demanda y diseña estrategias para garantizar su disponibilidad constante.",
    "Diseña un eslogan memorable para tu negocio: Una frase breve y pegajosa puede ayudar a que los clientes recuerden tu marca más fácilmente.",
    "Muestra prototipos o ideas futuras de productos: Genera interés anticipando lo que podrías ofrecer más adelante y pide opiniones al respecto.",
    "Celebra tu esfuerzo como emprendedor. Reconoce los logros de tu negocio y úsalo para seguir creciendo." 
  ];

  // Seleccionar un consejo aleatorio inicial
  $consejoIniciall = $consejosEmprendedores[array_rand($consejosEmprendedores)];
?>

<!DOCTYPE html>
<html lang="en"> 
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.1/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style_tips.css">
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
                    <div class="col-sm-12">
                    <div class="fire-bubble-art d-flex justify-content-center align-items-center"  style="width: max-width: 100%; auto;">
                            <img src="images/images_tips/emprendedores.png" alt="fire-bubble-image" class="img-fluid fire-image fire-width">
                            <div class="fire-content fire-width">
                            <h3 class="mb-0 mx-auto" style="margin-top: -20px; margin-left: 30px; font-size: 30px; font-weight: bold; text-align: center;">
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
                  <div class="col-sm-12">
                      <div class="fire-bubble-art d-flex justify-content-between align-items-center" style="width: max-width: 100%; auto;">
                          <img src="images/images_tips/usuarios.png" alt="fire-bubble-image" class="img-fluid fire-image fire-width">
                            <div class="fire-content fire-width">
                            <h3 class="mb-0" style="margin-top: -20px; margin-left: 0px; font-size: 30px; font-weight: bold; text-align: center;">
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


<div class="trending text-center">
<h1 class="titulo-video mt-4">Documentos Interesantes</h1>
    <div class="trending-title text-center">
        <hr>
        <div class="trending-title text-center mt-7 mb-4">
            <a href="documents/archivo.pdf" class="theme-btn px-4 py-2" download>Descargar PDF</a>
        </div>
    </div>
</div>



    <div class="video-container">
        <h1 class="titulo-video mt-7" style="margin-top: 200px">Videos Interesantes</h1>
        <video class="reproductor-video" width="640" height="360" controls>
            <source src="videos/principios_negocios.mp4" type="video/mp4">
            Tu navegador no soporta el elemento de video.
        </video>
    </div>

    <?php if ($_SESSION['cargo'] === 'Administrador'): ?>
    <div class="d-flex justify-content-center mt-4 mb-4">
        <a href="backend/eliminar_admin/eliminartodo_historia.php" class="theme-btn px-4 py-2">Admin</a>
    </div>
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
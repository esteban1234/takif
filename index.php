
<?php include 'vistas/encabezado.php' ?>
<body>
<article class="banner">
  <div class="fondo">

  <article class="contenlogocorreo">
    <figure class="pull-left">
    <img src="img/takit.png" alt="Transporte Takif" class="img-responsive">
  </figure>

  <article class="correoarriba pull-right">
    <i class="fa fa-envelope-o fa-4x iconoarriba pull-left" aria-hidden="true"></i> <p class="textocorreoarriba pull-right"><a href="mailto:info@takif.net">info@takif.net</a></p>
  </article>
  </article>

  <article class="contenmenutexto">
     <div class="vertical-menu pull-left">
  <a href="index.php" class="active">INDEX <i class="fa fa-home fa-2x pull-right" aria-hidden="true"></i></a>
  <a href="vistas/nosotros.php">NOSOTROS <i class="fa fa-user fa-2x pull-right" aria-hidden="true"></i></a>
  <a href="vistas/servicios.php">SERVICIOS <i class="fa fa-briefcase fa-2x pull-right" aria-hidden="true"></i></a>
  <a href="vistas/contacto.php">CONTACTO <i class="fa fa-phone fa-2x pull-right" aria-hidden="true"></i></a>
</div>
    <p class="texto-banner pull-right">Servicios integrales de distribución de productos</p>
    <p class="texto-banner2 pull-right">¡Llevamos tu mercancia a donde tu quieras!</p>
    <p class="boton"><a href="">Solicita una cotización</a></p>
  </article>
  </div>
</article>
<div class="container">
  <div class="row">
    <div class='col-md-offset-2 col-md-8 text-center'>
    <h2 style="color: #3F88C8;">Algunos de nuestros servicios</h2>
    </div>
  </div>
  <div class='row'>
    <div class='col-md-offset-2 col-md-8'>
      <div class="carousel slide" data-ride="carousel" id="quote-carousel">
        <!-- Bottom Carousel Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#quote-carousel" data-slide-to="0" class="active"></li>
          <li data-target="#quote-carousel" data-slide-to="1"></li>
          <li data-target="#quote-carousel" data-slide-to="2"></li>
        </ol>
        
        <!-- Carousel Slides / Quotes -->
        <div class="carousel-inner">
        
          <!-- Quote 1 -->
          <div class="item active">
            <blockquote>
              <div class="row">
                <div class="col-sm-3 text-center">
                  <img class="img-rounded" src="img/completo.jpg" style="width: 130px;height:100px;">
                </div>
                <div class="col-sm-9">
                  <p>Contratación de un trailer o torton completo para el traslado de su mercancía en forma exclusiva.</p>
                  <small>Camión completo</small>
                </div>
              </div>
            </blockquote>
          </div>
          <!-- Quote 2 -->
          <div class="item">
            <blockquote>
              <div class="row">
                <div class="col-sm-3 text-center">
                  <img class="img-rounded" src="img/paqueteria.jpg" style="width: 130px;height:100px;">
                </div>
                <div class="col-sm-9">
                  <p>Envío desde un paquete el cual se concentra en nuestros centros de distribución para enviarse a su destino.</p>
                  <small>Paquetería o viaje consolidado</small>
                </div>
              </div>
            </blockquote>
          </div>
          <!-- Quote 3 -->
          <div class="item">
            <blockquote>
              <div class="row">
                <div class="col-sm-3 text-center">
                  <img class="img-rounded" src="img/carga.jpg" style="width: 130px;height:100px;">
                </div>
                <div class="col-sm-9">
                  <p>Servicio para subir desde la sede de partida y/o bajar la mercancía del camión en su llegada al destino.</p>
                  <small>Maniobras de carga y descarga</small>
                </div>
              </div>
            </blockquote>
          </div>
        </div>
        
        <!-- Carousel Buttons Next/Prev -->
        <a data-slide="prev" href="#quote-carousel" class="left carousel-control"><i class="fa fa-chevron-left"></i></a>
        <a data-slide="next" href="#quote-carousel" class="right carousel-control"><i class="fa fa-chevron-right"></i></a>
      </div>                          
    </div>
  </div>
</div>

<article class="banner2">
  <p>ENVIAMOS A TODA LA REPUBLICA MEXICANA</p>
</article>

<article class="seccionmercados">
  <h1 style="color: #3F88C8; text-align: center;">Algunos mercados a los que servimos</h1>
  <article class="contenmercados">
    <div class="uno">
      <div class="unopuntouno">
        <img src="img/hospital.png" alt="">
      </div>
      <h3 class="text-center">HOSPITALES</h3>
      <div class="unopuntodos">
        <p>Transportar productos y articulos medicos.</p>
      </div>
    </div>

     <div class="uno">
      <div class="unopuntouno">
        <img src="img/antenna.png" alt="">
      </div>
      <h3 class="text-center">TELECOMUNICACIONES</h3>
      <div class="unopuntodos">
        <p>Transportar productos y articulos de telécomunicaciones.</p>
      </div>
    </div>

     <div class="uno">
      <div class="unopuntouno">
        <img src="img/excavator.png" alt="">
      </div>
      <h3 class="text-center">CONSTRUCTORAS</h3>
      <div class="unopuntodos">
      <p>Transportar productos y articulos para la construcción.</p>
      </div>
    </div>

     <div class="uno">
      <div class="unopuntouno">
        <img src="img/shop.png" alt="">
      </div>
      <h3 class="text-center">SUPERMERCADOS</h3>
      <div class="unopuntodos">
      <p>Transportar productos y articulos.</p>
      </div>
    </div>
  </article>
</article>

<?php include 'vistas/pie.php' ?>
<script src="js/jquery.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/slide.js"></script>
</body>
</html>
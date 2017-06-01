<!DOCTYPE html>
<?php include 'encabezado2.php' ?>
<body>
<article class="banner">
  <div class="fondo">

  <article class="contenlogocorreo">
    <figure class="pull-left">
    <img src="../img/takit.png" alt="Transporte Takif" class="img-responsive">
  </figure>

  <article class="correoarriba pull-right">
    <i class="fa fa-envelope-o fa-4x iconoarriba pull-left" aria-hidden="true"></i> <p class="textocorreoarriba pull-right"><a href="mailto:info@takif.net">info@takif.net</a></p>
  </article>
  </article>

  <article class="contenmenutexto">
     <div class="vertical-menu pull-left">
  <a href="../index.php">INDEX <i class="fa fa-home fa-2x pull-right" aria-hidden="true"></i></a>
  <a href="nosotros.php">NOSOTROS <i class="fa fa-user fa-2x pull-right" aria-hidden="true"></i></a>
  <a href="servicios.php">SERVICIOS <i class="fa fa-briefcase fa-2x pull-right" aria-hidden="true"></i></a>
  <a href="contacto.php" class="active">CONTACTO <i class="fa fa-phone fa-2x pull-right" aria-hidden="true"></i></a>
</div>
    <p class="texto-banner pull-right">Te esperamos! ponte en contacto con nosotros</p>
    <p class="texto-banner2 pull-right">¡Llevamos tu mercancia a donde tu quieras!</p>
    <!-- <p class="boton"><a href="contacto.php">Solicita una cotización</a></p> -->
  </article>
  </div>
</article>

<h1 class="text-center" style="color: #74A4D0; margin-top: 5%;">Contacto</h1>
<article class="elegir">
 <!-- <h1 class="text-center h1por">¿Por qué elegir a TAKIF TRANSPORTES?</h1> -->
 <div class="col-xs-12 col-sm-4 col-md-3">
            <div class="box">
                <div class="box-icon">
                    <span class="fa fa-4x fa-clock-o"></span>
                </div>
                <div class="info">
                    <h4 class="text-center">HORARIO</h4>
                    <p  style="text-align: center;">Lunes a Viernes de 9am a 6pm</p>
                </div>
            </div>
        </div>

        <div class="col-xs-12 col-sm-4 col-md-3">
            <div class="box">
                <div class="box-icon">
                    <span class="fa fa-4x fa-phone"></span>
                </div>
                <div class="info">
                    <h4 class="text-center">TELEFONO</h4>
                    <p style="text-align: center;">Pendiente</p>
                </div>
            </div>
        </div>

        <div class="col-xs-12 col-sm-4 col-md-3">
            <div class="box">
                <div class="box-icon">
                    <span class="fa fa-4x fa-envelope-o"></span>
                </div>
                <div class="info">
                    <h4 class="text-center">CORREO</h4>
                    <p style="text-align: center;">info@takif.net</p>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-4 col-md-3">
            <div class="box">
                <div class="box-icon">
                    <span class="fa fa-4x fa-map-marker"></span>
                </div>
                <div class="info">
                    <h4 class="text-center">DIRECCION</h4>
                    <p style="text-align: center;">C. Homero #229 entre C. Taine y C. Fco. Petrarca, Col. Polanco V Sección, Miguel Hidalgo, México. C.P 11560</p>
                </div>
            </div>
        </div>
</article>

<article class="contenformmapa">
  <div class="form1 pull-left">

    <form role="form" action="" method="" onSubmit="return false">
        <h1 style="text-align: center; color: #74A4D0; margin-top: 5%;">Formulario de contacto</h1>
        <div id="_AJAX_PRE_"></div>
        <br>
        <div class="required-field-block">
            <input type="text" id="txtNOMBRE" placeholder="Escribe tu nombre completo" class="form-control">
            <div class="required-icon">
                <div class="text">*</div>
            </div>
        </div>
        
        <div class="required-field-block">
            <input type="text" id="txtCORREO" placeholder="Escribe tu correo" class="form-control">
            <div class="required-icon">
                <div class="text">*</div>
            </div>
        </div>

        <!-- <input type="text" placeholder="Phone" class="form-control"> -->
        <div class="required-field-block">
            <input type="text" id="txtTELEFONO" placeholder="Escribe tu teléfono" class="form-control">
            <div class="required-icon">
                <div class="text">*</div>
            </div>
        </div>
 
        <div class="required-field-block">
            <textarea rows="3" id="txtCOMENTARIO" class="form-control" placeholder="Escribenos un mensaje"></textarea>
            <div class="required-icon">
                <div class="text">*</div>
            </div>
        </div>
        
        <button class="btn btn-primary" onclick="sendCORREO()">ENVIAR</button>
    </form>

  </div>
  <div class="mapa pull-right">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3762.4630188456226!2d-99.18755508564473!3d19.43559398688259!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d1f8abec191491%3A0x1e14be8e0ce79fcd!2sAvenida+Homero+229%2C+Polanco%2C+Polanco+V+Secc%2C+11560+Ciudad+de+M%C3%A9xico%2C+CDMX!5e0!3m2!1ses-419!2smx!4v1496257259009" width="600" height="320" frameborder="0" style="border:0" allowfullscreen></iframe>
  </div>
</article>

<?php include 'pie.php' ?>
<script src="../js/jquery.js"></script>
<script src="../js/bootstrap.js"></script>
<script src="../js/funciondthc.js"></script>
<script src="../js/requerido.js"></script>
<script src="../js/sendCORREO.js"></script>

</body>
</html>
<!DOCTYPE html>
<?php include 'encabezado2.php' ?>
<body>
<div class="linearriba">
    <p>
        CONSULTORIA CIENTIFICA y TECNOLOGICA
    </p>
    <p>
        MEDIO AMBIENTE
    </p>
    <p>
        ARQUITECTURA
    </p>
    <p>
        INGENIERIA
    </p>

</div>

<div id="topo">
  <div class="container">
    <div class="row">
      <div class="col-md-3 col-ms-6 col-xs-6" id="logo-topo">
          <!-- <a href="index.php"><h2>LOGO</h2></a> -->
     <figure class="pull-left">
        <img src="../img/muuch.png" alt="MUUCHXIIMBAL" class="img-responsive">
    </figure>
      </div>
      <div class="col-md-8 col-ms-6 col-xs-6" id="abre-menu-topo">
       
       <a href="#" class="btn-collapse">
         <div class="lista-collapse"></div>
         <div class="lista-collapse"></div>
         <div class="lista-collapse"></div>
       </a>
      
      </div>
    </div><!--Fim da Row1 -->
    <div class="row">
      <ul id="menu-topo">
        <li><a href="../index.php">INICIO</a></li>
        <li><a href="nosotros.php">NOSOTROS</a></li>
        <li><a href="servicios.php">SERVICIOS</a></li>
        <li><a href="contacto.php" class="dentro">CONTACTO</a></li>
      </ul>
    </div>
  </div><!--Fim da coontainer -->
</div><!--Fim do topo -->

<article class="submenu">
    <ol class="breadcrumb">
      <li><a href="../index.php">INDEX</a></li>
      <li class="active">CONTACTO</li>
    </ol>
</article>

<h1 style="text-align: center; color: rgb(215,14,22); font-family:'Ubuntu', sans-serif; margin-top: 2%; margin-bottom:2%;">EMPECEMOS AHORA</h1>

<div class="container">
    <form class="well col-sm-12 col-md-12">
        <div class="row">
            <div class="col-sm-4 col-md-4">
                <label>Nombre Completo</label>
                <input class="form-control" placeholder="Escribe tu Nombre" type="text">
                <label>Teléfono</label>
                <input class="form-control" placeholder="Escribe tu Apellido" type="text">
                <label>Email</label>
                <input class="form-control" placeholder="Escribe tu Correo" type="text">
                
            </div>
    
            <div class="col-sm-8 col-md-8">
                <div class="form-group">
                    <label>Comentario</label> 
                    <textarea class="col-sm-3 col-md-3 form-control" placeholder="Escribe tu Comentario" id="message" name="message" rows="6"></textarea>
                    <button class="btn btn-danger pull-right" type="submit">Enviar</button>
                </div>
            </div>            
        </div>
    </form>
</div>

<article class="mapa">
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3762.4630188456226!2d-99.18755508564473!3d19.43559398688259!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d1f8abec02f359%3A0x1e42ba70ad539d27!2sAvenida+Homero+229%2C+Polanco%2C+Polanco+V+Secc%2C+11560+Ciudad+de+M%C3%A9xico%2C+CDMX!5e0!3m2!1ses-419!2smx!4v1496084069916" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
</article>

<article class="contendatos">
	<article class="conten">
		<article class="cuadro">
			<article class="icon"><i class="fa fa-clock-o" aria-hidden="true"></i></article>
			<article class="horario">Horario</article>
			<article class="lv">Lunes a Viernes de 9am a 6pm</article>
			<!-- <article class="numeros">9am a 6pm</article> -->
		</article>
		
		<article class="cuadro">
			<article class="icon"><i class="fa fa-phone" aria-hidden="true"></i></article>
			<article class="horario">Teléfono</article>
			<article class="lv">PENDIENTE</article>
			<!-- <article class="numeros">9am a 6pm</article> -->
		</article>
		
		<article class="cuadro">
			<article class="icon"><i class="fa fa-envelope-o" aria-hidden="true"></i></article>
			<article class="horario">Correo</article>
			<article class="lv">info@muuchximbal.net</article>
			<!-- <article class="numeros">9am a 6pm</article> -->
		</article>
	</article>
</article>

<?php include 'pie.php' ?>
<script src="../js/jquery.js"></script>
<script src="../js/bootstrap.js"></script>
<script src="../js/funciondthc.js"></script>
<script src="../js/menu.js"></script>

</body>
</html>
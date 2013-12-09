<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;

/*
<head>
    <title>Lorem Ipsum</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
  </head>
*/
?>
<div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class=""></li>
        <li data-target="#myCarousel" data-slide-to="1" class=""></li>
        <li data-target="#myCarousel" data-slide-to="2" class="active"></li>
      </ol>
      <div class="carousel-inner">
        <div class="item active">
          <img alt="First slide" src="<?php echo Yii::app()->theme->baseUrl; ?>/img/facultad de odontologia.JPG">
          <div class="container">
            <div class="carousel-caption">
              <h1>Facultad</h1>
              <p>El Programa de Odontología, ofrece un profesional preparado para enfrentar el proceso de la sociedad global, en sus diferentes manifestaciones de complejidad, su formación es integral, máxima fortaleza que le proporciona oportunidades en su contacto con la realidad social, la demostración de sus competencias en diferentes contextos de aplicación, su calidad en el quehacer de su profesión y ciudadano comprometido con el desarrollo y transformación de lo individual y social.</p>
              <p><a class="btn btn-lg btn-primary" href="#" id="userData" role="button">Descubre más</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img alt="Second slide" src="<?php echo Yii::app()->theme->baseUrl; ?>/img/Portada_Panorama_6.jpg">
          <div class="container">
            <div class="carousel-caption">
              <h1>Panorama Odontológico</h1>
              <p>La Revista PANORAMA ODONTOLÓGICO es una publicación científica de la Facultad de Odontología de la Fundación Universitaria San Martín, es un espacio para la socialización semestral de los avances científicos y tecnológicos en el campo de la salud específicamente la odontología. Se encarga de la publicación de artículos de investigación científica y tecnológica, reflexiones, revisión de literatura, protocolos, reportes de casos clínicos, entre otros documentos de carácter científico y académico.</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Conoce más aqui</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img alt="Third slide" src="<?php echo Yii::app()->theme->baseUrl; ?>/img/CONSULTORIO_ODONTOLOGICO.jpg">
          <div class="container">
            <div class="carousel-caption">
              <h1>Tendencias</h1>
              <p>Se observa como en el futuro, los consultorios se tornarían más confortables para el tratante y el paciente, generando un ambiente de tranquilidad y a su tiempo con todas las tendencias tecnológicas necesarias para brindar un buen servicio.</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Leer más</a></p>
            </div>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
    </div>
    <div class="container">
      <div class="row">
      <div class="col-lg-4">
        <img class="img-circle" src="<?php echo Yii::app()->theme->baseUrl; ?>/img/Captura.JPG">
        <h2>Administración de cuentas</h2>
        <p>Crear, modificar y eliminar cuentas de Acceso a la aplicación.</p>
        <p>
    	      <?php echo CHtml::link('Administrar »', '#', array('id' => 'userData', 'class' => 'btn btn-default')); ?>

        </p>
      </div>
      <div class="col-lg-4">
        <img class="img-circle" src="<?php echo Yii::app()->theme->baseUrl; ?>/img/imagen_HC.jpg">
        <h2>Historial Clínico</h2>
        <p>Apertura primera vez, modificación y actualización historias Clínicas Generadas.</p>
        <p><a class="btn btn-default" href="#" role="button">Ver historial »</a></p>
      </div>
      <div class="col-lg-4">
        <img class="img-circle" src="<?php echo Yii::app()->theme->baseUrl; ?>/img/matilloybalanza.jpg">
        <h2>Registros de Control</h2>
        <p>Generación y actualización de los registros de Registro Individual de prestación de servicios de salud (RIPS) y Desechos Hospitalarios.</p>
        <p><a class="btn btn-default" href="#" role="button">Revisar registros »</a></p>
      </div>
    </div>
    </div>
<?php

/*
<script src="js/jquery-1.10.2.js"></script>
<script src="js/bootstrap.min.js"></script>
*/

?>
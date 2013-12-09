<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>

<h1>Bienvenido a <i><?php echo CHtml::encode(Yii::app()->name); ?></i></h1>

<h2>Gestion de Registro de Control RIPS</h2>
	<ul>
		<li><a id="createRips" class="btn btn-lg btn-primary">Crear RIPS</a></li>
	</ul>
	<ul>
		<li><a id="listRips" class="btn btn-lg btn-primary">Listar RIPS</a></li>
	</ul>
	<h2>Gestion de Registro de Control RH1</h2>
	<ul>
		<li><a id="createRh1" class="btn btn-lg btn-primary">Crear RH1</a></li>
	</ul>
	<ul>
		<li><a id="listRh1" class="btn btn-lg btn-primary">Listar RH1</a></li>
	</ul>
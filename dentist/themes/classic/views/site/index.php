<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
// Include the client scripts
$baseUrl = Yii::app()->theme->baseUrl; 
$cs = Yii::app()->getClientScript();
$cs->registerScriptFile('jquery.js');
// more scripts would be added here by registering their filenames if needed
?>

<h1>Bienvenido a <i><?php echo CHtml::encode(Yii::app()->name); ?></i></h1>
<div>
	<h2>Gestion de Usuarios</h2>
	<ul>
		<li><a id="createUser">Crear Usuario</a></li>
	</ul>
	<ul>
		<li><a id="listUsers">Lista de Usuarios</a></li>
	</ul>
	<h2>Gestion de Paises</h2>
	<ul>
		<li><a id="createCountry">Crear País</a></li>
	</ul>
	<ul>
		<li><a id="listCountries">Lista de Paises</a></li>
	</ul>
	<h2>Gestion de Ciudades</h2>
	<ul>
		<li><a id="createCity">Crear Ciudad</a></li>
	</ul>
	<ul>
		<li><a id="listCities">Lista de Ciudades</a></li>
	</ul>
</div>

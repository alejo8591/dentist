<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>

<h1>Bienvenido a <i><?php echo CHtml::encode(Yii::app()->name); ?></i></h1>
<div>
	<h2>Gestion de Usuarios</h2>
	<ul>
		<li><a id="createUser" class="btn btn-lg btn-primary">Crear Usuario</a></li>
	</ul>
	<ul>
		<li><a id="listUsers" class="btn btn-lg btn-primary">Lista de Usuarios</a></li>
	</ul>
	<h2>Gestion de Paises</h2>
	<ul>
		<li><a id="createCountry" class="btn btn-lg btn-primary">Crear País</a></li>
	</ul>
	<ul>
		<li><a id="listCountries" class="btn btn-lg btn-primary">Lista de Paises</a></li>
	</ul>
	<h2>Gestion de Ciudades</h2>
	<ul>
		<li><a id="createCity" class="btn btn-lg btn-primary">Crear Ciudad</a></li>
	</ul>
	<ul>
		<li><a id="listCities" class="btn btn-lg btn-primary">Lista de Ciudades</a></li>
	</ul>
	<h2>Gestion de Regimen de Salud</h2>
	<ul>
		<li><a id="createRegimen" class="btn btn-lg btn-primary">Crear Regimen de Salud</a></li>
	</ul>
	<ul>
		<li><a id="listRegimenes" class="btn btn-lg btn-primary">Listar los Regimen de Salud</a></li>
	</ul>
	<h2>Gestion de Entidades Prestadoras de Salud</h2>
	<ul>
		<li><a id="createEntity" class="btn btn-lg btn-primary">Crear Entidad Prestadora de Salud</a></li>
	</ul>
	<ul>
		<li><a id="listEntities" class="btn btn-lg btn-primary">Listar las Entidades Prestadoras de Salud</a></li>
	</ul>
	<h2>Gestion de Nivel de Escolaridad</h2>
	<ul>
		<li><a id="createLevelSchooling" class="btn btn-lg btn-primary">Crear Nivel de Escolaridad</a></li>
	</ul>
	<ul>
		<li><a id="listLevelSchooling" class="btn btn-lg btn-primary">Listar Niveles de Escolaridad</a></li>
	</ul>
	<h2>Gestion de Profesiones</h2>
	<ul>
		<li><a id="createProfession" class="btn btn-lg btn-primary">Crear Profesión</a></li>
	</ul>
	<ul>
		<li><a id="listProfessions" class="btn btn-lg btn-primary">Listar Profesiones</a></li>
	</ul>
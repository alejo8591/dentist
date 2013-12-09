<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>

<h1>Bienvenido a <i><?php echo CHtml::encode(Yii::app()->name); ?></i></h1>

<h2>Gestion de Anamnesis</h2>
	<ul>
		<li><a id="createAnamnesis" class="btn btn-lg btn-primary">Crear Anamnesis</a></li>
	</ul>
	<ul>
		<li><a id="listAnamnesis" class="btn btn-lg btn-primary">Listar Anamnesis</a></li>
	</ul>
	<h2>Antecedentes Personales</h2>
	<ul>
		<li><a id="createPersonalBackground" class="btn btn-lg btn-primary">Crear Antecedentes</a></li>
	</ul>
	<ul>
		<li><a id="listPersonalBackground" class="btn btn-lg btn-primary">Listar Antecedentes</a></li>
	</ul>
	<h2>Examen Físico</h2>
	<ul>
		<li><a id="createPhysicalExamination" class="btn btn-lg btn-primary">Crear Examen Físico</a></li>
	</ul>
	<ul>
		<li><a id="listPhysicalExamination" class="btn btn-lg btn-primary">Listar Examenes Físicos</a></li>
	</ul>
	<h2>ATM</h2>
	<ul>
		<li><a id="createAtm" class="btn btn-lg btn-primary">Crear ATM</a></li>
	</ul>
	<ul>
		<li><a id="listAtms" class="btn btn-lg btn-primary">Listar ATMs</a></li>
	</ul>	
</div>
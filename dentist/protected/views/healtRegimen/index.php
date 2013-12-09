<?php
/* @var $this HealtRegimenController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Régimen de Salud',
);

$this->menu=array(
	array('label'=>'Crear Regimen', 'url'=>array('create')),
);
?>

<h1>Régimen de Salud Disponibles</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

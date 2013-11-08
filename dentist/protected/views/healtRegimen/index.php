<?php
/* @var $this HealtRegimenController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Healt Regimens',
);

$this->menu=array(
	array('label'=>'Crear Regimen', 'url'=>array('create')),
	array('label'=>'Administrar los Regimen', 'url'=>array('admin')),
);
?>

<h1>Regimen de Salud Disponibles</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

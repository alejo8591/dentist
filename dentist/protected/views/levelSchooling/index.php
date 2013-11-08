<?php
/* @var $this LevelSchoolingController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Level Schoolings',
);

$this->menu=array(
	array('label'=>'Crear nivel de Escolaridad', 'url'=>array('create')),
	array('label'=>'Administrar Niveles', 'url'=>array('admin')),
);
?>

<h1>Nivel de Escolaridad</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

<?php
/* @var $this CityController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Ciudades',
);

$this->menu=array(
	array('label'=>'Crear Ciudad', 'url'=>array('create')),
);
?>

<h1>Ciudades</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

<?php
/* @var $this IntcpSilnessLoeController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Intcp Silness Loes',
);

$this->menu=array(
	array('label'=>'Create IntcpSilnessLoe', 'url'=>array('create')),
	array('label'=>'Manage IntcpSilnessLoe', 'url'=>array('admin')),
);
?>

<h1>Intcp Silness Loes</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

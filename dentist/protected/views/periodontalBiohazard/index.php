<?php
/* @var $this PeriodontalBiohazardController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Periodontal Biohazards',
);

$this->menu=array(
	array('label'=>'Create PeriodontalBiohazard', 'url'=>array('create')),
	array('label'=>'Manage PeriodontalBiohazard', 'url'=>array('admin')),
);
?>

<h1>Periodontal Biohazards</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

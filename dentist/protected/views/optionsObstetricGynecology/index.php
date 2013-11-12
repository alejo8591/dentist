<?php
/* @var $this OptionsObstetricGynecologyController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Options Obstetric Gynecologies',
);

$this->menu=array(
	array('label'=>'Create OptionsObstetricGynecology', 'url'=>array('create')),
	array('label'=>'Manage OptionsObstetricGynecology', 'url'=>array('admin')),
);
?>

<h1>Options Obstetric Gynecologies</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

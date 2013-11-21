<?php
/* @var $this OptionsLymphadenopathyController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Options Lymphadenopathies',
);

$this->menu=array(
	array('label'=>'Create OptionsLymphadenopathy', 'url'=>array('create')),
	array('label'=>'Manage OptionsLymphadenopathy', 'url'=>array('admin')),
);
?>

<h1>Options Lymphadenopathies</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

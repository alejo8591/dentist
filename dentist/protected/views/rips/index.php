<?php
/* @var $this RipsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Rips',
);

$this->menu=array(
	array('label'=>'Create Rips', 'url'=>array('create')),
	array('label'=>'Manage Rips', 'url'=>array('admin')),
);
?>

<h1>Rips</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

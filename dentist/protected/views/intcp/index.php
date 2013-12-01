<?php
/* @var $this IntcpController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Intcps',
);

$this->menu=array(
	array('label'=>'Create Intcp', 'url'=>array('create')),
	array('label'=>'Manage Intcp', 'url'=>array('admin')),
);
?>

<h1>Intcps</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

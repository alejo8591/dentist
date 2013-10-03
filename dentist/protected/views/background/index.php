<?php
/* @var $this BackgroundController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Backgrounds',
);

$this->menu=array(
	array('label'=>'Create Background', 'url'=>array('create')),
	array('label'=>'Manage Background', 'url'=>array('admin')),
);
?>

<h1>Backgrounds</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

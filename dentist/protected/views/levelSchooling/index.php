<?php
/* @var $this LevelSchoolingController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Level Schoolings',
);

$this->menu=array(
	array('label'=>'Create LevelSchooling', 'url'=>array('create')),
	array('label'=>'Manage LevelSchooling', 'url'=>array('admin')),
);
?>

<h1>Level Schoolings</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

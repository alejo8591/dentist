<?php
/* @var $this Rh1Controller */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Rh1s',
);

$this->menu=array(
	array('label'=>'Create Rh1', 'url'=>array('create')),
	array('label'=>'Manage Rh1', 'url'=>array('admin')),
);
?>

<h1>Rh1s</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

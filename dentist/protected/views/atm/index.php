<?php
/* @var $this AtmController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Atms',
);

$this->menu=array(
	array('label'=>'Create Atm', 'url'=>array('create')),
	array('label'=>'Manage Atm', 'url'=>array('admin')),
);
?>

<h1>Atms</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

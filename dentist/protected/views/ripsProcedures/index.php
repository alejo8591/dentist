<?php
/* @var $this RipsProceduresController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Rips Procedures',
);

$this->menu=array(
	array('label'=>'Create RipsProcedures', 'url'=>array('create')),
	array('label'=>'Manage RipsProcedures', 'url'=>array('admin')),
);
?>

<h1>Rips Procedures</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

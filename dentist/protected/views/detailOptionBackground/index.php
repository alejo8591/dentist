<?php
/* @var $this DetailOptionBackgroundController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Detail Option Backgrounds',
);

$this->menu=array(
	array('label'=>'Create DetailOptionBackground', 'url'=>array('create')),
	array('label'=>'Manage DetailOptionBackground', 'url'=>array('admin')),
);
?>

<h1>Detail Option Backgrounds</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

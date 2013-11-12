<?php
/* @var $this OptionsPersonalBackgroundController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Options Personal Backgrounds',
);

$this->menu=array(
	array('label'=>'Create OptionsPersonalBackground', 'url'=>array('create')),
	array('label'=>'Manage OptionsPersonalBackground', 'url'=>array('admin')),
);
?>

<h1>Options Personal Backgrounds</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

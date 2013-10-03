<?php
/* @var $this OptionBackgroundController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Option Backgrounds',
);

$this->menu=array(
	array('label'=>'Create OptionBackground', 'url'=>array('create')),
	array('label'=>'Manage OptionBackground', 'url'=>array('admin')),
);
?>

<h1>Option Backgrounds</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

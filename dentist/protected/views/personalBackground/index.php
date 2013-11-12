<?php
/* @var $this PersonalBackgroundController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Personal Backgrounds',
);

$this->menu=array(
	array('label'=>'Create PersonalBackground', 'url'=>array('create')),
	array('label'=>'Manage PersonalBackground', 'url'=>array('admin')),
);
?>

<h1>Personal Backgrounds</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

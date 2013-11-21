<?php
/* @var $this OptionsExtraoralExaminationController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Options Extraoral Examinations',
);

$this->menu=array(
	array('label'=>'Create OptionsExtraoralExamination', 'url'=>array('create')),
	array('label'=>'Manage OptionsExtraoralExamination', 'url'=>array('admin')),
);
?>

<h1>Options Extraoral Examinations</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

<?php
/* @var $this OptionsDiagnosisController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Options Diagnosises',
);

$this->menu=array(
	array('label'=>'Create OptionsDiagnosis', 'url'=>array('create')),
	array('label'=>'Manage OptionsDiagnosis', 'url'=>array('admin')),
);
?>

<h1>Options Diagnosises</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

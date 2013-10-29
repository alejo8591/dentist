<?php
/* @var $this DuringConsultationController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'During Consultations',
);

$this->menu=array(
	array('label'=>'Create DuringConsultation', 'url'=>array('create')),
	array('label'=>'Manage DuringConsultation', 'url'=>array('admin')),
);
?>

<h1>During Consultations</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

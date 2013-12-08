<?php
/* @var $this DentalExaminationController */
/* @var $model DentalExamination */

$this->breadcrumbs=array(
	'Dental Examinations'=>array('index'),
	$model->id_tbl_dental_examination,
);

$this->menu=array(
	array('label'=>'List DentalExamination', 'url'=>array('index')),
	array('label'=>'Create DentalExamination', 'url'=>array('create')),
	array('label'=>'Update DentalExamination', 'url'=>array('update', 'id'=>$model->id_tbl_dental_examination)),
	array('label'=>'Delete DentalExamination', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_tbl_dental_examination),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage DentalExamination', 'url'=>array('admin')),
);
?>

<h1>View DentalExamination #<?php echo $model->id_tbl_dental_examination; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_tbl_dental_examination',
		'id_tbl_anamnesis',
		'create_user_id',
		'create_time',
		'update_user_id',
		'update_time',
	),
)); ?>

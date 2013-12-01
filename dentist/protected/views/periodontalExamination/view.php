<?php
/* @var $this PeriodontalExaminationController */
/* @var $model PeriodontalExamination */

$this->breadcrumbs=array(
	'Periodontal Examinations'=>array('index'),
	$model->id_tbl_periodontal_examination,
);

$this->menu=array(
	array('label'=>'List PeriodontalExamination', 'url'=>array('index')),
	array('label'=>'Create PeriodontalExamination', 'url'=>array('create')),
	array('label'=>'Update PeriodontalExamination', 'url'=>array('update', 'id'=>$model->id_tbl_periodontal_examination)),
	array('label'=>'Delete PeriodontalExamination', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_tbl_periodontal_examination),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage PeriodontalExamination', 'url'=>array('admin')),
);
?>

<h1>View PeriodontalExamination #<?php echo $model->id_tbl_periodontal_examination; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_tbl_periodontal_examination',
		'id_tbl_anamnesis',
		'create_user_id',
		'create_time',
		'update_user_id',
		'update_time',
		'description_periodontal_examination',
	),
)); ?>

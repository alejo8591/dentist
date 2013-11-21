<?php
/* @var $this PhysicalExaminationController */
/* @var $model PhysicalExamination */

$this->breadcrumbs=array(
	'Physical Examinations'=>array('index'),
	$model->id_tbl_physical_examination,
);

$this->menu=array(
	array('label'=>'List PhysicalExamination', 'url'=>array('index')),
	array('label'=>'Create PhysicalExamination', 'url'=>array('create')),
	array('label'=>'Update PhysicalExamination', 'url'=>array('update', 'id'=>$model->id_tbl_physical_examination)),
	array('label'=>'Delete PhysicalExamination', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_tbl_physical_examination),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage PhysicalExamination', 'url'=>array('admin')),
);
?>

<h1>View PhysicalExamination #<?php echo $model->id_tbl_physical_examination; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_tbl_physical_examination',
		'id_tbl_anamnesis',
		'create_user_id',
		'create_time',
		'update_user_id',
		'update_time',
	),
)); ?>

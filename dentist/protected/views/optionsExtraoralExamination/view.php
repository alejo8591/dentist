<?php
/* @var $this OptionsExtraoralExaminationController */
/* @var $model OptionsExtraoralExamination */

$this->breadcrumbs=array(
	'Options Extraoral Examinations'=>array('index'),
	$model->id_tbl_option_extraoral_examination,
);

$this->menu=array(
	array('label'=>'List OptionsExtraoralExamination', 'url'=>array('index')),
	array('label'=>'Create OptionsExtraoralExamination', 'url'=>array('create')),
	array('label'=>'Update OptionsExtraoralExamination', 'url'=>array('update', 'id'=>$model->id_tbl_option_extraoral_examination)),
	array('label'=>'Delete OptionsExtraoralExamination', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_tbl_option_extraoral_examination),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage OptionsExtraoralExamination', 'url'=>array('admin')),
);
?>

<h1>View OptionsExtraoralExamination #<?php echo $model->id_tbl_option_extraoral_examination; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_tbl_option_extraoral_examination',
		'id_tbl_physical_examination',
		'name_option_extraoral_examination',
		'flag_option_extraoral_examination',
		'observation_option_extraoral_examination',
		'create_user_id',
		'create_time',
		'update_user_id',
		'update_time',
	),
)); ?>

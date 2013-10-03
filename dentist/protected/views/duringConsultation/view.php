<?php
/* @var $this DuringConsultationController */
/* @var $model DuringConsultation */

$this->breadcrumbs=array(
	'During Consultations'=>array('index'),
	$model->id_tbl_during_consultation,
);

$this->menu=array(
	array('label'=>'List DuringConsultation', 'url'=>array('index')),
	array('label'=>'Create DuringConsultation', 'url'=>array('create')),
	array('label'=>'Update DuringConsultation', 'url'=>array('update', 'id'=>$model->id_tbl_during_consultation)),
	array('label'=>'Delete DuringConsultation', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_tbl_during_consultation),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage DuringConsultation', 'url'=>array('admin')),
);
?>

<h1>View DuringConsultation #<?php echo $model->id_tbl_during_consultation; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_tbl_during_consultation',
		'name_during_consultation',
		'description',
		// 'create_user_id',
		// 'create_time',
		// 'update_user_id',
		// 'update_time',
	),
)); ?>

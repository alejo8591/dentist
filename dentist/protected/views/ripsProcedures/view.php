<?php
/* @var $this RipsProceduresController */
/* @var $model RipsProcedures */

$this->breadcrumbs=array(
	'Rips Procedures'=>array('index'),
	$model->id_tbl_rips_procedures,
);

$this->menu=array(
	array('label'=>'List RipsProcedures', 'url'=>array('index')),
	array('label'=>'Create RipsProcedures', 'url'=>array('create')),
	array('label'=>'Update RipsProcedures', 'url'=>array('update', 'id'=>$model->id_tbl_rips_procedures)),
	array('label'=>'Delete RipsProcedures', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_tbl_rips_procedures),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage RipsProcedures', 'url'=>array('admin')),
);
?>

<h1>View RipsProcedures #<?php echo $model->id_tbl_rips_procedures; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_tbl_rips_procedures',
		'id_tbl_rips',
		'value_procedure',
		'cie10_code',
		'create_user_id',
		'create_time',
		'update_user_id',
		'update_time',
	),
)); ?>

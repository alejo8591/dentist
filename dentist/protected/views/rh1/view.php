<?php
/* @var $this Rh1Controller */
/* @var $model Rh1 */

$this->breadcrumbs=array(
	'Rh1s'=>array('index'),
	$model->id_tbl_rh1,
);

$this->menu=array(
	array('label'=>'List Rh1', 'url'=>array('index')),
	array('label'=>'Create Rh1', 'url'=>array('create')),
	array('label'=>'Update Rh1', 'url'=>array('update', 'id'=>$model->id_tbl_rh1)),
	array('label'=>'Delete Rh1', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_tbl_rh1),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Rh1', 'url'=>array('admin')),
);
?>

<h1>View Rh1 #<?php echo $model->id_tbl_rh1; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_tbl_rh1',
		'provider_class',
		'name_surname',
		'id_document',
		'provider_code',
		'address',
		'phone',
		'email',
	),
)); ?>

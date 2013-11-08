<?php
/* @var $this HealtRegimenController */
/* @var $model HealtRegimen */

$this->breadcrumbs=array(
	'Healt Regimens'=>array('index'),
	$model->id_tbl_healt_regimen,
);

$this->menu=array(
	array('label'=>'Listar los Regimen', 'url'=>array('index')),
	array('label'=>'Crear Regimen', 'url'=>array('create')),
	array('label'=>'Actualizar Regimen', 'url'=>array('update', 'id'=>$model->id_tbl_healt_regimen)),
	array('label'=>'Eliminar Regimen', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_tbl_healt_regimen),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar los Regimen', 'url'=>array('admin')),
);
?>

<h1>Ver los Regimen de Salud #<?php echo $model->id_tbl_healt_regimen; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_tbl_healt_regimen',
		'name_healt_regimen',
		'description',
		'create_user_id',
		'create_time',
		'update_user_id',
		'update_time',
	),
)); ?>

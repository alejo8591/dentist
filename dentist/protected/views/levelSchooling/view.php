<?php
/* @var $this LevelSchoolingController */
/* @var $model LevelSchooling */

$this->breadcrumbs=array(
	'Level Schoolings'=>array('index'),
	$model->id_tbl_level_schooling,
);

$this->menu=array(
	array('label'=>'Listar Niveles de Escolaridad', 'url'=>array('index')),
	array('label'=>'Crear Nivel de Escolaridad', 'url'=>array('create')),
	array('label'=>'Actualizar Nivel de Escolaridad', 'url'=>array('update', 'id'=>$model->id_tbl_level_schooling)),
	array('label'=>'Eliminar Nivel de Escolaridad', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_tbl_level_schooling),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar Niveles', 'url'=>array('admin')),
);
?>

<h1>Ver Nivel de Escolaridad #<?php echo $model->id_tbl_level_schooling; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_tbl_level_schooling',
		'name_level_schooling',
		'description',
		'create_user_id',
		'create_time',
		'update_user_id',
		'update_time',
	),
)); ?>

<?php
/* @var $this LevelSchoolingController */
/* @var $model LevelSchooling */

$this->breadcrumbs=array(
	'Level Schoolings'=>array('index'),
	$model->id_tbl_level_schooling=>array('view','id'=>$model->id_tbl_level_schooling),
	'Update',
);

$this->menu=array(
	array('label'=>'Listar Niveles de Escolaridad', 'url'=>array('index')),
	array('label'=>'Crear Nivel de Escolaridad', 'url'=>array('create')),
	array('label'=>'Ver Nivel de Escolaridad', 'url'=>array('view', 'id'=>$model->id_tbl_level_schooling)),
	array('label'=>'Administrar Niveles', 'url'=>array('admin')),
);
?>

<h1>Actualizar Nivel de Escolaridad <?php echo $model->id_tbl_level_schooling; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
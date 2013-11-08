<?php
/* @var $this ProfessionController */
/* @var $model Profession */

$this->breadcrumbs=array(
	'Professions'=>array('index'),
	$model->id_tbl_profession=>array('view','id'=>$model->id_tbl_profession),
	'Update',
);

$this->menu=array(
	array('label'=>'Listar Profesiones', 'url'=>array('index')),
	array('label'=>'Crear Profesiones', 'url'=>array('create')),
	array('label'=>'Ver Profesiones', 'url'=>array('view', 'id'=>$model->id_tbl_profession)),
	array('label'=>'Administrar Profesiones', 'url'=>array('admin')),
);
?>

<h1>Actualizar Profesión <?php echo $model->id_tbl_profession; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
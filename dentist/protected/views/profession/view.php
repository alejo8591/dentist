<?php
/* @var $this ProfessionController */
/* @var $model Profession */

$this->breadcrumbs=array(
	'Profesiones'=>array('index'),
	$model->id_tbl_profession,
);

$this->menu=array(
	array('label'=>'Listar Profesiones', 'url'=>array('index')),
	array('label'=>'Crear Profesión', 'url'=>array('create')),
	array('label'=>'Actualizar Profesión', 'url'=>array('update', 'id'=>$model->id_tbl_profession)),
	array('label'=>'Eliminar Profesión', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_tbl_profession),'confirm'=>'Esta seguro que desea eliminar este ítem?')),
);
?>

<h1>Ver Profesiones #<?php echo $model->id_tbl_profession; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_tbl_profession',
		'name_profession',
		'description',
	),
)); ?>

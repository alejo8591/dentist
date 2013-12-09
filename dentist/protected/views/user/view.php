<?php
/* @var $this UserController */
/* @var $model User */

$this->breadcrumbs=array(
	'Usuario'=>array('index'),
	$model->username,
);

$this->menu=array(
	array('label'=>'Listar Usuarios', 'url'=>array('index')),
	array('label'=>'Crear Usuario', 'url'=>array('create')),
	array('label'=>'Actualizar Usuario', 'url'=>array('update', 'id'=>$model->username)),
	array('label'=>'Eliminar Usuario', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->username),'confirm'=>'Esta seguro que desea eliminar este ítem?')),
);
?>

<h1>Visualizar Usuario Identificado con #<?php echo $model->username; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'username',
		'type_document',
		'type_user',
		'email',
	),
)); ?>

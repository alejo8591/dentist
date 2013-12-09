<?php
/* @var $this UserController */
/* @var $model User */

$this->breadcrumbs=array(
	'Usuario'=>array('index'),
	$model->username=>array('view','id'=>$model->username),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Listar Usuarios', 'url'=>array('index')),
	array('label'=>'Crear Usuario', 'url'=>array('create')),
	array('label'=>'Visualizar Useario', 'url'=>array('view', 'id'=>$model->username)),
);
?>

<h1>Actualizar Usuario <?php echo $model->username; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
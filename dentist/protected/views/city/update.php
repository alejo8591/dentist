<?php
/* @var $this CityController */
/* @var $model City */

$this->breadcrumbs=array(
	'Ciudades'=>array('index'),
	$model->id_tbl_city=>array('view','id'=>$model->id_tbl_city),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Listar Ciudades', 'url'=>array('index')),
	array('label'=>'Crear Ciudad', 'url'=>array('create')),
	array('label'=>'Cer Ciudades', 'url'=>array('view', 'id'=>$model->id_tbl_city)),
	array('label'=>'Administrar Ciudades', 'url'=>array('admin')),
);
?>

<h1>Actualizar Ciudad <?php echo $model->id_tbl_city; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
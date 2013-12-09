<?php
/* @var $this CityController */
/* @var $model City */

$this->breadcrumbs=array(
	'Ciudades'=>array('index'),
	$model->id_tbl_city,
);

$this->menu=array(
	array('label'=>'Listar Ciudades', 'url'=>array('index')),
	array('label'=>'Crear Ciudad', 'url'=>array('create')),
	array('label'=>'Actualizar Ciudad', 'url'=>array('update', 'id'=>$model->id_tbl_city)),
	array('label'=>'Eliminar Ciudad', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_tbl_city),'confirm'=>'Esta seguro que desea eliminar este ítem?')),
);
?>

<h1>Ver Ciudad identificada #<?php echo $model->id_tbl_city; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_tbl_city',
		'id_tbl_country',
		'city_code',
		'name_city',
		'postal_code',
		'description',
	),
)); ?>

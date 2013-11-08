<?php
/* @var $this CountryController */
/* @var $model Country */

$this->breadcrumbs=array(
	'Countries'=>array('index'),
	$model->id_tbl_country,
);

$this->menu=array(
	array('label'=>'Listar Paises', 'url'=>array('index')),
	array('label'=>'Crear País', 'url'=>array('create')),
	array('label'=>'Actualizar País', 'url'=>array('update', 'id'=>$model->id_tbl_country)),
	array('label'=>'Eliminar País', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_tbl_country),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar Paises', 'url'=>array('admin')),
);
?>

<h1>Ver País #<?php echo $model->id_tbl_country; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_tbl_country',
		'country_code',
		'name_country',
		'postal_code',
		'description',
		'create_user_id',
		'create_time',
		'update_user_id',
		'update_time',
	),
)); ?>

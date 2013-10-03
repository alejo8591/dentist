<?php
/* @var $this CityController */
/* @var $model City */

$this->breadcrumbs=array(
	'Cities'=>array('index'),
	$model->id_tbl_city,
);

$this->menu=array(
	array('label'=>'List City', 'url'=>array('index')),
	array('label'=>'Create City', 'url'=>array('create')),
	array('label'=>'Update City', 'url'=>array('update', 'id'=>$model->id_tbl_city)),
	array('label'=>'Delete City', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_tbl_city),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage City', 'url'=>array('admin')),
);
?>

<h1>View City #<?php echo $model->id_tbl_city; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_tbl_city',
		'id_tbl_country',
		'city_code',
		'name_city',
		'postal_code',
		'description',
		// 'create_user_id',
		// 'create_time',
		// 'update_user_id',
		// 'update_time',
	),
)); ?>

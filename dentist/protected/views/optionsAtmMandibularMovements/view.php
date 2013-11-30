<?php
/* @var $this OptionsAtmMandibularMovementsController */
/* @var $model OptionsAtmMandibularMovements */

$this->breadcrumbs=array(
	'Options Atm Mandibular Movements'=>array('index'),
	$model->id_tbl_option_atm_mandibular_movements,
);

$this->menu=array(
	array('label'=>'List OptionsAtmMandibularMovements', 'url'=>array('index')),
	array('label'=>'Create OptionsAtmMandibularMovements', 'url'=>array('create')),
	array('label'=>'Update OptionsAtmMandibularMovements', 'url'=>array('update', 'id'=>$model->id_tbl_option_atm_mandibular_movements)),
	array('label'=>'Delete OptionsAtmMandibularMovements', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_tbl_option_atm_mandibular_movements),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage OptionsAtmMandibularMovements', 'url'=>array('admin')),
);
?>

<h1>View OptionsAtmMandibularMovements #<?php echo $model->id_tbl_option_atm_mandibular_movements; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_tbl_option_atm_mandibular_movements',
		'id_tbl_atm',
		'name_option_atm_mandibular_movements',
		'type_option_atm_mandibular_movements',
		'flag_option_atm_mandibular_movements',
		'observation_atm_mandibular_movements',
		'create_user_id',
		'create_time',
		'update_user_id',
		'update_time',
	),
)); ?>

<?php
/* @var $this OptionsAtmSoftTissueController */
/* @var $model OptionsAtmSoftTissue */

$this->breadcrumbs=array(
	'Options Atm Soft Tissues'=>array('index'),
	$model->id_tbl_option_atm_soft_tissue,
);

$this->menu=array(
	array('label'=>'List OptionsAtmSoftTissue', 'url'=>array('index')),
	array('label'=>'Create OptionsAtmSoftTissue', 'url'=>array('create')),
	array('label'=>'Update OptionsAtmSoftTissue', 'url'=>array('update', 'id'=>$model->id_tbl_option_atm_soft_tissue)),
	array('label'=>'Delete OptionsAtmSoftTissue', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_tbl_option_atm_soft_tissue),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage OptionsAtmSoftTissue', 'url'=>array('admin')),
);
?>

<h1>View OptionsAtmSoftTissue #<?php echo $model->id_tbl_option_atm_soft_tissue; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_tbl_option_atm_soft_tissue',
		'id_tbl_atm',
		'name_option_atm_soft_tissue',
		'flag_option_atm_soft_tissue',
		'observation_atm_soft_tissue',
		'create_user_id',
		'create_time',
		'update_user_id',
		'update_time',
	),
)); ?>

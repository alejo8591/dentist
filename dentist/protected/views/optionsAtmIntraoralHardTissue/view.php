<?php
/* @var $this OptionsAtmIntraoralHardTissueController */
/* @var $model OptionsAtmIntraoralHardTissue */

$this->breadcrumbs=array(
	'Options Atm Intraoral Hard Tissues'=>array('index'),
	$model->id_tbl_option_atm_intraoral_hard_tissue,
);

$this->menu=array(
	array('label'=>'List OptionsAtmIntraoralHardTissue', 'url'=>array('index')),
	array('label'=>'Create OptionsAtmIntraoralHardTissue', 'url'=>array('create')),
	array('label'=>'Update OptionsAtmIntraoralHardTissue', 'url'=>array('update', 'id'=>$model->id_tbl_option_atm_intraoral_hard_tissue)),
	array('label'=>'Delete OptionsAtmIntraoralHardTissue', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_tbl_option_atm_intraoral_hard_tissue),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage OptionsAtmIntraoralHardTissue', 'url'=>array('admin')),
);
?>

<h1>View OptionsAtmIntraoralHardTissue #<?php echo $model->id_tbl_option_atm_intraoral_hard_tissue; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_tbl_option_atm_intraoral_hard_tissue',
		'id_tbl_atm',
		'name_option_atm_intraoral_hard_tissue',
		'type_option_atm_intraoral_hard_tissue',
		'observation_option_hard_intraoral_hard_tissue',
		'flag_option_atm_intraoral_hard_tissue',
		'create_user_id',
		'create_time',
		'update_user_id',
		'update_time',
	),
)); ?>

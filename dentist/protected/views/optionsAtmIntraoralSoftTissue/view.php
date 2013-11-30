<?php
/* @var $this OptionsAtmIntraoralSoftTissueController */
/* @var $model OptionsAtmIntraoralSoftTissue */

$this->breadcrumbs=array(
	'Options Atm Intraoral Soft Tissues'=>array('index'),
	$model->id_tbl_option_atm_intraoral_soft_tissue,
);

$this->menu=array(
	array('label'=>'List OptionsAtmIntraoralSoftTissue', 'url'=>array('index')),
	array('label'=>'Create OptionsAtmIntraoralSoftTissue', 'url'=>array('create')),
	array('label'=>'Update OptionsAtmIntraoralSoftTissue', 'url'=>array('update', 'id'=>$model->id_tbl_option_atm_intraoral_soft_tissue)),
	array('label'=>'Delete OptionsAtmIntraoralSoftTissue', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_tbl_option_atm_intraoral_soft_tissue),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage OptionsAtmIntraoralSoftTissue', 'url'=>array('admin')),
);
?>

<h1>View OptionsAtmIntraoralSoftTissue #<?php echo $model->id_tbl_option_atm_intraoral_soft_tissue; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_tbl_option_atm_intraoral_soft_tissue',
		'id_tbl_atm',
		'name_option_atm_intraoral_soft_tissue',
		'type_option_atm_intraoral_soft_tissue',
		'observation_option_atm_intraoral_soft_tissue',
		'flag_option_atm_intraoral_soft_tissue',
		'create_user_id',
		'create_time',
		'update_user_id',
		'update_time',
	),
)); ?>

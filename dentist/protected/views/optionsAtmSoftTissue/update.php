<?php
/* @var $this OptionsAtmSoftTissueController */
/* @var $model OptionsAtmSoftTissue */

$this->breadcrumbs=array(
	'Options Atm Soft Tissues'=>array('index'),
	$model->id_tbl_option_atm_soft_tissue=>array('view','id'=>$model->id_tbl_option_atm_soft_tissue),
	'Update',
);

$this->menu=array(
	array('label'=>'List OptionsAtmSoftTissue', 'url'=>array('index')),
	array('label'=>'Create OptionsAtmSoftTissue', 'url'=>array('create')),
	array('label'=>'View OptionsAtmSoftTissue', 'url'=>array('view', 'id'=>$model->id_tbl_option_atm_soft_tissue)),
	array('label'=>'Manage OptionsAtmSoftTissue', 'url'=>array('admin')),
);
?>

<h1>Update OptionsAtmSoftTissue <?php echo $model->id_tbl_option_atm_soft_tissue; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
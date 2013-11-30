<?php
/* @var $this OptionsAtmIntraoralSoftTissueController */
/* @var $model OptionsAtmIntraoralSoftTissue */

$this->breadcrumbs=array(
	'Options Atm Intraoral Soft Tissues'=>array('index'),
	$model->id_tbl_option_atm_intraoral_soft_tissue=>array('view','id'=>$model->id_tbl_option_atm_intraoral_soft_tissue),
	'Update',
);

$this->menu=array(
	array('label'=>'List OptionsAtmIntraoralSoftTissue', 'url'=>array('index')),
	array('label'=>'Create OptionsAtmIntraoralSoftTissue', 'url'=>array('create')),
	array('label'=>'View OptionsAtmIntraoralSoftTissue', 'url'=>array('view', 'id'=>$model->id_tbl_option_atm_intraoral_soft_tissue)),
	array('label'=>'Manage OptionsAtmIntraoralSoftTissue', 'url'=>array('admin')),
);
?>

<h1>Update OptionsAtmIntraoralSoftTissue <?php echo $model->id_tbl_option_atm_intraoral_soft_tissue; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
<?php
/* @var $this OptionsAtmIntraoralHardTissueController */
/* @var $model OptionsAtmIntraoralHardTissue */

$this->breadcrumbs=array(
	'Options Atm Intraoral Hard Tissues'=>array('index'),
	$model->id_tbl_option_atm_intraoral_hard_tissue=>array('view','id'=>$model->id_tbl_option_atm_intraoral_hard_tissue),
	'Update',
);

$this->menu=array(
	array('label'=>'List OptionsAtmIntraoralHardTissue', 'url'=>array('index')),
	array('label'=>'Create OptionsAtmIntraoralHardTissue', 'url'=>array('create')),
	array('label'=>'View OptionsAtmIntraoralHardTissue', 'url'=>array('view', 'id'=>$model->id_tbl_option_atm_intraoral_hard_tissue)),
	array('label'=>'Manage OptionsAtmIntraoralHardTissue', 'url'=>array('admin')),
);
?>

<h1>Update OptionsAtmIntraoralHardTissue <?php echo $model->id_tbl_option_atm_intraoral_hard_tissue; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
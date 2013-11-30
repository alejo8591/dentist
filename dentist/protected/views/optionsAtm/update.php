<?php
/* @var $this OptionsAtmController */
/* @var $model OptionsAtm */

$this->breadcrumbs=array(
	'Options Atms'=>array('index'),
	$model->id_tbl_option_atm=>array('view','id'=>$model->id_tbl_option_atm),
	'Update',
);

$this->menu=array(
	array('label'=>'List OptionsAtm', 'url'=>array('index')),
	array('label'=>'Create OptionsAtm', 'url'=>array('create')),
	array('label'=>'View OptionsAtm', 'url'=>array('view', 'id'=>$model->id_tbl_option_atm)),
	array('label'=>'Manage OptionsAtm', 'url'=>array('admin')),
);
?>

<h1>Update OptionsAtm <?php echo $model->id_tbl_option_atm; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
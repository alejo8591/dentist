<?php
/* @var $this OptionsVitalSignsController */
/* @var $model OptionsVitalSigns */

$this->breadcrumbs=array(
	'Options Vital Signs'=>array('index'),
	$model->id_tbl_option_vital_signs=>array('view','id'=>$model->id_tbl_option_vital_signs),
	'Update',
);

$this->menu=array(
	array('label'=>'List OptionsVitalSigns', 'url'=>array('index')),
	array('label'=>'Create OptionsVitalSigns', 'url'=>array('create')),
	array('label'=>'View OptionsVitalSigns', 'url'=>array('view', 'id'=>$model->id_tbl_option_vital_signs)),
	array('label'=>'Manage OptionsVitalSigns', 'url'=>array('admin')),
);
?>

<h1>Update OptionsVitalSigns <?php echo $model->id_tbl_option_vital_signs; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
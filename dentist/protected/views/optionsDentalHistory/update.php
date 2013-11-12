<?php
/* @var $this OptionsDentalHistoryController */
/* @var $model OptionsDentalHistory */

$this->breadcrumbs=array(
	'Options Dental Histories'=>array('index'),
	$model->id_tbl_option_dental_history=>array('view','id'=>$model->id_tbl_option_dental_history),
	'Update',
);

$this->menu=array(
	array('label'=>'List OptionsDentalHistory', 'url'=>array('index')),
	array('label'=>'Create OptionsDentalHistory', 'url'=>array('create')),
	array('label'=>'View OptionsDentalHistory', 'url'=>array('view', 'id'=>$model->id_tbl_option_dental_history)),
	array('label'=>'Manage OptionsDentalHistory', 'url'=>array('admin')),
);
?>

<h1>Update OptionsDentalHistory <?php echo $model->id_tbl_option_dental_history; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
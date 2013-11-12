<?php
/* @var $this OptionsPathologicalHistoryController */
/* @var $model OptionsPathologicalHistory */

$this->breadcrumbs=array(
	'Options Pathological Histories'=>array('index'),
	$model->id_tbl_option_pathological_history=>array('view','id'=>$model->id_tbl_option_pathological_history),
	'Update',
);

$this->menu=array(
	array('label'=>'List OptionsPathologicalHistory', 'url'=>array('index')),
	array('label'=>'Create OptionsPathologicalHistory', 'url'=>array('create')),
	array('label'=>'View OptionsPathologicalHistory', 'url'=>array('view', 'id'=>$model->id_tbl_option_pathological_history)),
	array('label'=>'Manage OptionsPathologicalHistory', 'url'=>array('admin')),
);
?>

<h1>Update OptionsPathologicalHistory <?php echo $model->id_tbl_option_pathological_history; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
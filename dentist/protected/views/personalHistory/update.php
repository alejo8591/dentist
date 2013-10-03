<?php
/* @var $this PersonalHistoryController */
/* @var $model PersonalHistory */

$this->breadcrumbs=array(
	'Personal Histories'=>array('index'),
	$model->id_tbl_personal_history=>array('view','id'=>$model->id_tbl_personal_history),
	'Update',
);

$this->menu=array(
	array('label'=>'List PersonalHistory', 'url'=>array('index')),
	array('label'=>'Create PersonalHistory', 'url'=>array('create')),
	array('label'=>'View PersonalHistory', 'url'=>array('view', 'id'=>$model->id_tbl_personal_history)),
	array('label'=>'Manage PersonalHistory', 'url'=>array('admin')),
);
?>

<h1>Update PersonalHistory <?php echo $model->id_tbl_personal_history; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
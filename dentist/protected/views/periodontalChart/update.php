<?php
/* @var $this PeriodontalChartController */
/* @var $model PeriodontalChart */

$this->breadcrumbs=array(
	'Periodontal Charts'=>array('index'),
	$model->id_tbl_periodontal_chart=>array('view','id'=>$model->id_tbl_periodontal_chart),
	'Update',
);

$this->menu=array(
	array('label'=>'List PeriodontalChart', 'url'=>array('index')),
	array('label'=>'Create PeriodontalChart', 'url'=>array('create')),
	array('label'=>'View PeriodontalChart', 'url'=>array('view', 'id'=>$model->id_tbl_periodontal_chart)),
	array('label'=>'Manage PeriodontalChart', 'url'=>array('admin')),
);
?>

<h1>Update PeriodontalChart <?php echo $model->id_tbl_periodontal_chart; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
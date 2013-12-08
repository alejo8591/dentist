<?php
/* @var $this PeriodontalBiohazardController */
/* @var $model PeriodontalBiohazard */

$this->breadcrumbs=array(
	'Periodontal Biohazards'=>array('index'),
	$model->id_tbl_periodontal_biohazard=>array('view','id'=>$model->id_tbl_periodontal_biohazard),
	'Update',
);

$this->menu=array(
	array('label'=>'List PeriodontalBiohazard', 'url'=>array('index')),
	array('label'=>'Create PeriodontalBiohazard', 'url'=>array('create')),
	array('label'=>'View PeriodontalBiohazard', 'url'=>array('view', 'id'=>$model->id_tbl_periodontal_biohazard)),
	array('label'=>'Manage PeriodontalBiohazard', 'url'=>array('admin')),
);
?>

<h1>Update PeriodontalBiohazard <?php echo $model->id_tbl_periodontal_biohazard; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
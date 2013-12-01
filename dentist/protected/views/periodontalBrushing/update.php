<?php
/* @var $this PeriodontalBrushingController */
/* @var $model PeriodontalBrushing */

$this->breadcrumbs=array(
	'Periodontal Brushings'=>array('index'),
	$model->id_tbl_periodontal_brushing=>array('view','id'=>$model->id_tbl_periodontal_brushing),
	'Update',
);

$this->menu=array(
	array('label'=>'List PeriodontalBrushing', 'url'=>array('index')),
	array('label'=>'Create PeriodontalBrushing', 'url'=>array('create')),
	array('label'=>'View PeriodontalBrushing', 'url'=>array('view', 'id'=>$model->id_tbl_periodontal_brushing)),
	array('label'=>'Manage PeriodontalBrushing', 'url'=>array('admin')),
);
?>

<h1>Update PeriodontalBrushing <?php echo $model->id_tbl_periodontal_brushing; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
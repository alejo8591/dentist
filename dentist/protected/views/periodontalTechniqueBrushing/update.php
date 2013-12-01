<?php
/* @var $this PeriodontalTechniqueBrushingController */
/* @var $model PeriodontalTechniqueBrushing */

$this->breadcrumbs=array(
	'Periodontal Technique Brushings'=>array('index'),
	$model->id_tbl_periodontal_technique_brushing=>array('view','id'=>$model->id_tbl_periodontal_technique_brushing),
	'Update',
);

$this->menu=array(
	array('label'=>'List PeriodontalTechniqueBrushing', 'url'=>array('index')),
	array('label'=>'Create PeriodontalTechniqueBrushing', 'url'=>array('create')),
	array('label'=>'View PeriodontalTechniqueBrushing', 'url'=>array('view', 'id'=>$model->id_tbl_periodontal_technique_brushing)),
	array('label'=>'Manage PeriodontalTechniqueBrushing', 'url'=>array('admin')),
);
?>

<h1>Update PeriodontalTechniqueBrushing <?php echo $model->id_tbl_periodontal_technique_brushing; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
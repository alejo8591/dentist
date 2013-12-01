<?php
/* @var $this PeriodontalExaminationController */
/* @var $model PeriodontalExamination */

$this->breadcrumbs=array(
	'Periodontal Examinations'=>array('index'),
	$model->id_tbl_periodontal_examination=>array('view','id'=>$model->id_tbl_periodontal_examination),
	'Update',
);

$this->menu=array(
	array('label'=>'List PeriodontalExamination', 'url'=>array('index')),
	array('label'=>'Create PeriodontalExamination', 'url'=>array('create')),
	array('label'=>'View PeriodontalExamination', 'url'=>array('view', 'id'=>$model->id_tbl_periodontal_examination)),
	array('label'=>'Manage PeriodontalExamination', 'url'=>array('admin')),
);
?>

<h1>Update PeriodontalExamination <?php echo $model->id_tbl_periodontal_examination; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
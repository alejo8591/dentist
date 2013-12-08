<?php
/* @var $this DentalExaminationController */
/* @var $model DentalExamination */

$this->breadcrumbs=array(
	'Dental Examinations'=>array('index'),
	$model->id_tbl_dental_examination=>array('view','id'=>$model->id_tbl_dental_examination),
	'Update',
);

$this->menu=array(
	array('label'=>'List DentalExamination', 'url'=>array('index')),
	array('label'=>'Create DentalExamination', 'url'=>array('create')),
	array('label'=>'View DentalExamination', 'url'=>array('view', 'id'=>$model->id_tbl_dental_examination)),
	array('label'=>'Manage DentalExamination', 'url'=>array('admin')),
);
?>

<h1>Update DentalExamination <?php echo $model->id_tbl_dental_examination; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
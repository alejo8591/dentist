<?php
/* @var $this PhysicalExaminationController */
/* @var $model PhysicalExamination */

$this->breadcrumbs=array(
	'Physical Examinations'=>array('index'),
	$model->id_tbl_physical_examination=>array('view','id'=>$model->id_tbl_physical_examination),
	'Update',
);

$this->menu=array(
	array('label'=>'List PhysicalExamination', 'url'=>array('index')),
	array('label'=>'Create PhysicalExamination', 'url'=>array('create')),
	array('label'=>'View PhysicalExamination', 'url'=>array('view', 'id'=>$model->id_tbl_physical_examination)),
	array('label'=>'Manage PhysicalExamination', 'url'=>array('admin')),
);
?>

<h1>Update PhysicalExamination <?php echo $model->id_tbl_physical_examination; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
<?php
/* @var $this DiagnosisController */
/* @var $model Diagnosis */

$this->breadcrumbs=array(
	'Diagnosises'=>array('index'),
	$model->id_tbl_diagnosis=>array('view','id'=>$model->id_tbl_diagnosis),
	'Update',
);

$this->menu=array(
	array('label'=>'List Diagnosis', 'url'=>array('index')),
	array('label'=>'Create Diagnosis', 'url'=>array('create')),
	array('label'=>'View Diagnosis', 'url'=>array('view', 'id'=>$model->id_tbl_diagnosis)),
	array('label'=>'Manage Diagnosis', 'url'=>array('admin')),
);
?>

<h1>Update Diagnosis <?php echo $model->id_tbl_diagnosis; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
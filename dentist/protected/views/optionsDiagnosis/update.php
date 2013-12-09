<?php
/* @var $this OptionsDiagnosisController */
/* @var $model OptionsDiagnosis */

$this->breadcrumbs=array(
	'Options Diagnosises'=>array('index'),
	$model->id_tbl_option_diagnosis=>array('view','id'=>$model->id_tbl_option_diagnosis),
	'Update',
);

$this->menu=array(
	array('label'=>'List OptionsDiagnosis', 'url'=>array('index')),
	array('label'=>'Create OptionsDiagnosis', 'url'=>array('create')),
	array('label'=>'View OptionsDiagnosis', 'url'=>array('view', 'id'=>$model->id_tbl_option_diagnosis)),
	array('label'=>'Manage OptionsDiagnosis', 'url'=>array('admin')),
);
?>

<h1>Update OptionsDiagnosis <?php echo $model->id_tbl_option_diagnosis; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
<?php
/* @var $this OptionsExtraoralExaminationController */
/* @var $model OptionsExtraoralExamination */

$this->breadcrumbs=array(
	'Options Extraoral Examinations'=>array('index'),
	$model->id_tbl_option_extraoral_examination=>array('view','id'=>$model->id_tbl_option_extraoral_examination),
	'Update',
);

$this->menu=array(
	array('label'=>'List OptionsExtraoralExamination', 'url'=>array('index')),
	array('label'=>'Create OptionsExtraoralExamination', 'url'=>array('create')),
	array('label'=>'View OptionsExtraoralExamination', 'url'=>array('view', 'id'=>$model->id_tbl_option_extraoral_examination)),
	array('label'=>'Manage OptionsExtraoralExamination', 'url'=>array('admin')),
);
?>

<h1>Update OptionsExtraoralExamination <?php echo $model->id_tbl_option_extraoral_examination; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
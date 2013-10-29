<?php
/* @var $this DuringConsultationController */
/* @var $model DuringConsultation */

$this->breadcrumbs=array(
	'During Consultations'=>array('index'),
	$model->id_tbl_during_consultation=>array('view','id'=>$model->id_tbl_during_consultation),
	'Update',
);

$this->menu=array(
	array('label'=>'List DuringConsultation', 'url'=>array('index')),
	array('label'=>'Create DuringConsultation', 'url'=>array('create')),
	array('label'=>'View DuringConsultation', 'url'=>array('view', 'id'=>$model->id_tbl_during_consultation)),
	array('label'=>'Manage DuringConsultation', 'url'=>array('admin')),
);
?>

<h1>Update DuringConsultation <?php echo $model->id_tbl_during_consultation; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
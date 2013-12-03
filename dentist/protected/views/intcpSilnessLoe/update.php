<?php
/* @var $this IntcpSilnessLoeController */
/* @var $model IntcpSilnessLoe */

$this->breadcrumbs=array(
	'Intcp Silness Loes'=>array('index'),
	$model->id_tbl_intcp_silness_loe=>array('view','id'=>$model->id_tbl_intcp_silness_loe),
	'Update',
);

$this->menu=array(
	array('label'=>'List IntcpSilnessLoe', 'url'=>array('index')),
	array('label'=>'Create IntcpSilnessLoe', 'url'=>array('create')),
	array('label'=>'View IntcpSilnessLoe', 'url'=>array('view', 'id'=>$model->id_tbl_intcp_silness_loe)),
	array('label'=>'Manage IntcpSilnessLoe', 'url'=>array('admin')),
);
?>

<h1>Update IntcpSilnessLoe <?php echo $model->id_tbl_intcp_silness_loe; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
<?php
/* @var $this IntcpController */
/* @var $model Intcp */

$this->breadcrumbs=array(
	'Intcps'=>array('index'),
	$model->id_tbl_intcp=>array('view','id'=>$model->id_tbl_intcp),
	'Update',
);

$this->menu=array(
	array('label'=>'List Intcp', 'url'=>array('index')),
	array('label'=>'Create Intcp', 'url'=>array('create')),
	array('label'=>'View Intcp', 'url'=>array('view', 'id'=>$model->id_tbl_intcp)),
	array('label'=>'Manage Intcp', 'url'=>array('admin')),
);
?>

<h1>Update Intcp <?php echo $model->id_tbl_intcp; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
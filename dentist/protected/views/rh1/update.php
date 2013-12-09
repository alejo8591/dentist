<?php
/* @var $this Rh1Controller */
/* @var $model Rh1 */

$this->breadcrumbs=array(
	'Rh1s'=>array('index'),
	$model->id_tbl_rh1=>array('view','id'=>$model->id_tbl_rh1),
	'Update',
);

$this->menu=array(
	array('label'=>'List Rh1', 'url'=>array('index')),
	array('label'=>'Create Rh1', 'url'=>array('create')),
	array('label'=>'View Rh1', 'url'=>array('view', 'id'=>$model->id_tbl_rh1)),
	array('label'=>'Manage Rh1', 'url'=>array('admin')),
);
?>

<h1>Update Rh1 <?php echo $model->id_tbl_rh1; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
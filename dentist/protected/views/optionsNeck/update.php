<?php
/* @var $this OptionsNeckController */
/* @var $model OptionsNeck */

$this->breadcrumbs=array(
	'Options Necks'=>array('index'),
	$model->id_tbl_option_neck=>array('view','id'=>$model->id_tbl_option_neck),
	'Update',
);

$this->menu=array(
	array('label'=>'List OptionsNeck', 'url'=>array('index')),
	array('label'=>'Create OptionsNeck', 'url'=>array('create')),
	array('label'=>'View OptionsNeck', 'url'=>array('view', 'id'=>$model->id_tbl_option_neck)),
	array('label'=>'Manage OptionsNeck', 'url'=>array('admin')),
);
?>

<h1>Update OptionsNeck <?php echo $model->id_tbl_option_neck; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
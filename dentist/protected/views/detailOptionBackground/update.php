<?php
/* @var $this DetailOptionBackgroundController */
/* @var $model DetailOptionBackground */

$this->breadcrumbs=array(
	'Detail Option Backgrounds'=>array('index'),
	$model->id_tbl_detail_option_background=>array('view','id'=>$model->id_tbl_detail_option_background),
	'Update',
);

$this->menu=array(
	array('label'=>'List DetailOptionBackground', 'url'=>array('index')),
	array('label'=>'Create DetailOptionBackground', 'url'=>array('create')),
	array('label'=>'View DetailOptionBackground', 'url'=>array('view', 'id'=>$model->id_tbl_detail_option_background)),
	array('label'=>'Manage DetailOptionBackground', 'url'=>array('admin')),
);
?>

<h1>Update DetailOptionBackground <?php echo $model->id_tbl_detail_option_background; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
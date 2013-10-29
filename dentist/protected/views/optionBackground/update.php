<?php
/* @var $this OptionBackgroundController */
/* @var $model OptionBackground */

$this->breadcrumbs=array(
	'Option Backgrounds'=>array('index'),
	$model->id_tbl_option_background=>array('view','id'=>$model->id_tbl_option_background),
	'Update',
);

$this->menu=array(
	array('label'=>'List OptionBackground', 'url'=>array('index')),
	array('label'=>'Create OptionBackground', 'url'=>array('create')),
	array('label'=>'View OptionBackground', 'url'=>array('view', 'id'=>$model->id_tbl_option_background)),
	array('label'=>'Manage OptionBackground', 'url'=>array('admin')),
);
?>

<h1>Update OptionBackground <?php echo $model->id_tbl_option_background; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
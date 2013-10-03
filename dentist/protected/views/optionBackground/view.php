<?php
/* @var $this OptionBackgroundController */
/* @var $model OptionBackground */

$this->breadcrumbs=array(
	'Option Backgrounds'=>array('index'),
	$model->id_tbl_option_background,
);

$this->menu=array(
	array('label'=>'List OptionBackground', 'url'=>array('index')),
	array('label'=>'Create OptionBackground', 'url'=>array('create')),
	array('label'=>'Update OptionBackground', 'url'=>array('update', 'id'=>$model->id_tbl_option_background)),
	array('label'=>'Delete OptionBackground', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_tbl_option_background),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage OptionBackground', 'url'=>array('admin')),
);
?>

<h1>View OptionBackground #<?php echo $model->id_tbl_option_background; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_tbl_option_background',
		'id_tbl_background',
		'name_option_background',
		'description',
		// 'create_user_id',
		// 'create_time',
		// 'update_user_id',
		// 'update_time',
	),
)); ?>

<?php
/* @var $this DetailOptionBackgroundController */
/* @var $model DetailOptionBackground */

$this->breadcrumbs=array(
	'Detail Option Backgrounds'=>array('index'),
	$model->id_tbl_detail_option_background,
);

$this->menu=array(
	array('label'=>'List DetailOptionBackground', 'url'=>array('index')),
	array('label'=>'Create DetailOptionBackground', 'url'=>array('create')),
	array('label'=>'Update DetailOptionBackground', 'url'=>array('update', 'id'=>$model->id_tbl_detail_option_background)),
	array('label'=>'Delete DetailOptionBackground', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_tbl_detail_option_background),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage DetailOptionBackground', 'url'=>array('admin')),
);
?>

<h1>View DetailOptionBackground #<?php echo $model->id_tbl_detail_option_background; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_tbl_detail_option_background',
		'id_tbl_option_background',
		'name_detail_option_background',
		'description',
		'flag_detail_option_background',
		// 'create_user_id',
		// 'create_time',
		// 'update_user_id',
		// 'update_time',
	),
)); ?>

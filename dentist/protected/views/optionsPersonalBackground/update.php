<?php
/* @var $this OptionsPersonalBackgroundController */
/* @var $model OptionsPersonalBackground */

$this->breadcrumbs=array(
	'Options Personal Backgrounds'=>array('index'),
	$model->id_tbl_option_personal_background=>array('view','id'=>$model->id_tbl_option_personal_background),
	'Update',
);

$this->menu=array(
	array('label'=>'List OptionsPersonalBackground', 'url'=>array('index')),
	array('label'=>'Create OptionsPersonalBackground', 'url'=>array('create')),
	array('label'=>'View OptionsPersonalBackground', 'url'=>array('view', 'id'=>$model->id_tbl_option_personal_background)),
	array('label'=>'Manage OptionsPersonalBackground', 'url'=>array('admin')),
);
?>

<h1>Update OptionsPersonalBackground <?php echo $model->id_tbl_option_personal_background; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
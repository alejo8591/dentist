<?php
/* @var $this OptionsLymphadenopathyController */
/* @var $model OptionsLymphadenopathy */

$this->breadcrumbs=array(
	'Options Lymphadenopathies'=>array('index'),
	$model->id_tbl_option_lymphadenopathy=>array('view','id'=>$model->id_tbl_option_lymphadenopathy),
	'Update',
);

$this->menu=array(
	array('label'=>'List OptionsLymphadenopathy', 'url'=>array('index')),
	array('label'=>'Create OptionsLymphadenopathy', 'url'=>array('create')),
	array('label'=>'View OptionsLymphadenopathy', 'url'=>array('view', 'id'=>$model->id_tbl_option_lymphadenopathy)),
	array('label'=>'Manage OptionsLymphadenopathy', 'url'=>array('admin')),
);
?>

<h1>Update OptionsLymphadenopathy <?php echo $model->id_tbl_option_lymphadenopathy; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
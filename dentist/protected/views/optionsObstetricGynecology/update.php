<?php
/* @var $this OptionsObstetricGynecologyController */
/* @var $model OptionsObstetricGynecology */

$this->breadcrumbs=array(
	'Options Obstetric Gynecologies'=>array('index'),
	$model->id_tbl_option_obstetric_gynecology=>array('view','id'=>$model->id_tbl_option_obstetric_gynecology),
	'Update',
);

$this->menu=array(
	array('label'=>'List OptionsObstetricGynecology', 'url'=>array('index')),
	array('label'=>'Create OptionsObstetricGynecology', 'url'=>array('create')),
	array('label'=>'View OptionsObstetricGynecology', 'url'=>array('view', 'id'=>$model->id_tbl_option_obstetric_gynecology)),
	array('label'=>'Manage OptionsObstetricGynecology', 'url'=>array('admin')),
);
?>

<h1>Update OptionsObstetricGynecology <?php echo $model->id_tbl_option_obstetric_gynecology; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
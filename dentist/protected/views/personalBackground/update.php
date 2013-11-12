<?php
/* @var $this PersonalBackgroundController */
/* @var $model PersonalBackground */

$this->breadcrumbs=array(
	'Personal Backgrounds'=>array('index'),
	$model->id_tbl_personal_background=>array('view','id'=>$model->id_tbl_personal_background),
	'Update',
);

$this->menu=array(
	array('label'=>'List PersonalBackground', 'url'=>array('index')),
	array('label'=>'Create PersonalBackground', 'url'=>array('create')),
	array('label'=>'View PersonalBackground', 'url'=>array('view', 'id'=>$model->id_tbl_personal_background)),
	array('label'=>'Manage PersonalBackground', 'url'=>array('admin')),
);
?>

<h1>Update PersonalBackground <?php echo $model->id_tbl_personal_background; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
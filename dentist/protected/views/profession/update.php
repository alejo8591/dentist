<?php
/* @var $this ProfessionController */
/* @var $model Profession */

$this->breadcrumbs=array(
	'Professions'=>array('index'),
	$model->id_tbl_profession=>array('view','id'=>$model->id_tbl_profession),
	'Update',
);

$this->menu=array(
	array('label'=>'List Profession', 'url'=>array('index')),
	array('label'=>'Create Profession', 'url'=>array('create')),
	array('label'=>'View Profession', 'url'=>array('view', 'id'=>$model->id_tbl_profession)),
	array('label'=>'Manage Profession', 'url'=>array('admin')),
);
?>

<h1>Update Profession <?php echo $model->id_tbl_profession; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
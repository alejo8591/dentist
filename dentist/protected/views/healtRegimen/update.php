<?php
/* @var $this HealtRegimenController */
/* @var $model HealtRegimen */

$this->breadcrumbs=array(
	'Healt Regimens'=>array('index'),
	$model->id_tbl_healt_regimen=>array('view','id'=>$model->id_tbl_healt_regimen),
	'Update',
);

$this->menu=array(
	array('label'=>'List HealtRegimen', 'url'=>array('index')),
	array('label'=>'Create HealtRegimen', 'url'=>array('create')),
	array('label'=>'View HealtRegimen', 'url'=>array('view', 'id'=>$model->id_tbl_healt_regimen)),
	array('label'=>'Manage HealtRegimen', 'url'=>array('admin')),
);
?>

<h1>Update HealtRegimen <?php echo $model->id_tbl_healt_regimen; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
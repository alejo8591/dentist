<?php
/* @var $this HealtInstitutionController */
/* @var $model HealtInstitution */

$this->breadcrumbs=array(
	'Healt Institutions'=>array('index'),
	$model->id_tbl_healt_institution=>array('view','id'=>$model->id_tbl_healt_institution),
	'Update',
);

$this->menu=array(
	array('label'=>'List HealtInstitution', 'url'=>array('index')),
	array('label'=>'Create HealtInstitution', 'url'=>array('create')),
	array('label'=>'View HealtInstitution', 'url'=>array('view', 'id'=>$model->id_tbl_healt_institution)),
	array('label'=>'Manage HealtInstitution', 'url'=>array('admin')),
);
?>

<h1>Update HealtInstitution <?php echo $model->id_tbl_healt_institution; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
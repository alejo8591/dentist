<?php
/* @var $this RipsProceduresController */
/* @var $model RipsProcedures */

$this->breadcrumbs=array(
	'Rips Procedures'=>array('index'),
	$model->id_tbl_rips_procedures=>array('view','id'=>$model->id_tbl_rips_procedures),
	'Update',
);

$this->menu=array(
	array('label'=>'List RipsProcedures', 'url'=>array('index')),
	array('label'=>'Create RipsProcedures', 'url'=>array('create')),
	array('label'=>'View RipsProcedures', 'url'=>array('view', 'id'=>$model->id_tbl_rips_procedures)),
	array('label'=>'Manage RipsProcedures', 'url'=>array('admin')),
);
?>

<h1>Update RipsProcedures <?php echo $model->id_tbl_rips_procedures; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
<?php
/* @var $this HealtInstitutionController */
/* @var $model HealtInstitution */

$this->breadcrumbs=array(
	'Healt Institutions'=>array('index'),
	$model->id_tbl_healt_institution=>array('view','id'=>$model->id_tbl_healt_institution),
	'Update',
);

$this->menu=array(
	array('label'=>'Listar Entidades', 'url'=>array('index')),
	array('label'=>'Crear Entidad', 'url'=>array('create')),
	array('label'=>'Ver Entidad', 'url'=>array('view', 'id'=>$model->id_tbl_healt_institution)),
	array('label'=>'Administrar Entidades', 'url'=>array('admin')),
);
?>

<h1>Actualizar Entidad <?php echo $model->id_tbl_healt_institution; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
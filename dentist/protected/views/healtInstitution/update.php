<?php
/* @var $this HealtInstitutionController */
/* @var $model HealtInstitution */

$this->breadcrumbs=array(
	'Institución de Salud'=>array('index'),
	$model->id_tbl_healt_institution=>array('view','id'=>$model->id_tbl_healt_institution),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Listar Entidades', 'url'=>array('index')),
	array('label'=>'Crear Entidad', 'url'=>array('create')),
	array('label'=>'Ver Entidad', 'url'=>array('view', 'id'=>$model->id_tbl_healt_institution)),
);
?>

<h1>Actualizar Entidad <?php echo $model->id_tbl_healt_institution; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
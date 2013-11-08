<?php
/* @var $this HealtRegimenController */
/* @var $model HealtRegimen */

$this->breadcrumbs=array(
	'Healt Regimens'=>array('index'),
	$model->id_tbl_healt_regimen=>array('view','id'=>$model->id_tbl_healt_regimen),
	'Update',
);

$this->menu=array(
	array('label'=>'Listar los Regime', 'url'=>array('index')),
	array('label'=>'Crear Regimen', 'url'=>array('create')),
	array('label'=>'Ver Regimen', 'url'=>array('view', 'id'=>$model->id_tbl_healt_regimen)),
	array('label'=>'Administrar los Regimen', 'url'=>array('admin')),
);
?>

<h1>Actualizar Regimen de Salud <?php echo $model->id_tbl_healt_regimen; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
<?php
/* @var $this HealtRegimenController */
/* @var $model HealtRegimen */

$this->breadcrumbs=array(
	'Régimen de Salud'=>array('index'),
	$model->id_tbl_healt_regimen,
);

$this->menu=array(
	array('label'=>'Listar los Regimen', 'url'=>array('index')),
	array('label'=>'Crear Regimen', 'url'=>array('create')),
	array('label'=>'Actualizar Regimen', 'url'=>array('update', 'id'=>$model->id_tbl_healt_regimen)),
	array('label'=>'Eliminar Regimen', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_tbl_healt_regimen),'confirm'=>'Esta seguro que desea eliminar este ítem?')),
);
?>

<h1>Ver los Regimen de Salud #<?php echo $model->id_tbl_healt_regimen; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_tbl_healt_regimen',
		'name_healt_regimen',
		'description',
	),
)); ?>

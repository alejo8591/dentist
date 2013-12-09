<?php
/* @var $this HealtInstitutionController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Institución de Salud',
);

$this->menu=array(
	array('label'=>'Crear Entidad', 'url'=>array('create')),
);
?>

<h1>Entidades Prestadoras de Salud</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

<?php
/* @var $this HealtInstitutionController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Healt Institutions',
);

$this->menu=array(
	array('label'=>'Crear Entidad', 'url'=>array('create')),
	array('label'=>'Administrar Entidades', 'url'=>array('admin')),
);
?>

<h1>Entidades Prestadoras de Salud</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

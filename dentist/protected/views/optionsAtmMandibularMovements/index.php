<?php
/* @var $this OptionsAtmMandibularMovementsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Options Atm Mandibular Movements',
);

$this->menu=array(
	array('label'=>'Create OptionsAtmMandibularMovements', 'url'=>array('create')),
	array('label'=>'Manage OptionsAtmMandibularMovements', 'url'=>array('admin')),
);
?>

<h1>Options Atm Mandibular Movements</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
